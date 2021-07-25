<?php

namespace App\Models;

use Eloquent as Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Student
 * @package App\Models
 * @version July 24, 2021, 2:47 pm UTC
 *
 * @property string $name
 * @property string $birthdate
 * @property string $registration_number
 * @property string $address
 * @property string $address_number
 * @property string $complement
 * @property string $neighborhood
 * @property string $city
 * @property string $state
 * @property string $zipcode
 * @property string $sex
 * @property string $document
 * @property string $phone_number
 * @property string $subjects
 * @property string $responsible_name
 * @property string $responsible_document
 * @property string $responsible_phone_number
 */
class Student extends Model
{

    use HasFactory;

    public $table = 'students';
    



    public $fillable = [
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
        'responsible_name',
        'responsible_document',
        'responsible_phone_number',
        'class_id'
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
        'registration_number' => 'string',
        'address' => 'string',
        'address_number' => 'string',
        'complement' => 'string',
        'neighborhood' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zipcode' => 'string',
        'sex' => 'string',
        'document' => 'string',
        'phone_number' => 'string',
        'responsible_name' => 'string',
        'responsible_document' => 'string',
        'responsible_phone_number' => 'string',
        'class_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'birthdate' => 'required',
        'registration_number' => 'required',
        'address' => 'required',
        'address_number' => 'required',
        'complement' => 'nullable',
        'neighborhood' => 'required',
        'city' => 'required',
        'state' => 'required',
        'zipcode' => 'required',
        'sex' => 'required',
        'document' => 'required',
        'phone_number' => 'nullable',
        'responsible_name' => 'required',
        'responsible_document' => 'required',
        'responsible_phone_number' => 'required'
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function class()
    {
        return $this->belongsTo(\App\Models\Classes::class, 'class_id', 'id');
    }
}
