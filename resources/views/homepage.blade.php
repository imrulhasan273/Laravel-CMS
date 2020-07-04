@extends('layouts.app')

@section('content')
<div class="">
    {{-- <div id="ihome" class="row">
      <div class="col-xs-6" id="div1">
        <div class="album py-5 bg-light">
            <div class="container">

              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                          <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                          <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>




      <div class="col-xs-6" id="div2">
        2nd Column content...
      </div>
    </div> --}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8 col-md-8">
                <h2>SECTION 1</h2>
                <div class="row">
                    @foreach ($allPosts as $post)
                        @if( $post->section == 'section1')
                        <div class="col-3">
                            <div class="card">
                                <a href="{{route('details',$post->id)}}">
                                    @if( $post->is_video == '0')
                                    <img class="card-img-top" src="{{ asset('/storage/'.$post->image) }}" alt="Card image cap">
                                    @else
                                    <div class="media">
                                        <div class="media-body">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $post->video }}" frameborder="0" allowfullscreen>
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
            <div class="col-sm-4 col-md-4 border-left">
                <h2>SECTION 2</h2>
                <div class="row">
                    @foreach ($allPosts as $post)
                        @if( $post->section == 'section2')
                        <div class="col-4">
                            <div class="card">
                                <a href="{{route('details',$post->id)}}">
                                    @if( $post->is_video == '0')
                                    <img class="card-img-top" src="{{ asset('/storage/'.$post->image) }}" alt="Card image cap">
                                    @else
                                    <div class="media">
                                        <div class="media-body">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $post->video }}" frameborder="0" allowfullscreen>
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
