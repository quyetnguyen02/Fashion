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
            $table->increments('id');
            $table->string('name')->comment('ten san pham');
            $table->string('description')->comment('mo ta san pham');
            $table->unsignedBigInteger('quantity')
                ->comment('so luong san pham trong kho');
            $table->string('images')->comment('hinh anh san pham');
            $table->unsignedBigInteger('category_id')
                ->comment('id cua bang category');
            $table->integer('status')->default(0)
                ->comment('trang thai cua san pham 0:con hang, 1: het hang');
            $table->timestamps();
            $table->softDeletes();
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
