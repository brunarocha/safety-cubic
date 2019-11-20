<?php

/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\LearningUnit\Database\Migrations;

use App\Support\Domain\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateTrainingMaterialTable
 * @package App\Domain\LearningUnit\Database\Migrations
 */
class CreateTrainingMaterialTable extends Migration
{

    protected $table = 'trainings_materials';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create($this->table, function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('file');
            $table->unsignedInteger('training_id');

            $table->foreign('training_id')->references('id')->on('trainings')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->schema->drop($this->table);
    }
}
