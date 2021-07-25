<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Equipment
 * @package App\Models
 * @version July 24, 2021, 2:47 pm UTC
 *
 * @property string $name
 * @property string $description
 * @property string $buy_date
 * @property number $price
 * @property string $condition
 */
class Equipment extends Model
{

    use HasFactory;

    public $table = 'equipments';
    



    public $fillable = [
        'name',
        'description',
        'buy_date',
        'price',
        'condition'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'buy_date' => 'date',
        'price' => 'float',
        'condition' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'description' => 'nullable',
        'buy_date' => 'required',
        'price' => 'required',
        'condition' => 'required'
    ];

    
}
