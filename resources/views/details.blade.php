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
        @if( $post->is_video == '0')
            <img class="card-img-top" src="{{ asset('/storage/'.$post->image) }}" alt="Card image cap">
        @else
            <div class="media">
                <div class="media-body">
                    <iframe width="400" height="300" src="https://www.youtube.com/embed/{{ $post->video }}" frameborder="0" allowfullscreen>
                    </iframe>
                </div>
            </div>
        @endif
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
