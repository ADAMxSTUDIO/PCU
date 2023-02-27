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
        Schema::create('cases', function (Blueprint $table) {
            $table->id();
            $table->string('details');
            $table->string('Hospital');
            $table->binary('attachment')->nullable();
            $table->string('created_by', 45);
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('responsible_id');
            $table->boolean('status');
            $table->foreign('patient_id')->references('id')->on('users');
            $table->foreign('responsible_id')->references('id')->on('users');
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
        Schema::dropIfExists('cases');
    }
};