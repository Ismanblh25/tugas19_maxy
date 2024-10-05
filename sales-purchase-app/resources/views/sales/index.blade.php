<h1>Sales Transactions</h1>
<a href="{{ route('sales-transactions.create') }}">Create New Transaction</a>

<ul>
    @foreach ($sales as $sale)
        <li>{{ $sale->customer->name }} - {{ $sale->transaction_date }} - ${{ $sale->total_amount }}</li>
    @endforeach
</ul>
