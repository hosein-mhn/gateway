<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZarinpalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zarinpal', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('merchant_id');
            $table->string('type');
            $table->string('callback_url');
            $table->string('server');
            $table->string('email');
            $table->string('mobile');
            $table->string('description');
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
        Schema::dropIfExists('zarinpal');
    }
}
