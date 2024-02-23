@extends('layout.main')

@section('content')
<div class="main-wrapper" style="width:80%;">
    <div class="container-fluid">
        <h1>List of Beans</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($beans as $bean)
                    <tr>
                        <td>{{ $bean->NamaBean }}</td>
                        <td>{{ $bean->Description }}</td>
                        <td>$ {{ $bean->Price }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
