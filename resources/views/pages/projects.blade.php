@extends('layouts.apps')
@section('content')
    <div class="container">
            <div class="row card-deck">
                {{-- @if($projects) --}}
                    {{-- @foreach($projects as $project) --}}
                        <!--Card-->
                        <div class="card col-sm-12 col-md-6 col-lg-4">
                            <!--Card image-->
                            <div class="view overlay">
                                <img src="storage/images/weakestlink.png" class="img-fluid" alt="">
                                <a href="#">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                    
                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">Questions</h4>
                                <!--Text-->
                                <p class="card-text">Questions is a simple game that ask a user basic history questions in Trinidad and Tobago</p>
                                <a target="_blank" href="/projects/game" class="btn btn-primary">Click to Play</a>
                            </div>
                        {{-- <div class="card col-sm-12 col-md-6 col-lg-4">
                            <!--Card image-->
                            <div class="view overlay">
                                <img src="storage/images/{{$project->image_path}}" class="img-fluid" alt="">
                                <a href="#">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                    
                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">{{$project->title}}</h4>
                                <!--Text-->
                                <p class="card-text">{{$project->description}}</p>
                                <a target="_blank" href="/projects/game" class="btn btn-primary">Click to Play</a>
                            </div> --}}
                        {{-- </div>{{$projects->links()}} --}}
                        {{--  @if(count($projects) % 3 == 0)
                        <div class="w-100"><br></div>
                        @elseif(count($projects) % 2 == 0)
                        <div class="w-100"><br></div>
                        @endif  --}}
                        <!--/.Card-->
                        <!--Card-->
                        {{--  <div class="card col-sm-12 col-md-6 col-lg-4">
                            <!--Card image-->
                            {{--  <div class="view overlay">
                                <img src="{{$project->image_path}}" class="img-fluid" alt="">
                                <a href="#">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            {{--  </div>  
                    
                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">{{$project->title}}</h4>
                                <!--Text-->
                                <p class="card-text">{{$project->description}}</p>
                                <a target="_blank" href="/projects/game" class="btn btn-primary">Button</a>
                            </div>
                        </div>  --}}
                        <!--/.Card-->
                    {{-- @endforeach --}}
                {{-- @else --}}
                {{-- <div>No projects</div> --}}
                {{-- @endif --}}
            </div>              
    </div>
        
@endsection