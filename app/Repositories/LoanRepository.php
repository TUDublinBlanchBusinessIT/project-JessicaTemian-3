<?php

namespace App\Repositories;

use App\Models\Loan;
use App\Repositories\BaseRepository;

/**
 * Class LoanRepository
 * @package App\Repositories
 * @version April 14, 2025, 11:35 am UTC
*/

class LoanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'book_id',
        'member_id',
        'borrow_date',
        'return_date'
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
        return Loan::class;
    }
}
