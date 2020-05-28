<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrarybooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('librarybooks', function (Blueprint $table) {
            $table->id();
            $table->biginteger('isbn');
            $table->foreign('isbn')->references('isbn13')->on('books');
            $table->biginteger('libraryid')->unsigned();
            $table->foreign('libraryid')->references('id')->on('libraries');
            $table->string('accessno');
            $table->boolean('availability');
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
        Schema::dropIfExists('librarybooks');
    }
}
