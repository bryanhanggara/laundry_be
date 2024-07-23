<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('claim_code')->unique();
            $table->integer('user_id');
            $table->integer('shop_id');
            $table->string('wheight');
            $table->boolean('with_pickup');
            $table->boolean('with_delivery');
            $table->string('pickup_address');
            $table->string('delivery_address');
            $table->float('total');
            $table->longText('description');
            $table->enum('status',['SUKSES','PROSES','PICKUP']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
