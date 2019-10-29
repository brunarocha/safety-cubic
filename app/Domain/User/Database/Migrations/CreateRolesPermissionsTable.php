<?php

/**
 * @author: Bruna Rocha
 * @date: 22/10/2019
 */
namespace App\Domain\User\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use App\Support\Domain\Migration;

/**
 * Class CreateRolesPermissionsTable
 * @package App\Domain\User\Database\Migrations
 */
class CreateRolesPermissionsTable extends Migration
{

    protected $table = 'roles_permissions';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create($this->table, function (Blueprint $table) {
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('permission_id');

            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');

            $table->primary(['role_id', 'permission_id']);

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
