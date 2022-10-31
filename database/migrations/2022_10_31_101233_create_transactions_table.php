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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id');
            $table->foreignId('staff_id');
            $table->foreignId('plan_id');
            $table->foreignId('doorsmeer_id');
            $table->foreignId('subsidiary_id');
            $table->timestamps();

            $table->foreign('member_id')->references('id')->on('users');
            $table->foreign('staff_id')->references('id')->on('users');
            $table->foreign('plan_id')->references('id')->on('plans');
            $table->foreign('doorsmeer_id')->references('id')->on('doormeers');
            $table->foreign('subsidiary_id')->references('id')->on('subsidiaries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
