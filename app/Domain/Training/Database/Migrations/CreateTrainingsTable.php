<?php

/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\Training\Database\Migrations;

use App\Support\Domain\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateTrainingsTable
 * @package App\Domain\Training\Database\Migrations
 */
class CreateTrainingsTable extends Migration
{
    protected $table = 'trainings';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create($this->table, function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_pt_br');
            $table->string('name_en')->nullable();
            $table->text('description_pt_br')->nullable();
            $table->text('description_en')->nullable();
            $table->longText('objective')->nullable();
            $table->longText('target_public')->nullable();
            $table->longText('program_content')->nullable();
            $table->string('course_load')->nullable();
            $table->string('payment')->nullable();
            $table->decimal('value', 10, 2)->nullable();
            $table->string('picture')->nullable();
            $table->unsignedInteger('category_id');

            $table->foreign('category_id')->references('id')->on('trainings_categories')->onUpdate('cascade')->onDelete('cascade');

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
