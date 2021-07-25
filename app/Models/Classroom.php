<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    
}
