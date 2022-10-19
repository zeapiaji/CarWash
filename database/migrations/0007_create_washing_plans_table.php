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
        Schema::create('washing_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('plan_id');
            $table->string('price');
            $table->foreignId('type_id');
            $table->timestamps();

            $table->foreign('plan_id')->references('id')->on('plans');
            $table->foreign('type_id')->references('id')->on('car_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('washing_plans');
    }
};
