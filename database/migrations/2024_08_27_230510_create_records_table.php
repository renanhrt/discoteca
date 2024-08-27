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
        Schema::create('records', function (Blueprint $table) {
            $table->id('idRecord');
    
            $table->string('title');
            $table->year('year');
            $table->string('image');
            $table->unsignedBigInteger('idArtist');

            $table->foreign('idArtist')
                  ->references('idArtist')
                  ->on('artists')
                  ->onDelete('cascade');
        
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
        Schema::dropIfExists('records');
    }
};
