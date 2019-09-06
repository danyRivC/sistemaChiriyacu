@extends('layouts.base')
@section('title')Blog-Chiriyacu @stop


@section('content')
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach($posts as $post)
                <div class="page-header">
                    <img src="{{asset('storage/'.$post->image)}}" style="height:600px; width:1250px;"alt="">
                    <br>
                    <a href="/blog/{{$post->slug}}">
                    <h2>{{$post->title}}</h2>
                    </a>
                    <br>
                    <h3>{{$post->excerpt}}</h3>
                    <p>Publicado por:{{$post->author->name }} el día:{{$post->created_at->format('F d,Y')}}</p>
                </div>
            @endforeach
                <div class="align-content-lg-center">
                    {{$posts->links()}}
                </div>

        </div>


    </div>

@stop