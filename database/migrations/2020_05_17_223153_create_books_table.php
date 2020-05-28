<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->biginteger('isbn13')->unique();
            $table->primary('isbn13');
            $table->string('booktitle');
            $table->biginteger('genreid')->unsigned();
            $table->foreign('genreid')->references('id')->on('genres');
            $table->string('author');
            $table->string('publisher');
            $table->string('publishyear');
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
        Schema::dropIfExists('books');
    }
}
