<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookshopbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookshopbooks', function (Blueprint $table) {
            $table->id();
            $table->biginteger('isbn');
            $table->foreign('isbn')->references('isbn13')->on('books');
            $table->biginteger('shopid')->unsigned();
            $table->foreign('shopid')->references('id')->on('bookshops');
            $table->float('price');
            $table->integer('noofcopies');
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
        Schema::dropIfExists('bookshopbooks');
    }
}
