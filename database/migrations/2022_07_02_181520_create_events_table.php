<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id("id_event");
            $table
                ->integer('id_user');

            // form add event
            $table->string("tittle");
            $table->string("type");
            $table->string("location");
            $table->string("city");
            $table->string("status");
            $table->string("deskripsi");
            $table->string("rincian");
            $table->string("link_register");
            $table->string("link_detail");
            // end form

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
        Schema::dropIfExists('events');
    }
};
