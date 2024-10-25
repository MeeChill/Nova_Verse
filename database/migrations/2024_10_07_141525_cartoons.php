<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cartoons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartoons', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('creators');
            $table->string('genre');
            $table->string('network');
            $table->date('release_date');
            $table->integer('seasons');
            $table->text('main_characters');
            $table->text('synopsis');
            $table->integer('review_id');
            $table->decimal('rating', 3, 2);
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
        Schema::dropIfExists('cartoons');
    }
}
