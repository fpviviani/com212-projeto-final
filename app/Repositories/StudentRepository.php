<?php

namespace App\Repositories;

use App\Models\Student;
use App\Repositories\BaseRepository;

/**
 * Class StudentRepository
 * @package App\Repositories
 * @version July 24, 2021, 2:47 pm UTC
*/

class StudentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'birthdate',
        'registration_number',
        'address',
        'address_number',
        'complement',
        'neighborhood',
        'city',
        'state',
        'zipcode',
        'sex',
        'document',
        'phone_number',
        'subjects',
        'responsible_name',
        'responsible_document',
        'responsible_phone_number'
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
        return Student::class;
    }
}
