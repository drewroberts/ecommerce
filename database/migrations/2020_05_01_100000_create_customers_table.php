<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('company')->nullable(); // Can purchase on behalf of a business
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable(); // Will need constraints on states.
            $table->string('zip', 5)->nullable();
            $table->string('timezone')->nullable();
            $table->string('source')->nullable();
            $table->string('phone_number')->nullable();
            $table->timestamps();
        });
    }
}
