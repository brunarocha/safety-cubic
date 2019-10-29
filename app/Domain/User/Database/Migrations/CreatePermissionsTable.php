<?php

/**
 * @author: Bruna Rocha
 * @date: 22/10/2019
 */
namespace App\Domain\User\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use App\Support\Domain\Migration;

/**
 * Class CreatePermissionsTable
 * @package App\Domain\User\Database\Migrations
 */
class CreatePermissionsTable extends Migration
{

    protected $table = 'permissions';

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
