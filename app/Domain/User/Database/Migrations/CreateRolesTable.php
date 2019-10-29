<?php

/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */
namespace App\Domain\User\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use App\Support\Domain\Migration;

/**
 * Class CreateRolesTable
 * @package App\Domain\User\Database\Migrations
 */
class CreateRolesTable extends Migration
{

    protected $table = 'roles';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create($this->table, function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
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
