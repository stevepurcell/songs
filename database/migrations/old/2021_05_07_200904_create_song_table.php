<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('artist');
            $table->bigInteger('created_by')->default(1);
            $table->string('singer')->nullable();
            $table->string('solo')->nullable();
            $table->boolean('keyboard')->nullable();
            $table->boolean('acoustic')->nullable();
            $table->text('notes')->nullable();
            $table->integer('time')->nullable();
            $table->bigInteger('status_id')->nullable();
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
        Schema::dropIfExists('song');
    }
}
