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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();

            $table->string('title')->nullable();
            $table->longText('discrption')->nullable();

            $table->string('title_en')->nullable();
            $table->longText('discrption_en')->nullable();

            $table->string('title_tr')->nullable();
            $table->longText('discrption_tr')->nullable();

            $table->string('title_es')->nullable();
            $table->longText('discrption_es')->nullable();

            $table->string('title_du')->nullable();
            $table->longText('discrption_du')->nullable();
            $table->longText('cv')->nullable();

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
        Schema::dropIfExists('jobs');
    }
};
