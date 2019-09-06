@extends('layouts.base')


@section('content')
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach($posts as $post)
                <div class="page-header">
                    <img src="" alt="">
                    <a href="/blog/{{$post->slug}}">
                    <h2>{{$post->title}}</h2>
                    <h3>{{$post->excerpt}}</h3>
                    </a>
                    <p>Publicado por:{{$post->author->name }} el día:{{$post->created_at->format('F d,Y')}}</p>
                </div>
            @endforeach
                <div class="align-content-lg-center">
                    {{$posts->links()}}
                </div>

        </div>


    </div>

@stop