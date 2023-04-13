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
        Schema::create('tercume_translations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tercume_id');
            $table->string('locale');
            $table->text('text');
           
            $table->timestamps();

            $table->foreign('tercume_id')
            ->references('id')
            ->on('tercumes')
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
        Schema::dropIfExists('tercume_translations');
    }
};
