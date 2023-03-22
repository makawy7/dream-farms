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
        Schema::create('farm_phones', function (Blueprint $table) {
            $table->id();
            $table->string("number");
            $table->boolean("featured")->default(false);
            $table->foreignId("address_id")->nullable()->constrained("farm_addresses")->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farm_phones');
    }
};
