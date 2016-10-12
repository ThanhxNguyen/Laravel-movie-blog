@extends('layout')

@section('title')
    Receipt Page
@stop

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2 class="text-center text-success"><b><i>Thank you for your purchase!</i></b></h2>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 text-center">
                            <a href="" class="btn btn-info btn-raised">Review</a>&nbsp;<a href="{{url('/')}}" class="btn btn-info btn-raised">Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop