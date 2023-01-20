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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('c_name');
            $table->string('c_email')->unique();
            $table->string('partner_name');
            $table->string('partner_email')->unique()->nullable();
            $table->string('c_location');
            $table->string('c_tpno');
            $table->unsignedInteger('guest_count');
            $table->date('wed_date');
            $table->time('wed_start_time')->nullable();
            $table->time('wed_end_time')->nullable();
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
