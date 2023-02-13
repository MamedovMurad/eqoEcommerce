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
        Schema::create('news_category_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('news_category_id');
            $table->string('locale');
            $table->string('title');
          
            $table->timestamps();

            $table->foreign('news_category_id')
            ->references('id')
            ->on('news_categories')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_category_translations');
    }
};
