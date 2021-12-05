<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{

    public function up() : void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->float('sum')->default(0);
            $table->string('client_phone');
            $table->string('client_name');
            $table->foreignId('company_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down() : void
    {
        Schema::dropIfExists('orders');
    }
}
