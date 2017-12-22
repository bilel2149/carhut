<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->text('meta_description');
            $table->string('logo')->nullable();
            $table->string('small_logo')->nullable();
            $table->string('footer_logo')->nullable();
            $table->text('footer_description');
            $table->string('adresse');
            $table->string('city');
            $table->string('country');
            $table->string('email');
            $table->string('phone');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('google_plus');
            $table->string('linkedin');
            $table->string('skype');
            $table->string('whatsapp');
            $table->string('copyright');
            $table->string('open_time');
            $table->string('close_time');
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
        Schema::dropIfExists('parametres');
    }
}
