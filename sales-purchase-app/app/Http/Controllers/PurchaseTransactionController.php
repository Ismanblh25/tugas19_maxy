<?php

namespace App\Http\Controllers;

use App\Models\PurchaseTransaction;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PurchaseTransactionController extends Controller
{
    public function index()
    {
        $purchases = PurchaseTransaction::all();
        return view('purchases.index', compact('purchases'));
    }

    public function create()
    {
        $suppliers = Supplier::all();
        return view('purchases.create', compact('suppliers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'supplier_id' => 'required|exists:suppliers,id',
            'transaction_date' => 'required|date',
            'total_amount' => 'required|numeric',
        ]);

        PurchaseTransaction::create($request->all());

        return redirect()->route('purchase-transactions.index')->with('success', 'Transaction created successfully.');
    }
}
