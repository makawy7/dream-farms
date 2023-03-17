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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users")->cascadeOnDelete();
            $table->foreignId("product_id")->constrained("products")->cascadeOnDelete()->index();
            $table->foreignId("variation_id")->constrained("product_variations")->cascadeOnDelete()->index()->nullable();
            $table->foreignId("option_id")->constrained("variation_options")->cascadeOnDelete()->index()->nullable();
            $table->unsignedInteger("quantity");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
