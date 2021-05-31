<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 100)->nullable(false)->unique('username');
            $table->string('password', 255)->nullable(false);
            $table->string('email', 255)->nullable(false)->unique('email');
            $table->string('avatar')->nullable();
            $table->foreignId('role_id')->nullable()->default('1')->constrained('roles')->onDelete('cascade');
            $table->foreignId('like_nomination_id')->nullable()->constrained('nominations')->onDelete('cascade');
            $table->json('awards_id')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
