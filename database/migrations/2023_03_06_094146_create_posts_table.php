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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_id')->nullable()->constrained()->nullOnDelete();

            $table->string('img')->nullable();
            $table->text('video')->nullable();

            $table->longText('tilte')->nullable();
            $table->longText('tilte_en')->nullable();
            $table->longText('tilte_tr')->nullable();
            $table->longText('tilte_du')->nullable();
            $table->longText('tilte_es')->nullable();


            $table->longText('body')->nullable();
            $table->longText('body_en')->nullable();
            $table->longText('body_tr')->nullable();
            $table->longText('body_du')->nullable();
            $table->longText('body_es')->nullable();

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
