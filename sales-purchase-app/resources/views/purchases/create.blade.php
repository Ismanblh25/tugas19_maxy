<h1>Create Purchase Transaction</h1>

<form action="{{ route('purchase-transactions.store') }}" method="POST">
    @csrf
    <select name="supplier_id">
        @foreach ($suppliers as $supplier)
            <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
        @endforeach
    </select>

    <input type="date" name="transaction_date">
    <input type="text" name="total_amount" placeholder="Total Amount">

    <button type="submit">Submit</button>
</form>
