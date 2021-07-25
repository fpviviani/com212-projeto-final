<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Classes
 * @package App\Models
 * @version July 24, 2021, 2:46 pm UTC
 *
 * @property integer $year
 * @property string $designation
 */
class Classes extends Model
{

    use HasFactory;

    public $table = 'classes';
    



    public $fillable = [
        'year',
        'designation'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'year' => 'integer',
        'designation' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'year' => 'required',
        'designation' => 'nullable'
    ];

    
}
