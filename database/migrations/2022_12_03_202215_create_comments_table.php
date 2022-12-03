<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class)
            ->constrained()
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->foreignIdFor(Post::class)
            ->constrained()
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->text('text');

            $table->timestamps();
        });
    }


    public function down(): void
    {
        if (app()->isLocal()) {
            Schema::dropIfExists('comments');
        }
    }
};
