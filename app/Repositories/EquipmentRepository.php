<?php

namespace App\Repositories;

use App\Models\Equipment;
use App\Repositories\BaseRepository;

/**
 * Class EquipmentRepository
 * @package App\Repositories
 * @version July 24, 2021, 2:47 pm UTC
*/

class EquipmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'buy_date',
        'price',
        'condition'
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
        return Equipment::class;
    }
}
