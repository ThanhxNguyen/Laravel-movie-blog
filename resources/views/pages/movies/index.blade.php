@extends('layout')

@section('title')
    Movie Page
@stop

@section('content')

    <div class="row">
        <h1 class="text-center">Movie Overview</h1>
        <div class="col-md-offset-1 col-md-10">
            <div class="col-sm-8">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center"><b>Movie Information</b></h3>
                    </div>
                    <div class="panel-body">
                        <p>Title: {{ $movie->title }}</p>
                        <p>Description: {{ $movie->description }}</p>
                    </div>
                </div><!--end panel-->
            </div>
            <div class="col-sm-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center"><b>Grab a Ticket!</b></h3>
                    </div>
                    <div class="panel-body">
                        <div>
                            <p>Some stuff here!</p>
                        </div>
                        <a href="{{ url('/movie/'.$movie->id.'/book') }}" class="btn btn-info btn-raised">Book Ticket</a>
                    </div>
                </div><!--end panel-->
            </div>
        </div>
    </div><!--end row-->

@stop