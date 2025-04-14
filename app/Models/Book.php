<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Book
 * @package App\Models
 * @version April 14, 2025, 11:31 am UTC
 *
 * @property \App\Models\Genre $genre
 * @property \Illuminate\Database\Eloquent\Collection $loans
 * @property string $title
 * @property string $author
 * @property integer $genre_id
 * @property string $published_year
 * @property string $condition
 * @property boolean $is_available
 */
class Book extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'books';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'author',
        'genre_id',
        'published_year',
        'condition',
        'is_available'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'author' => 'string',
        'genre_id' => 'integer',
        'published_year' => 'date',
        'condition' => 'string',
        'is_available' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'nullable|string|max:100',
        'author' => 'nullable|string|max:100',
        'genre_id' => 'nullable|integer',
        'published_year' => 'nullable',
        'condition' => 'nullable|string|max:50',
        'is_available' => 'nullable|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function genre()
    {
        return $this->belongsTo(\App\Models\Genre::class, 'genre_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function loans()
    {
        return $this->hasMany(\App\Models\Loan::class, 'book_id');
    }
}
