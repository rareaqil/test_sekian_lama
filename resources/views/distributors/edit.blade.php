@extends('layout.main')

@section('content')
<form action="{{ route('distributors.update', $distributor->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
      <label for="nama_distributor">Nama Distributor</label>
      <input type="text" name="nama_distributor" value="{{ $distributor->nama_distributor }}">
    </div>
    <div>
      <label for="city">Kota</label>
      <input type="text" name="city" value="{{ $distributor->city }}">
    </div>
    <div>
      <label for="region">Agama</label>
      <input type="text" name="region" value="{{ $distributor->region }}">
    </div>
    <div>
      <label for="country">Negara</label>
      <select id="country" name="country">
        <option value="Indonesia" @if($distributor->country == 'Indonesia') selected @endif>Indonesia</option>
        <option value="Australia" @if($distributor->country == 'Australia') selected @endif>Australia</option>
        <option value="Malaysia" @if($distributor->country == 'Malaysia') selected @endif>Malaysia</option>
      </select>
    </div>
    <div>
      <label for="phone">No Telp</label>
      <input type="text" name="phone" value="{{ $distributor->phone }}">
    </div>
    <div>
      <label for="email">Email</label>
      <input type="text" name="email" value="{{ $distributor->email }}">
    </div>
    <button type="submit">Update</button>
</form>
@endsection