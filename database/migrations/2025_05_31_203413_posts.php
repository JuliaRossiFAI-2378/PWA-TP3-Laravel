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
            $table->boolean('habilitated')->default(true);
            $table->string('imageLink')->default('https://somoskudasai.com/wp-content/uploads/2021/09/project-sekai-anime-kudasai.jpg');
            $table->foreignId('user')->constrained()->onDelete('cascade');
            $table->foreignId('category')->constrained()->onDelete('cascade');
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
