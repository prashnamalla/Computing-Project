<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertiesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('property_name');
            $table->integer('property_type');
            $table->string('description');
            $table->string('image');
            $table->integer('price');
            $table->integer('land_size');
            $table->integer('builtup');
            $table->integer('floors');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('living_room');
            $table->boolean('water_supply');
            $table->boolean('furnishing');
            $table->string('features');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
