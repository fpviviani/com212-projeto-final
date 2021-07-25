<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Employee
 * @package App\Models
 * @version July 24, 2021, 2:47 pm UTC
 *
 * @property string $name
 * @property string $birthdate
 * @property string $sex
 * @property string $address
 * @property string $address_number
 * @property string $complement
 * @property string $neighborhood
 * @property string $city
 * @property string $state
 * @property string $zipcode
 * @property string $document
 * @property string $phone_numer
 * @property string $employee_type
 */
class Employee extends Model
{

    use HasFactory;

    public $table = 'employees';
    



    public $fillable = [
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
        'phone_numer',
        'employee_type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'birthdate' => 'date',
        'sex' => 'string',
        'address' => 'string',
        'address_number' => 'string',
        'complement' => 'string',
        'neighborhood' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zipcode' => 'string',
        'document' => 'string',
        'phone_numer' => 'string',
        'employee_type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'birthdate' => 'required',
        'sex' => 'required',
        'address' => 'required',
        'address_number' => 'required',
        'complement' => 'nullable',
        'neighborhood' => 'required',
        'city' => 'required',
        'state' => 'required',
        'zipcode' => 'required',
        'document' => 'required',
        'phone_numer' => 'required',
        'employee_type' => 'required'
    ];

    
}
