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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id("id_role");
            $table
                ->integer('id_user')
                ->unique();
            // form mahasiswa
            $table->string("full_name", 50)->default("");
            $table->string("department")->default("");
            $table->string("faculty")->default("");
            $table->string("univeristy")->default("");
            $table->string("city")->default("");
            $table->string("province")->default("");
            $table->string("hobi")->default("");
            $table->string("keahlian")->default("");
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
        Schema::dropIfExists('mahasiswa');
    }
};
