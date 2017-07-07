<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PropertyModelApiTest extends TestCase
{
    use MakePropertyModelTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatePropertyModel()
    {
        $propertyModel = $this->fakePropertyModelData();
        $this->json('POST', '/api/v1/propertyModels', $propertyModel);

        $this->assertApiResponse($propertyModel);
    }

    /**
     * @test
     */
    public function testReadPropertyModel()
    {
        $propertyModel = $this->makePropertyModel();
        $this->json('GET', '/api/v1/propertyModels/'.$propertyModel->id);

        $this->assertApiResponse($propertyModel->toArray());
    }

    /**
     * @test
     */
    public function testUpdatePropertyModel()
    {
        $propertyModel = $this->makePropertyModel();
        $editedPropertyModel = $this->fakePropertyModelData();

        $this->json('PUT', '/api/v1/propertyModels/'.$propertyModel->id, $editedPropertyModel);

        $this->assertApiResponse($editedPropertyModel);
    }

    /**
     * @test
     */
    public function testDeletePropertyModel()
    {
        $propertyModel = $this->makePropertyModel();
        $this->json('DELETE', '/api/v1/propertyModels/'.$propertyModel->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/propertyModels/'.$propertyModel->id);

        $this->assertResponseStatus(404);
    }
}
