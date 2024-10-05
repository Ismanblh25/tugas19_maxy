<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('purchase_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id')->constrained()->onDelete('cascade'); // Mengaitkan ke tabel suppliers
            $table->date('transaction_date');
            $table->decimal('total_amount', 10, 2);
            $table->string('status'); // Misalnya: 'pending', 'completed', 'canceled'
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('purchase_transactions');
    }
}
