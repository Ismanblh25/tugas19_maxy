<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalesTransaction;
use App\Models\Customer;

class SalesTransactionController extends Controller
{
    public function index()
    {
        $sales = SalesTransaction::all();
        return view('sales.index', compact('sales'));
    }

    public function create()
    {
        $customers = Customer::all();
        return view('sales.create', compact('customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'transaction_date' => 'required|date',
            'total_amount' => 'required|numeric',
        ]);

        SalesTransaction::create($request->all());

        return redirect()->route('sales-transactions.index')->with('success', 'Transaction created successfully.');
    }
}
