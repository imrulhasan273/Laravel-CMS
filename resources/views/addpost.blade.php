@extends('layouts.admin')
@section('title', "Dashboard")
@section('heading', "Dashboard")
@section('content_header', 'Add a Post')
@section('content')
    <div class="main-content-inner">
        <div class="page-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-body">
                        {!! Form::open(['action' => 'DetailsController@addtodb', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group">
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                {{Form::label('title', 'Title')}}
                                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('brief', 'Brief')}}
                                {{Form::text('brief', '', ['class' => 'form-control', 'placeholder' => 'Brief'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('body', 'Body')}}
                                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                            </div>
                            <div>
                                {{Form::select('Content',['I' => 'Image','V' => 'Video'], null, ['class' => 'contents'])}}
                            </div>
                            <div id="file1" class="form-group">
                                {{Form::label('video', 'Youtube Video ID')}}
                                {{Form::text('video', '', ['class' => 'form-control', 'placeholder' => 'ID'])}}
                            </div>
                            <div id="file2" class="form-group">
                                {{Form::label('Image', 'Image File')}}
                                {{Form::file('image')}}
                            </div>
                            <div class="form-group">
                                @error('section')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                {{Form::label('Section1', 'Section1')}}
                                {{Form::radio('section', 'section1')  }}
                                {{Form::label('Section2', 'Section2')}}
                                {{Form::radio('section', 'section2') }}
                            </div>
                            {{Form::submit('Post', ['class'=>'btn btn-primary'])}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
