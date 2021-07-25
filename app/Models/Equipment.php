<?php

namespace App\Models;

use Eloquent as Model;
use Carbon\Carbon;
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

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'readable_created_at',
        'readable_updated_at',
        'readable_buy_date',
        'readable_price'
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
     * Get buy_date formatted as d/m/Y
     *
     * @return string
     */
    public function getReadableBuyDateAttribute()
    {
        return is_null($this->buy_date)? null : Carbon::parse($this->buy_date)->format('d/m/Y');
    }

    /**
     * Get price with 2 decimal places, ',' as decimal separator and '.' as thousand separator
     *
     * @return string
     */
    public function getReadablePriceAttribute()
    {
        return is_null($this->price)? null : number_format($this->price, 2, ',', '.');
    }
}
