<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Loan
 * @package App\Models
 * @version April 14, 2025, 11:35 am UTC
 *
 * @property \App\Models\Book $book
 * @property \App\Models\Member $member
 * @property integer $book_id
 * @property integer $member_id
 * @property string|\Carbon\Carbon $borrow_date
 * @property string|\Carbon\Carbon $return_date
 */
class Loan extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'loans';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'book_id',
        'member_id',
        'borrow_date',
        'return_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'book_id' => 'integer',
        'member_id' => 'integer',
        'borrow_date' => 'datetime',
        'return_date' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'book_id' => 'nullable|integer',
        'member_id' => 'nullable|integer',
        'borrow_date' => 'nullable',
        'return_date' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function book()
    {
        return $this->belongsTo(\App\Models\Book::class, 'book_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function member()
    {
        return $this->belongsTo(\App\Models\Member::class, 'member_id');
    }
}
