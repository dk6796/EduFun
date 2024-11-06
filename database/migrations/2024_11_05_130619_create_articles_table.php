<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('SubjectID');
            $table->string('ArticleImage');
            $table->unsignedBigInteger('WriterID');
            $table->string('ArticleContent');
            $table->timestamps();
            $table->foreign('SubjectID')->references('id')->on('subjects');
            $table->foreign('WriterID')->references('id')->on('writers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
