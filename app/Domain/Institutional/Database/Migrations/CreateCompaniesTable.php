<?php

/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */

namespace App\Domain\Institucional\Database\Migrations;

use App\Support\Domain\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateCompaniesTable
 * @package App\Domain\Institucional\Database\Migrations
 */
class CreateCompaniesTable extends Migration
{

    protected $table = 'companies';

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
            $table->string('register');
            $table->string('fancy_name');
            $table->string('address');
            $table->string('address_number');
            $table->string('zip_code');
            $table->string('city');
            $table->string('state');
            $table->string('country');

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
