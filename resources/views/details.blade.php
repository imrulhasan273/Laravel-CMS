@extends('layouts.app')
@section('content')

{{-- <div class="media">
    <div class="media-body">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ EOGNahc0rns }}" frameborder="0" allowfullscreen>
        </iframe>
    </div>
</div> --}}


<div class="container">
<h2>{{$post->title}}</h2>
<div class="col-12">
    <div class="">
        <a href="">
            <img class="idetails card-img-top" src="{{ asset('/storage/'.$post->image) }}" alt="Card image cap">
        </a>
        <div class="card-body">
            <p class="card-text">{{ $post->brief }}</p>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $post->body }}</p>
        </div>

    </div>
</div>
</div>
@endsection
