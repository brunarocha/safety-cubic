<?php

/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */

namespace App\Domain\Company\Database\Migrations;

use App\Support\Domain\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateCompaniesTable
 * @package App\Domain\Company\Database\Migrations
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
            $table->string('social_name');
            $table->string('register');
            $table->string('fancy_name');
            $table->string('address');
            $table->string('address_number');
            $table->string('zip_code', 15);
            $table->string('city', 50);
            $table->string('state', 20);
            $table->string('country', 30);
            $table->string('email', 100);
            $table->string('phone', 20);
            $table->string('url_google_maps', 500)->nullable();

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
