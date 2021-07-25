<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

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

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'readable_created_at',
        'readable_updated_at',
        'readable_birthdate'
    ];

    /**
     * Get created_at formatted as d/m/Y | H:i
     *
     * @return string
     */
    public function getReadableCreatedAtAttribute()
    {
        return is_null($this->created_at)? null : Carbon::parse($this->created_at)->format('d/m/Y | H:i');
    }

    /**
     * Get updated_at formatted as d/m/Y | H:i
     *
     * @return string
     */
    public function getReadableUpdatedAtAttribute()
    {
        return is_null($this->updated_at)? null : Carbon::parse($this->updated_at)->format('d/m/Y | H:i');
    }

    /**
     * Get birthdate formatted as d/m/Y
     *
     * @return string
     */
    public function getReadableBirthdateAttribute()
    {
        return is_null($this->birthdate)? null : Carbon::parse($this->birthdate)->format('d/m/Y');
    }
}
