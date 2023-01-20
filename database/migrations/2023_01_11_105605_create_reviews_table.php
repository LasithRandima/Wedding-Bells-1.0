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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ad_id')->constrained('advertisements')->cascadeOnDelete();
            $table->foreignId('v_id')->constrained('vendors')->cascadeOnDelete();
            $table->foreignId('c_id')->constrained('clients')->cascadeOnDelete();
            $table->text('review_des');
            $table->unsignedInteger('star_count');
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
        Schema::dropIfExists('reviews');
    }
};
