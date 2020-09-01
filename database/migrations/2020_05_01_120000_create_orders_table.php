<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->index()->unique(); // Generated by system. This is identifier used to communicate with customers about their order.
            $table->foreignId('customer_id')->references('id')->on('customers');
            $table->unsignedInteger('amount'); // Amount is in cents. It is net, excluding taxes and fees. An accessor for total_amount adds the 3 columns
            $table->unsignedInteger('total_taxes'); // Taxes are in cents.
            $table->unsignedInteger('total_fees'); // Processing Fees are in cents.
            $table->foreignId('creator_id')->nullable()->references('id')->on('users'); // Null if customer made order. Otherwise, the staff member that created the purchase.
            $table->timestamps();
        });
    }
}
