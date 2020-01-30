<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('addr');
            $table->text('addrUK');
            $table->text('time');
            $table->text('timeUK');
            $table->text('map');
            $table->text('email');
            $table->text('email2')->nullable();
            $table->text('facebook')->nullable();
            $table->text('youtube')->nullable();
            $table->text('phone-top');
            $table->text('phone-topviber')->nullable();
            $table->text('phone-toptele')->nullable();
            $table->text('phone1')->nullable();
            $table->text('phone1viber')->nullable();
            $table->text('phone1tele')->nullable();
            $table->text('phone2')->nullable();
            $table->text('phone2viber')->nullable();
            $table->text('phone2tele')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
