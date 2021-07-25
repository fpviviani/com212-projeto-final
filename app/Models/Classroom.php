<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

/**
 * Class Classroom
 * @package App\Models
 * @version July 24, 2021, 12:00 am UTC
 *
 * @property boolean $availability
 * @property integer $capacity
 */
class Classroom extends Model
{

    use HasFactory;

    public $table = 'classrooms';
    
    public $fillable = [
        'id',
        'availability',
        'capacity'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'availability' => 'boolean',
        'capacity' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => 'required',
        'availability' => 'required',
        'capacity' => 'required'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'readable_created_at',
        'readable_updated_at',
        'readable_availability'
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
     * Get availability formatted as Yes or No
     *
     * @return string
     */
    public function getReadableAvailabilityAttribute()
    {
        if($this->availability == 1){
            return "Sim";
        }else{
            return "Não";
        }
    }
}
