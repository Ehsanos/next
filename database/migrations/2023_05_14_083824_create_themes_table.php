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
        Schema::create('themes', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('primary');
            $table->string('secondary');
            $table->string('success');
            $table->string('info');
            $table->string('warning');
            $table->string('danger');
            $table->string('light');


            $table->string('head_color');
            $table->string('paragraph_color');
            $table->string('link_color');
            $table->string('hover_color');
            $table->longText('font_family')->nullable();


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
        Schema::dropIfExists('themes');
    }
};
