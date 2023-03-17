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
        Schema::create('shipping_methods', function (Blueprint $table) {
            $table->id();
            $table->string("name_en");
            $table->string("name_ar");
            $table->text("description_en")->nullable();
            $table->text("description_en")->nullable();
            $table->decimal("fee", 8, 2)->default(0);
            $table->unsignedInteger("min_delivery_days")->default(2);
            $table->unsignedInteger("max_delivery_days")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_methods');
    }
};
