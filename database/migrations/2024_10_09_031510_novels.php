<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class novels extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('novels', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('title'); // 1. Title
            $table->string('author'); // 2. Author
            $table->string('publisher'); // 3. Publisher
            $table->date('release_date'); // 4. Release Date
            $table->string('genre'); // 5. Genre
            $table->integer('number_of_pages')->nullable(); // 6. Number of Pages/Volumes (nullable for comics)
            $table->text('synopsis'); // 7. Synopsis
            $table->string('main_characters'); // 8. Main Characters
            $table->integer('review_id');
            $table->decimal('rating', 3, 2);
            $table->string('poster')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
