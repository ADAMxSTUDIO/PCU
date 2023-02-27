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
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->string('treated_by');
            $table->string('details');
            $table->boolean('isClosed')->default(false);
            $table->foreign('patient_id')->references('id')->on('users');
            // $table->foreignId('agent_id')->constrained('users');
            $table->timestamps(); // $table->timestamp('date_treat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treatments');
    }
};