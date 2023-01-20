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
        Schema::create('client_event_planners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('c_id')->constrained('clients')->cascadeOnDelete();
            $table->string('event_title');
            $table->string('event_desc')->nullable();
            $table->date('event_date');
            $table->time('event_start_time')->nullable();
            $table->string('responsible_person')->nullable();
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
        Schema::dropIfExists('client_event_planners');
    }
};
