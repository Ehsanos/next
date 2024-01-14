<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->longText('name');
            $table->longText('name_en')->nullable();
            $table->longText('name_tr')->nullable();
            $table->longText('name_es')->nullable();
            $table->longText('name_du')->nullable();
            $table->string('code')->nullable();
            $table->boolean('is_active')->default(1);
            $table->boolean('is_user_active')->default(1);

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
        Schema::dropIfExists('countries');
    }
};
