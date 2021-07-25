<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

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

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'readable_created_at',
        'readable_updated_at'
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
}
