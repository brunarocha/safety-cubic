<?php

/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\Institucional\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateInstitutionalVideosTable
 * @package App\Domain\Institucional\Database\Migrations
 */
class CreateInstitutionalVideosTable extends Migration
{
    /**
     * @var \Illuminate\Database\Schema\Builder
     */
    protected $schema;
    protected $table = 'institutional_videos';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create($this->table, function (Blueprint $table) {
            $table->increments('id');
            $table->string('url')->nullable();
            $table->string('file')->nullable();
            $table->string('title')->nullable();

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
