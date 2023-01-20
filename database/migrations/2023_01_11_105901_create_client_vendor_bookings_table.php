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
        Schema::create('client_vendor_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('c_id')->constrained('clients')->cascadeOnDelete();
            $table->foreignId('ad_id')->constrained('advertisements')->cascadeOnDelete();
            $table->foreignId('v_id')->constrained('vendors')->cascadeOnDelete();
            $table->string('c_name');
            $table->string('c_email');
            $table->string('c_tpno');
            $table->text('message')->nullable();
            $table->date('event_date');
            $table->time('event_start_time');
            $table->time('event_end_time')->nullable();
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
        Schema::dropIfExists('client_vendor_bookings');
    }
};
