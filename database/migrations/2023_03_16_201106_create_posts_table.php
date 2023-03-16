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
            $table->string("title_en");
            $table->string("title_ar");
            $table->string("slug_en");
            $table->string("slug_ar");
            $table->text("body_en");
            $table->text("body_ar");
            $table->string("image_url")->nullable();
            $table->foreignId("user_id")->constrained("users")->cascadeOnDelete()->index();
            $table->foreignId("category_id")->constrained("post_categories")->cascadeOnDelete()->index();
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
