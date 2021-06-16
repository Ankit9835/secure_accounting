<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('cmpnyname')->nullable();
            $table->string('cntryname')->nullable();
            $table->string('pin')->nullable();
            $table->string('mobile')->nullable();
            $table->string('state')->nullable();
            $table->string('mailname')->nullable();
            $table->string('tin')->nullable();
            $table->string('pan')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('website')->nullable();
            $table->string('fyearfrom')->nullable();
            $table->string('fyearto')->nullable();
            $table->string('phone')->nullable();
            $table->string('cst')->nullable();
            $table->string('cdate')->nullable();
            $table->string('bkbeginfrom')->nullable();
            $table->text('address')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
