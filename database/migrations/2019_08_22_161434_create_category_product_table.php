<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('category_product')) {
            Schema::create('category_product', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('product_id');
                $table->unsignedBigInteger('category_id');

                $table->foreign('product_id')
                    ->references('id')
                    ->on('products');
                $table->foreign('category_id')
                    ->references('id')
                    ->on('categories');

            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_product');
    }
}
