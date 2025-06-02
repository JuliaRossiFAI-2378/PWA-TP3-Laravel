<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->foreignId('user')->constrained();
            $table->boolean('habilitated')->default(true);
            $table->foreignId('category')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
/**Schema::create('posts', function (Blueprint $table) {
            $table->id('postId');
            $table->string('title');
            $table->text('content');
            $table->unsignedBigInteger('userId');
            $table->boolean('habilitated')->default(false);
            $table->unsignedBigInteger('categoryId');
            $table->timestamps();

            $table->foreign('userId')->references('userId')->on('users');
            $table->foreign('categoryId')->references('categoryId')->on('categorys');
        }); */