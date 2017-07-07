<?php

namespace App\Repositories;

use App\Models\Property;
use InfyOm\Generator\Common\BaseRepository;

class PropertyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Property::class;
    }
}
