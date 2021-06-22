<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHardwaresTable extends Migration
{
    public function up()
    {
        Schema::create('hardwares', function (Blueprint $table) {
            $table->id();
            $table->string('CPU');
            $table->string('GPU');
            $table->string('RAM');
            $table->string('PSU');
            $table->string('storage');
            $table->string('motherboard');
            $table->foreignId('user_id')->unique()->constrained('users')->onDelete('cascade');
            $table->boolean('approved')->default(0);
            $table->boolean('reject')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('hardwares');
    }
}
