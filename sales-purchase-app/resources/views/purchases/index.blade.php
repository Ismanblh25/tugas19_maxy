<h1>Purchase Transactions</h1>
<a href="{{ route('purchase-transactions.create') }}">Create New Transaction</a>

<ul>
    @foreach ($purchases as $purchase)
        <li>{{ $purchase->supplier->name }} - {{ $purchase->transaction_date }} - ${{ $purchase->total_amount }}</li>
    @endforeach
</ul>
