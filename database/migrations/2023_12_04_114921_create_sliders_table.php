<?php

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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->longText('img')->nullable();
            $table->longText('type')->nullable();
            $table->foreignId('cats')->nullable();
            $table->longText('url')->nullable();
            $table->longText('discrption')->nullable();
            $table->longText('discrption_en')->nullable();
            $table->longText('discrption_tr')->nullable();
            $table->longText('discrption_du')->nullable();
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
        Schema::dropIfExists('sliders');
    }
};
