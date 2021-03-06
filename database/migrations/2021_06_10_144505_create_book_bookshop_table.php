<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookBookshopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_bookshop', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('book_id');
            $table->foreignId('bookshop_id');
            $table->unique(['book_id', 'bookshop_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_bookshop');
    }
}
