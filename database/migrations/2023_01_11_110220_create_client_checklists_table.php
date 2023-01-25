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
        Schema::create('client_checklists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('c_id')->constrained('users')->cascadeOnDelete();
            $table->string('task_name');
            $table->longText('description');
            $table->string('category');
            $table->string('timing_period')->nullable();
            $table->string('date')->nullable();
            $table->boolean('essential');
            $table->boolean('task_status');
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
        Schema::dropIfExists('client_checklists');
    }
};
