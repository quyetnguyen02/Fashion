<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id')->comment('id cua bang user');
            $table->string('address')->nullable()->comment('dia chi cua nguoi dung');
            $table->string('phone')->nullable()->comment('so dien thoai cua nguoi dung');
            $table->unsignedBigInteger('payment')
                ->comment('phuong thuc thanh toan don hang 0:tra tien mat, 1: tra qua vi dien tu');
            $table->unsignedBigInteger('status')->default(0)
                ->comment('trang thai cua don hang
                0: dang cho duyet,
                1: dang chuan bi hang,
                2: dang giao hang
                3:da giao hang');
            $table->unsignedBigInteger('payment_status')->default(0)
                ->comment('trang thai thanh toan cua don hang:
                0: chua thanh toan
                1: da thanh toan');
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
        Schema::dropIfExists('orders');
    }
}
