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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string("website_name_en");
            $table->string("website_name_ar");
            $table->string("default_locale", 2);
            $table->string("email")->nullable();
            $table->string("currency", 3);
            $table->string("logo_url");
            $table->string("motto_en")->nullable();
            $table->string("motto_ar")->nullable();
            $table->text("info_en")->nullable();
            $table->text("info_ar")->nullable();
            $table->string("phone_numbers")->nullable();
            $table->text("address_en")->nullable()->nullable();
            $table->text("address_ar")->nullable();
            $table->text("working_days_en")->nullable();
            $table->text("working_days_ar")->nullable();
            $table->string("map_location")->nullable();
            $table->text("contact_head_en")->nullable();
            $table->text("contact_head_ar")->nullable();
            $table->string("copyright_info")->nullable();
            $table->string("social_facebook")->nullable();
            $table->string("social_twitter")->nullable();
            $table->string("social_instagram")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
