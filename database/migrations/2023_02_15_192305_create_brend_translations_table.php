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
        Schema::create('brend_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brend_id');
            $table->string('locale');
            $table->string('title');
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
        Schema::dropIfExists('brend_translations');
    }
};
