@extends('layout')

@section('title')
    Booking Page
@stop

@section('content')

    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title text-center"><b>Book a Ticket</b></h3>
                </div>
                <div class="panel-body">
                    <div>
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center"><b>Movie Information</b></div>
                                <div class="panel-body">
                                    <p><b>Title: </b>{{ $movie->title }}</p>
                                    <p class="text-muted">{{ $movie->genre }}</p>
                                    <p><b>Showing: </b>{{ $movie->date_showing }}</p>
                                    <p><b>Run Time: </b>{{ $movie->run_time }}</p>
                                    <hr/>
                                    <p>{{ $movie->description }}</p>
                                </div>
                            </div><!--end panel-->
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center"><b>Ticket Info</b></div>
                                <div class="panel-body">
                                    <!--Form-->
                                    <form class="form-horizontal" method="POST" action="{{url('/cart')}}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="movie_id" value="{{$movie->id}}"/>
                                        <fieldset>

                                            <div class="form-group">
                                                <label for="" class="col-md-4 control-label">Cinema:</label>

                                                <div class="col-md-8">
                                                    <select name="cinema" class="form-control">
                                                        @foreach($movie->cinemas as $cinema)
                                                            <option value="{{$cinema->id}}">{{$cinema->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="col-md-4 control-label">Session:</label>

                                                <div class="col-md-8">
                                                    <select name="movieSession" class="form-control">
                                                        @foreach($movie->sessions as $session)
                                                            <option value="{{$session->id}}">{{$session->slot}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="col-md-4 control-label">Ticket Type:</label>

                                                <div class="col-md-8">
                                                    <select name="ticketType" class="form-control">
                                                        @foreach($types as $type)
                                                            <option value="{{$type->id}}">{{$type->type}} - ${{$type->price}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="col-md-4 control-label">Quantity:</label>
                                                <div class="col-md-4">
                                                    <input type="number" name="quantity" class="form-control" min="1" max="100" value="1"/>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-3 col-md-offset-8">
                                                    <button type="submit" class="btn btn-info btn-raised pull-right">Add To Cart</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                    <!--end Form-->
                                </div>
                            </div><!--end panel-->
                        </div>
                    </div>

                </div>
            </div><!--end panel-->
        </div>
    </div>

@stop