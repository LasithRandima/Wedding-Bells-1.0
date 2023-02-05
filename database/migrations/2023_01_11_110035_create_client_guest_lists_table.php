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
        Schema::create('client_guest_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('c_id')->constrained('users')->cascadeOnDelete();
            $table->string('guest_name');
            $table->string('contact_no')->nullable();
            $table->string('email')->unique()->nullable();
            $table->unsignedInteger('no_of_family_members');
            $table->unsignedInteger('drinking_buddies_count')->nullable();
            $table->string('group');
            $table->string('status');
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
        Schema::dropIfExists('client_guest_lists');
    }
};
