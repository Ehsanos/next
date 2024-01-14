<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar')->nullable();
            $table->string('address_ar')->nullable();
            $table->longText('description_ar')->nullable();


            $table->string('name_en')->nullable();
            $table->string('address_en')->nullable();
            $table->longText('description_en')->nullable();

            $table->string('name_tr')->nullable();
            $table->longText('description_tr')->nullable();
            $table->string('address_tr')->nullable();


            $table->string('name_es')->nullable();
            $table->string('address_es')->nullable();
            $table->longText('description_es')->nullable();


            $table->string('name_du')->nullable();
            $table->string('address_du')->nullable();
            $table->longText('description_du')->nullable();


            $table->longText('phone')->nullable();
            $table->longText('phone2')->nullable();
            $table->longText('phone3')->nullable();

            $table->longText('whatsapp1')->nullable();
            $table->longText('whatsapp2')->nullable();
            $table->longText('whatsapp3')->nullable();


            $table->longText('facebook')->nullable();
            $table->longText('twitter')->nullable();
            $table->longText('map')->nullable();
            $table->string('instagram')->nullable();
            $table->longText('youtube')->nullable();



            $table->longText('email')->nullable();
            $table->longText('email2')->nullable();
            $table->longText('email3')->nullable();

            $table->longText('chat_bot')->nullable();
            $table->longText('google_analysis')->nullable();


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
        Schema::dropIfExists('settings');
    }
};
