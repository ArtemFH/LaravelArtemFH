<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenchmarksTable extends Migration
{
    public function up()
    {
        Schema::create('benchmarks', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->integer('score');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('nomination_id')->constrained('nominations')->onDelete('cascade');
            $table->boolean('approved')->default(0);
            $table->boolean('reject')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('benchmarks');
    }
}
