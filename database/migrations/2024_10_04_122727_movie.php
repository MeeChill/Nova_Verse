<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Movie extends Migration
{
    public function up()
    {
        Schema::create('movie', callback: function (Blueprint $table) {
            $table->id('ID_Movie');
            $table->string('trailer')->nullable(); // URL or path to video
            $table->string('poster')->nullable(); // Path to poster image
            $table->string('title', 50);
            $table->string('director', 50);
            $table->string('genre', 50);
            $table->string('producer', 50);
            $table->date('release_date');
            $table->integer('duration');
            $table->text('main_cast');
            $table->text('synopsis');
            $table->integer('review_id');
            $table->decimal('rating', 3, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('movie');

    }
}
