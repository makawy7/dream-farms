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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users")->cascadeOnDelete();
            $table->foreignId("user_address_id")->constrained("user_addresses")->cascadeOnDelete();
            $table->decimal("total_price", 8, 2);
            $table->boolean("is_paid")->default(false);
            $table->dateTime("payment_date")->nullable();
            $table->foreignId("payment_method_id")->constrained("payment_methods")->cascadeOnDelete();
            $table->foreignId("shipping_method_id")->constrained("shipping_methods")->cascadeOnDelete();
            $table->foreignId("order_status_id")->constrained("order_statuses")->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
