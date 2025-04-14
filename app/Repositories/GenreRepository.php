<?php

namespace App\Repositories;

use App\Models\Genre;
use App\Repositories\BaseRepository;

/**
 * Class GenreRepository
 * @package App\Repositories
 * @version April 14, 2025, 11:34 am UTC
*/

class GenreRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Genre::class;
    }
}
