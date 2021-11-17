<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            // comando para crear una columna de tipo texto column:string
            $table->string('publication')->nullable()->default('text');
            // comando para crear una columna de tipo enum column:enum
            $table->enum('state_publication', ['published', 'reject', 'in_review'])->nullable()->default('in_review');
            // comando para crear una columna de tipo texto column:text
            $table->text('content_publication')->nullable();
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
        Schema::dropIfExists('post');
    }
}
