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
        Schema::create('support_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('support_id');
            $table->string('locale');
            $table->string('title');
            $table->text('description');
            $table->timestamps();

            $table->foreign('support_id')
            ->references('id')
            ->on('supports')
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
        Schema::dropIfExists('support_translations');
    }
};
