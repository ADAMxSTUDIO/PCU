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
            $table->binary('attachment')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('responsible_id');
            $table->foreign('created_by')->references('id')->on('users');
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