<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('sales_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained()->onDelete('cascade'); // Mengaitkan ke tabel customers
            $table->date('transaction_date');
            $table->decimal('total_amount', 10, 2);
            $table->string('status'); // Misalnya: 'pending', 'completed', 'canceled'
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sales_transactions');
    }
}
