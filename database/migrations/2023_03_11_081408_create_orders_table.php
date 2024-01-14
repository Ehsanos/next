<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\OrderStatusEnum;


return new class extends Migration {

    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('order_code')->unique()->nullable();
            $table->float('discount')->default(0);
            $table->enum('status', [OrderStatusEnum::Wait->value, OrderStatusEnum::Success->value, OrderStatusEnum::Cancelled->value])->nullable();
            $table->decimal('result')->nullable();
            $table->float('total')->nullable();

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
