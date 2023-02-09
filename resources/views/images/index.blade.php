@extends('layout')

@section('content')
@include('partials._hero')

<div class="grid">

@foreach($images as $image)
    <img src="images/uploaded/{{ $image->address }}" alt="Image {{ $image->id }}" />
@endforeach

</div>

@endsection