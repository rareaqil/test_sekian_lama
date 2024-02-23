@extends('layout.main')

@section('content')

<form action="{{ route('distributors.store') }}" method="POST">
    @csrf
    <div>
        <label for="nama_distributor">Nama Distributor:</label>
        <input type="text" id="nama_distributor" name="nama_distributor" placeholder="Nama Distributor">
    </div>
    <div>
        <label for="city">City:</label>
        <input type="text" id="city" name="city" placeholder="City">
    </div>
    <div>
        <label for="region">Region:</label>
        <input type="text" id="region" name="region" placeholder="Region">
    </div>
    <div>
        <label for="country">Country:</label>
        <select id="country" name="country">
            <option value="Indonesia">Indonesia</option>
            <option value="Australia">Australia</option>
            <option value="Malaysia">Malaysia</option>
        </select>
    </div>
    <div>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" placeholder="Phone">
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" placeholder="Email">
    </div>
    <button type="submit">Submit</button>
</form>

@endsection