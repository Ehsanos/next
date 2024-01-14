<?php

use App\Enums\UserTypeEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_en')->nullable();
            $table->string('name_tr')->nullable();
            $table->string('name_es')->nullable();
            $table->string('name_du')->nullable();

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->foreignId('country_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('city_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();

            $table->string('phone')->nullable();
            $table->string('phon2')->nullable();
            $table->string('phon3')->nullable();

            $table->string('email2')->nullable();
            $table->string('email3')->nullable();

            $table->string('whatsapp')->nullable();
            $table->string('whatsapp2')->nullable();

            $table->string('facebook')->nullable();
            $table->string('instegram')->nullable();
            $table->string('twitter')->nullable();

            $table->enum('type',[UserTypeEnum::Delegte->value,UserTypeEnum::Admin->value,UserTypeEnum::Agent->value,UserTypeEnum::User->value])->default(UserTypeEnum::User->value);

            $table->boolean('is_admin')->default(false);

            $table->longText('address_ar')->nullable();
            $table->longText('address_en')->nullable();
            $table->longText('address_tr')->nullable();
            $table->longText('address_es')->nullable();
            $table->longText('address_du')->nullable();

            $table->longText('info_ar')->nullable();
            $table->longText('info_en')->nullable();
            $table->longText('info_tr')->nullable();
            $table->longText('info_es')->nullable();
            $table->longText('info_du')->nullable();

            $table->longText('map')->nullable();




            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
