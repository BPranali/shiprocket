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
        Schema::create('ships', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('last_name');
            $table->string('billing_address');
            $table->string('billing_address_2');
            $table->string('billing_city');
            $table->string('billing_pincode');
            $table->string('billing_state');
            $table->string('billing_country');
            $table->string('billing_email');
            $table->string('billing_phone');
            $table->string('name');
            $table->string('sku');
            $table->string('units');
            $table->string('selling_price');
            $table->string('discount');
            $table->string('tax');
            $table->string('hsn');
            $table->string('payment_method');
            $table->string('shipping_charges');
            $table->string('giftwrap_charges'); 
            $table->string('transaction_charges');
            $table->string('total_discount');
            $table->string('sub_total');
            $table->string('length');
            $table->string('breadth');
            $table->string('height');
            $table->string('weight');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ships');
    }
};
