@extends('layouts.base')
@section('title', 'Centro Comercial Chiriyacu')
@section('content')

                <h1>Blog</h1>
                @foreach($posts as $post)
                    <strong>{{$post->tittle}}</strong>
                    <p>Creado por: {{$post->author_id}}</p>
                    <p>{{$post->content}}</p>
                  @endforeach

@endsection