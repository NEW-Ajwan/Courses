<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->integer('price');
            $table->string('image');
            $table->string('location');
            $table->date('start');
            $table->date('end');
            $table->date('time');
            $table->unsignedBigInteger('category_id');
            $table->string('target_group');
            $table->boolean('status')->default(false)->comment('1=hidden,0=visible');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};

