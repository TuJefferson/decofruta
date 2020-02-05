<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('products', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('name');

            $table->string('slug');

            $table->string('description');

            $table->string('extract');

            $table->decimal('price', 8, 2);

            $table->decimal('price_dolar', 8, 2);

            $table->string('image');

            $table->boolean('active'); 

            $table->unsignedBigInteger('pais_id');
            $table->foreign('pais_id')
              ->references('id')
              ->on('pais');

            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')
              ->references('id')
              ->on('categories');

            $table->unsignedBigInteger('imagen_id');
            $table->foreign('imagen_id')
              ->references('id')
              ->on('imagenes');

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
        Schema::dropIfExists('products');
    }
}
