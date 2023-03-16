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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name_en");
            $table->string("name_ar");
            $table->string("slug_en");
            $table->string("slug_ar");
            $table->text("description_en");
            $table->text("description_ar");
            $table->decimal("price", 8, 2)->nullable();
            $table->unsignedInteger("stock")->nullable();
            $table->foreignId("category_id")->constrained('product_categories')->cascadeOnDelete()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
