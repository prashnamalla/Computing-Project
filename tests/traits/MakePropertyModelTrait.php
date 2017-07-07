<?php

use Faker\Factory as Faker;
use App\Models\PropertyModel;
use App\Repositories\PropertyModelRepository;

trait MakePropertyModelTrait
{
    /**
     * Create fake instance of PropertyModel and save it in database
     *
     * @param array $propertyModelFields
     * @return PropertyModel
     */
    public function makePropertyModel($propertyModelFields = [])
    {
        /** @var PropertyModelRepository $propertyModelRepo */
        $propertyModelRepo = App::make(PropertyModelRepository::class);
        $theme = $this->fakePropertyModelData($propertyModelFields);
        return $propertyModelRepo->create($theme);
    }

    /**
     * Get fake instance of PropertyModel
     *
     * @param array $propertyModelFields
     * @return PropertyModel
     */
    public function fakePropertyModel($propertyModelFields = [])
    {
        return new PropertyModel($this->fakePropertyModelData($propertyModelFields));
    }

    /**
     * Get fake data of PropertyModel
     *
     * @param array $postFields
     * @return array
     */
    public function fakePropertyModelData($propertyModelFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $propertyModelFields);
    }
}
