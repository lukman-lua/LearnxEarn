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
        Schema::create('users', function (Blueprint $table) {
            $table->id("id_user");
            $table->string('name', 50)->default("");
            $table->string('email', 50)->unique();
            $table->integer('role');
            $table->string('second', 50)->default("");
            $table->string('colab_project', 300)->default("[]");
            $table->string('saved', 300)->default("[]");
            $table->boolean('profile_requirements')->default(false);
            $table->string('profile_pict')->default("");
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
