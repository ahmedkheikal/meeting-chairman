<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_ratings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('reported_id');
            $table->unsignedInteger('reporter_id');
            $table->float('stars');
            $table->text('rating_comment');
            $table->timestamps();

            $table->foreign('reported_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('reporter_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_ratings');
    }
}
