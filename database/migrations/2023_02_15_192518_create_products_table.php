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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brend_id');
            $table->string('slug')->nullable();
            $table->string('price')->nullable();
            $table->string('discount')->nullable();
            $table->string('stock')->nullable();
            $table->enum('status',['1','0'])->default('1');
            $table->unsignedInteger('order')->nullable();
            $table->string('thumb_image_1')->nullable();
            $table->string('thumb_image_2')->nullable();
            $table->string('file')->nullable();

            $table->timestamps();

            $table->foreign('brend_id')
            ->references('id')
            ->on('brends')
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
        Schema::dropIfExists('products');
    }
};
