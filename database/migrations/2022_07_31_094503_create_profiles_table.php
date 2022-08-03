<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id')->comment('id cua bang user');
            $table->string('name')->comment('Tên user dùng trong he thống');
            $table->string('avatar')
                ->comment('hin dai dien cua nguoi dung trong he thong');
            $table->string('address')->nullable()
                ->comment('dia chi cua nguoi dung');
            $table->string('phone')->nullable()
                ->comment('so dien thoai cua nguoi dung');
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
        Schema::dropIfExists('profiles');
    }
}
