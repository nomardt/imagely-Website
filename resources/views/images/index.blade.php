@extends('layout')

@section('content')
    @include('partials._hero')

    <div class="grid">

    @foreach($images as $image)
        <img src="storage/{{ $image->image }}" alt="Image {{ $image->id }}" />
    @endforeach

    </div>

    <div class="mt-6 p-4">
        {{ $images->links() }}
    </div>
@endsection

<x-footer />