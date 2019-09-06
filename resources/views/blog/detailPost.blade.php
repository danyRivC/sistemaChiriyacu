@extends('layouts.base')
@section('content')
    <header class="col-lg-12" style="background-image: url('./{!! $post->image !!}')"><h1>{{$post->title}}</h1></header>
    <div class=" col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 ">
    <div class="bootstrap-tab animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home" aria-labelledby="home-tab">
                    {!! $post->body !!}
                </div>

            </div>
        </div>
    </div>
    </div>

@stop
