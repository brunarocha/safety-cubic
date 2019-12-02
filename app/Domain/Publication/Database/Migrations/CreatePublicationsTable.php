<?php

/**
 * @author: Bruna Rocha
 * @date: 02/12/2019
 */

namespace App\Domain\Publication\Database\Migrations;

use App\Support\Domain\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreatePublicationsTable
 * @package App\Domain\Publication\Database\Migrations
 */
class CreatePublicationsTable extends Migration
{
    protected $table = 'publications';

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
            $table->longText('publication');
            $table->date('date');
            $table->text('image')->nullable();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->on('users')->references('id')->onUpdate('cascade')->onDelete('cascade');

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
