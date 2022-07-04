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
        Schema::create('organisasi', function (Blueprint $table) {
            $table->id("id_role");
            $table
                ->integer('id_user')
                ->unique();

            // form organisasi
            $table->string("name", 50)->default("");
            $table->string("second_name", 50)->default("");
            $table->string("sector")->default("");
            $table->string("alamat")->default("");
            $table->string("city")->default("");
            $table->string("province")->default("");
            $table->string("link_website")->default("");
            $table->string("instagram")->default("");
            $table->string("twitter")->default("");
            $table->string("facebook")->default("");
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
        Schema::dropIfExists('organisasi');
    }
};
