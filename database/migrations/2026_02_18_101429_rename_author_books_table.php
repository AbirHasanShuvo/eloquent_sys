<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::rename('author_books', 'author_book');
}

public function down()
{
    Schema::rename('author_book', 'author_books');
}

};
