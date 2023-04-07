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
        Schema::create('product_file_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_file_id');
            $table->string('locale');
            $table->string('file_name');
           
            $table->timestamps();

            $table->foreign('product_file_id')
            ->references('id')
            ->on('product_files')
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
        Schema::dropIfExists('product_file_translations');
    }
};
