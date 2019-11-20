<?php

/**
 * @author: Bruna Rocha
 * @date: 04/11/2019
 */

namespace App\Domain\LearningUnit\Database\Migrations;

use App\Support\Domain\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateTrainingUsersTable
 * @package App\Domain\LearningUnit\Database\Migrations
 */
class CreateTrainingsUsersTable extends Migration
{
    protected $table = 'trainings_users';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create($this->table, function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('training_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('training_id')->references('id')->on('trainings')->onDelete('cascade');

            $table->primary(['user_id', 'role_id', 'training_id']);

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
