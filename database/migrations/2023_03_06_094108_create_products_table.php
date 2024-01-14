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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->longText('name');
            $table->longText('name_en')->nullable();
            $table->longText('name_tr')->nullable();
            $table->longText('name_es')->nullable();
            $table->longText('name_du')->nullable();


            $table->longText('code')->nullable();
            $table->longText('marke_ar')->nullable();
            $table->longText('marke_en')->nullable();
            $table->longText('marke_tr')->nullable();
            $table->longText('marke_es')->nullable();
            $table->longText('marke_du')->nullable();
            $table->longText('pakcing')->nullable();

            $table->foreignId('department_id')->nullable()->constrained()->cascadeOnDelete()->nullOnDelete();
            $table->string('img')->nullable();
            $table->decimal('price')->nullable();
            $table->boolean('is_active')->default(1);
            $table->float('length')->nullable();
            $table->float('width')->nullable();
            $table->float('height')->nullable();
            $table->float('weigth')->nullable();
            $table->float('area')->nullable();
            $table->text('color')->nullable();
            $table->longText('slug')->nullable();
            $table->longText('description')->nullable();
            $table->longText('description_en')->nullable();
            $table->longText('description_tr')->nullable();
            $table->longText('description_es')->nullable();
            $table->longText('description_du')->nullable();


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
        Schema::dropIfExists('products');
    }
};
