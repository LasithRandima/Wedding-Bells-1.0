<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('ad_title');
            $table->text('about');
            $table->text('service_offered');
            $table->text('v_package_details');
            $table->String('ad_image');
            $table->foreignId('category_id')->constrained('vendor_categories')->cascadeOnDelete();
            $table->text('discount_deal');
            $table->unsignedInteger('start_price');
            $table->foreignId('v_id')->constrained('vendors')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertisements');
    }
};
