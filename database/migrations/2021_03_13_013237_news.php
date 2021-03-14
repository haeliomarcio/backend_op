<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('journalist_id');
            $table->unsignedBigInteger('type_id');
            $table->string('title');
            $table->text('description');
            $table->text('content');
            $table->string('image')->nullable();

            $table->foreign('journalist_id')->references('id')->on('journalists');
            $table->foreign('type_id')->references('id')->on('types');

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
        Schema::dropIfExists('news');
    }
}
