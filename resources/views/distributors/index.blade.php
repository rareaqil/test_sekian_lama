@extends('layout.main')

@section('content')
<div class="main-wrapper" style="width:80%;">
  <div class="container-fluid">
    <div class="d-grid gap-3">
      <div class="p-0">
        <h1>List of Distributors</h1>
        <a href="{{ route('distributors.create') }}">Add New Distributor</a>
      </div>
      <div class="p-0">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Name</th>
                <th>City</th>
                <th>Region</th>
                <th>Country</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($distributors as $distributor)
              <tr>
                <td>{{ $distributor->nama_distributor }}</td>
                <td>{{ $distributor->city }}</td>
                <td>{{ $distributor->region }}</td>
                <td>{{ $distributor->country }}</td>
                <td>{{ $distributor->phone }}</td>
                <td>{{ $distributor->email }}</td>
                <td>
                    <a href="{{ route('distributors.edit', $distributor->id) }}">Edit</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection