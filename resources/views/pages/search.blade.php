@extends('layout')

@section('title')
    Search Page
@stop

@section('content')

    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="{{url('/search')}}" method="POST">
                        {{csrf_field()}}

                        <div class="form-group">
                            <input type="text" name="searchVal" class="form-control text-center" placeholder="Search by movie or cinema ...."/>
                        </div>

                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-success btn-raised" value="Search"/>
                        </div>
                    </form>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="text-center">Search Results</h3></div>
                <div class="panel-body">
                    @if(count($results) === 0)
                        <p class="text-center"><i>No Search Results!</i></p>
                    @else
                        @foreach($results as $k=>$movie)
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <a href="{{url('/movie/'.$movie['id'])}}">
                                            <img src="{{url('images/gallery/'.$movie['poster'])}}" class="img-responsive1 center-block" alt="POST" height="400" style="width: 100% !important;"/>
                                        </a>
                                        <div class="btn-group btn-group-raised center-block">
                                            <a class="btn btn-warning btn-raised col-md-6" href="{{url('/movie/'.$movie['id'])}}">View</a>
                                            <a class="btn btn-info btn-raised col-md-6" href="{{url('/movie/'.$movie['id']).'/book'}}">Book Ticket</a>

                                        </div>
                                        <br/><br/>
                                        <h4>{{$movie['title']}}</h4>
                                        <p class="text-muted">{{$movie['rate']}} | {{$movie['date_showing']}}</p>
                                        <p>{{$movie['genre']}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

        </div>
    </div>

@stop