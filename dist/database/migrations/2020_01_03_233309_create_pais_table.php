<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pais', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('pais', 255);
            $table->string('simbolo', 255);
            $table->boolean('active');

        
            $table->unsignedBigInteger('moneda_id');

            $table->foreign('moneda_id')
                  ->references('id')
                  ->on('monedas');

            $table->unsignedBigInteger('banner_id');

            $table->foreign('banner_id')
                  ->references('id')
                  ->on('banners');

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
        Schema::dropIfExists('pais');

    }
}
