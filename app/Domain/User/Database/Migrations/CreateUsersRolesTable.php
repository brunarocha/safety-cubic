<?php

/**
 * @author: Bruna Rocha
 * @date: 22/10/2019
 */
namespace App\Domain\User\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use App\Support\Domain\Migration;

/**
 * Class CreateUsersRolesTable
 * @package App\Domain\User\Database\Migrations
 */
class CreateUsersRolesTable extends Migration
{

    protected $table = 'users_roles';

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

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

            $table->primary(['user_id', 'role_id']);

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
