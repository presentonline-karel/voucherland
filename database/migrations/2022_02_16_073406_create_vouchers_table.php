<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product');
            $table->enum('kind_of_discount', ['percentage', 'percentage from', 'quantity']);
            $table->integer('percentage');
            $table->integer('pieces_from');
            $table->string('quantity');
            $table->string('image_path');
            $table->string('alt_tag');
            $table->string('description');
            $table->dateTime('expiry_date', $precision = 0);
            $table->boolean('is_expired');
            $table->string('tracking_code');
            $table->integer('times_downloaded');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('created_by')->unsigned();
            $table->foreign('created_by')->references('id')->on('users');
            $table->integer('shop_id')->unsigned();
            $table->foreign('shop_id')->references('id')->on('shops');
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vouchers');
    }
}
