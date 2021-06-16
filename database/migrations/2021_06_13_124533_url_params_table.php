<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UrlParamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('url_params', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('url_id');
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->boolean('required')->nullable();
            $table->longText('description')->nullable();
            $table->foreign('url_id')->references('id')->on('urls')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('url_params');
    }
}
