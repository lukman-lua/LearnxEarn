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
        Schema::create('projects', function (Blueprint $table) {
            $table->id("id_project");
            $table
                ->integer('id_user');
            $table->string('colab_project', 300)->default("[]");

            // form add event
            $table->string("tittle");
            $table->string("type");
            $table->string("location");
            $table->string("status");
            $table->string("contact");
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
        Schema::dropIfExists('projects');
    }
};
