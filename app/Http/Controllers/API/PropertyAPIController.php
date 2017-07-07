<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePropertyAPIRequest;
use App\Http\Requests\API\UpdatePropertyAPIRequest;
use App\Models\Property;
use App\Repositories\PropertyRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class PropertyController
 * @package App\Http\Controllers\API
 */

class PropertyAPIController extends AppBaseController
{
    /** @var  PropertyRepository */
    private $propertyRepository;

    public function __construct(PropertyRepository $propertyRepo)
    {
        $this->propertyRepository = $propertyRepo;
    }

    /**
     * Display a listing of the Property.
     * GET|HEAD /properties
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->propertyRepository->pushCriteria(new RequestCriteria($request));
        $this->propertyRepository->pushCriteria(new LimitOffsetCriteria($request));
        $properties = $this->propertyRepository->all();

        return $this->sendResponse($properties->toArray(), 'Properties retrieved successfully');
    }

    /**
     * Store a newly created Property in storage.
     * POST /properties
     *
     * @param CreatePropertyAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePropertyAPIRequest $request)
    {
        $input = $request->all();

        $properties = $this->propertyRepository->create($input);

        return $this->sendResponse($properties->toArray(), 'Property saved successfully');
    }

    /**
     * Display the specified Property.
     * GET|HEAD /properties/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Property $property */
        $property = $this->propertyRepository->findWithoutFail($id);

        if (empty($property)) {
            return $this->sendError('Property not found');
        }

        return $this->sendResponse($property->toArray(), 'Property retrieved successfully');
    }

    /**
     * Update the specified Property in storage.
     * PUT/PATCH /properties/{id}
     *
     * @param  int $id
     * @param UpdatePropertyAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePropertyAPIRequest $request)
    {
        $input = $request->all();

        /** @var Property $property */
        $property = $this->propertyRepository->findWithoutFail($id);

        if (empty($property)) {
            return $this->sendError('Property not found');
        }

        $property = $this->propertyRepository->update($input, $id);

        return $this->sendResponse($property->toArray(), 'Property updated successfully');
    }

    /**
     * Remove the specified Property from storage.
     * DELETE /properties/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Property $property */
        $property = $this->propertyRepository->findWithoutFail($id);

        if (empty($property)) {
            return $this->sendError('Property not found');
        }

        $property->delete();

        return $this->sendResponse($id, 'Property deleted successfully');
    }
}
