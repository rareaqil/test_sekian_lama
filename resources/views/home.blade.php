@extends('layout.main')

@section('content')
<div class="container">
    @if($cheapestBean)
    <h4>Bean Of The Day</h4>
    <p>{{ $cheapestBean->NamaBean }}</p>
    <h4>Sale Price</h4>
    <p>Price: ${{ $cheapestBean->Price }}</p>
    <h4>Description</h4>
    <p>{{ $cheapestBean->Description }}</p>
    @else
    <p>No beans found.</p>
    @endif
</div>
@endsection
