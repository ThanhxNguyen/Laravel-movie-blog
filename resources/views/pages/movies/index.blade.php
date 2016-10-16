@extends('layout')

@section('title')
    Movie Page
@stop

@section('content')

    <div class="row">
        <h1 class="text-center">Movie Overview</h1>
        <div class="col-md-offset-1 col-md-10">

            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="col-sm-8">
                        <div class="panel panel-default">
                            <div class="panel-heading dark-bg">
                                <h3 class="panel-title text-center white-text"><b>Movie Information</b></h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <img src="{{url('images/gallery/'.$movie->poster)}}" alt="POSTER" class="img-responsive center-block">
                                    </div>

                                    <div class="col-sm-7">
                                        <h4><b>Title: {{ $movie->title }}</b></h4>
                                        <footer class="text-muted">{{$movie->genre}}</footer>
                                        <p>{{$movie->date_showing}} | {{$movie->rate}}</p>
                                        <p>Run Time: {{$movie->run_time}}</p>
                                        <p><b>Director: </b><a href="javascript:void(0)" class="text-info">{{$movie->director}}</a></p>
                                        <hr/>
                                        <p>Description: {{ $movie->description }}</p>
                                    </div>
                                </div>

                            </div>
                        </div><!--end panel-->
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center"><b>Grab a Ticket!</b></h3>
                            </div>
                            <div class="panel-body">
                                @if($movie->category_id == 1)
                                    <h5>Available Cinemas:</h5>
                                    @foreach($movie->cinemas as $cinema)
                                        <p><i class="fa fa-film" aria-hidden="true"></i>&nbsp;&nbsp;<a href="javascript:void(0)" class="text-info">{{$cinema->name}}</a></p>
                                    @endforeach
                                    <div>
                                        <p><i>Grab a ticket and enjoy the movie with your loved ones!</i></p>
                                    </div>
                                    <a href="{{ url('/movie/'.$movie->id.'/book') }}" class="btn btn-info btn-raised">Book Ticket</a>
                                @elseif($movie->category_id == 2)
                                    <div>
                                        <p><i>Sorry! You can't book a ticket for this movie because it is not released yet!
                                                However you can add it to your wish list</i></p>
                                    </div>
                                    <form action="{{url('/wishlist')}}" method="POST">
                                        {{csrf_field()}}
                                        <input type="hidden" name="movie_id" value="{{$movie['id']}}"/>
                                        <input type="submit" class="btn btn-info btn-raised col-md-6" value="Wish List">
                                    </form>
                                @endif
                            </div>
                        </div><!--end panel-->
                    </div>

                </div>
            </div><!--end main panel-->

        </div>
    </div><!--end row-->

@stop