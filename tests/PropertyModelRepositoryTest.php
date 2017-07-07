<?php

use App\Models\PropertyModel;
use App\Repositories\PropertyModelRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PropertyModelRepositoryTest extends TestCase
{
    use MakePropertyModelTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var PropertyModelRepository
     */
    protected $propertyModelRepo;

    public function setUp()
    {
        parent::setUp();
        $this->propertyModelRepo = App::make(PropertyModelRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatePropertyModel()
    {
        $propertyModel = $this->fakePropertyModelData();
        $createdPropertyModel = $this->propertyModelRepo->create($propertyModel);
        $createdPropertyModel = $createdPropertyModel->toArray();
        $this->assertArrayHasKey('id', $createdPropertyModel);
        $this->assertNotNull($createdPropertyModel['id'], 'Created PropertyModel must have id specified');
        $this->assertNotNull(PropertyModel::find($createdPropertyModel['id']), 'PropertyModel with given id must be in DB');
        $this->assertModelData($propertyModel, $createdPropertyModel);
    }

    /**
     * @test read
     */
    public function testReadPropertyModel()
    {
        $propertyModel = $this->makePropertyModel();
        $dbPropertyModel = $this->propertyModelRepo->find($propertyModel->id);
        $dbPropertyModel = $dbPropertyModel->toArray();
        $this->assertModelData($propertyModel->toArray(), $dbPropertyModel);
    }

    /**
     * @test update
     */
    public function testUpdatePropertyModel()
    {
        $propertyModel = $this->makePropertyModel();
        $fakePropertyModel = $this->fakePropertyModelData();
        $updatedPropertyModel = $this->propertyModelRepo->update($fakePropertyModel, $propertyModel->id);
        $this->assertModelData($fakePropertyModel, $updatedPropertyModel->toArray());
        $dbPropertyModel = $this->propertyModelRepo->find($propertyModel->id);
        $this->assertModelData($fakePropertyModel, $dbPropertyModel->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletePropertyModel()
    {
        $propertyModel = $this->makePropertyModel();
        $resp = $this->propertyModelRepo->delete($propertyModel->id);
        $this->assertTrue($resp);
        $this->assertNull(PropertyModel::find($propertyModel->id), 'PropertyModel should not exist in DB');
    }
}
