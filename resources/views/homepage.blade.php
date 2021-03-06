@extends('layouts.app')
@section('content')
<div class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8 col-md-8">
                <h5>SECTION 1</h5>
                <div class="row">
                    <section class="col-12 row">
                    @foreach ($allPosts as $post)
                        @if( $post->section == 'section1')
                        <div class="col-3 big-box">
                            <div class="card">
                                <a href="{{route('details',$post->id)}}">
                                    @if( $post->is_video == '0')
                                    <img class="card-img-top" src="{{ asset('/storage/'.$post->image) }}" alt="Card image cap">
                                    @else
                                    <div class="media">
                                        <div class="media-body">
                                            <iframe width="188" height="136" src="https://www.youtube.com/embed/{{ $post->video }}" frameborder="0" allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>
                                    @endif
                                </a>
                                <div class="card-body">
                                    <a href="{{route('details',$post->id)}}">
                                        <h4 class="card-title">{{ $post->title }}</h4>
                                    </a>
                                    <p class="card-text">{{ $post->brief }}</p>
                                </div>
                            </div>
                        </div>

                        @endif
                    @endforeach
                    </section>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 border-left">
                <h5>SECTION 2</h5>
                <div class="row">
                    @foreach ($allPosts as $post)
                        @if( $post->section == 'section2')
                        <div class="col-6">
                            <div class="card">
                                <a href="{{route('details',$post->id)}}">
                                    @if( $post->is_video == '0')
                                    <img class="card-img-top" src="{{ asset('/storage/'.$post->image) }}" alt="Card image cap">
                                    @else
                                    <div class="media">
                                        <div class="media-body">
                                            <iframe width="195" height="145" src="https://www.youtube.com/embed/{{ $post->video }}" frameborder="0" allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>
                                    @endif
                                </a>
                                <div class="card-body">
                                    <a href="{{route('details',$post->id)}}">
                                        <h4 class="card-title">{{ $post->title }}</h4>
                                    </a>
                                    <p class="card-text">{{ $post->brief }}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
