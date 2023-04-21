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
        Schema::create('product_variant_attributes', function (Blueprint $table) {
            $table->foreignId("variant_id")->constrained("product_variants")->cascadeOnDelete();
            $table->foreignId("attribute_id")->constrained("option_attributes")->cascadeOnDelete();
            $table->primary(["variant_id", "attribute_id"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variant_attributes');
    }
};
