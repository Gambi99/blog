<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('preview');
            $table->text('description');
            $table->string('thumbnail')->nullable();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        if (app()->isLocal()) {
            Schema::dropIfExists('all');
        }
    }
};
