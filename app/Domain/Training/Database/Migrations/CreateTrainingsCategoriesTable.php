<?php

/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\Training\Database\Migrations;

use App\Support\Domain\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateTrainingsCategoriesTable
 * @package App\Domain\Training\Database\Migrations
 */
class CreateTrainingsCategoriesTable extends Migration
{
    protected $table = 'trainings_categories';

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
            $table->string('name_slug_pt_br');
            $table->string('name_en');
            $table->string('name_slug_en');
            $table->text('description_pt_br');
            $table->text('description_en');
            $table->string('icon')->nullable();
            $table->string('picture')->nullable();

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
