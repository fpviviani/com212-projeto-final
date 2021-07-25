<?php

namespace App\Repositories;

use App\Models\Teacher;
use App\Repositories\BaseRepository;

/**
 * Class TeacherRepository
 * @package App\Repositories
 * @version July 24, 2021, 2:46 pm UTC
*/

class TeacherRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'birthdate',
        'sex',
        'address',
        'address_number',
        'complement',
        'neighborhood',
        'city',
        'state',
        'zipcode',
        'document',
        'phone_number',
        'subjects'
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
        return Teacher::class;
    }
}
