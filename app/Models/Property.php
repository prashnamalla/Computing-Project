<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Property
 * @package App\Models
 * @version July 6, 2017, 3:00 pm UTC
 */
class Property extends Model
{
    use SoftDeletes;

    public $table = 'properties';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'property_name',
        'property_type',
        'description',
        'image',
        'price',
        'land_size',
        'builtup',
        'floors',
        'bedrooms',
        'bathrooms',
        'living_room',
        'water_supply',
        'furnishing',
        'features',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        // 'property_name' => 'required',
        // 'property_type' => 'required',
        // 'image' => 'required',
    ];

    
}
