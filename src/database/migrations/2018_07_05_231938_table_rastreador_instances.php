<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


/**
 * Class Fuente
 * @package CodWelt\Blog\migrations
 * @author FuriosoJack <iam@furiosojack.com>
 */
class RastreadorInstances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rastreador_instances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid',36);
            $table->string('proyect_name');
            $table->string('version');
            $table->integer("id_father")->nullable();
            $table->timestamps();
        });

    }

    /**s
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rastreador_instances');
    }

}