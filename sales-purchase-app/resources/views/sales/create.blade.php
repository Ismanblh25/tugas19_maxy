<h1>Create Sales Transaction</h1>

<form action="{{ route('sales-transactions.store') }}" method="POST">
    @csrf
    <select name="customer_id">
        @foreach ($customers as $customer)
            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
        @endforeach
    </select>

    <input type="date" name="transaction_date">
    <input type="text" name="total_amount" placeholder="Total Amount">

    <button type="submit">Submit</button>
</form>
