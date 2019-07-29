@extends('layouts/anniversary')
@section('content')
    <header class="v-header container">
        {{-- <div class="icon-play">
                <i class="fa fa-play-circle-o" aria-hidden="true"></i>
        </div> --}}
        <div class="fullscreen-video-wrap">
            {{--  <video src="{{ asset('storage/videos/Typing_light_01_Videvo.mov') }}" autoplay="true" loop="true"></video>  --}}
            <video src="{{ asset('storage/videos/baby.mp4') }}" autoplay="true" loop="true" muted="true"></video>
        </div>
        <div class="header-overlay"></div>
        {{--  <div class="header-content">
            <h1>Hello Boo</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil, distinctio.</p>
            <a href="" class="btn">US</a>
        </div>  --}}
        
        <div class="container-fluid full-bg-image d-flex align-items-center justify-content-center"> 
                <div class="row d-flex justify-content-center"> 
                    <div id="caption-wrapper" class="col-md-10 text-center">
                        <div class="row">
                            <h5 id="head-title" class="display-3 font-bold white-text mb-2 col-md-12 typed">
                                <div id="icon-play" >
                                    <i class="fa fa-play-circle fa-2x fa-lg cyan-text" aria-hidden="true"></i>
                                </div>
                                {{-- Happy Anniversary LoVe --}}
                            </h5>
                        </div>
                        
                        <hr class="hr-light">
        
                        <h3 id="title-caption" class="display-3 font-bold cyan-text mb-2 hide animated fadeInDown">
                            I LoVe You
                                {{-- <i class="fa fa-play-circle fa-4x fa-lg" aria-hidden="true"></i> --}}

                            {{--  Lorem ipsum dolor sit amet consectetur adipisicing elit.      --}} 
                        </h3>
                        <h4 id="index-caption" class="white-text my-4">
                            {{--  Lorem ipsum dolor sit amet consectetur adipisicing elit.   --}}
                        </h4>
        
                        {{-- <a class="btn btn-outline-white waves-effect"href="/projects" role="button">Portfolio</a>
                        <a class="btn btn-outline-white waves-effect"href="/projects" role="button">Portfolio</a>        --}}
                    </div> 
                </div>         
            </div>
    </header>
<audio id="audio-control">
    <source src="{{ asset('storage/music/Always.mp3')}}" type="audio/mpeg">
    Your broswer does not support the audio element.
</audio>
@endsection