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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->longText('name');

            $table->longText('name_en')->nullable();
            $table->longText('name_tr')->nullable();
            $table->longText('name_es')->nullable();
            $table->longText('name_du')->nullable();

            $table->boolean('is_active')->default(1);
            $table->string('img')->nullable();

            $table->longText('description')->nullable();
            $table->longText('description_en')->nullable();
            $table->longText('description_tr')->nullable();
            $table->longText('description_es')->nullable();
            $table->longText('description_du')->nullable();

            $table->foreignId('category_id')->nullable()->constrained()->cascadeOnDelete();

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
        Schema::dropIfExists('departments');
    }
};
