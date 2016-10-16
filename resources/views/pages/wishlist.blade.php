@extends('layout')

@section('title')
    Personal Wish List
@stop

@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default dark-bg">
                <div class="panel-body">
                    <h2 class="panel-title white-text text-center"><b style="font-size: 1.5em !important;">Personal Wish List</b></h2>
                </div>
            </div>
            <div class="panel panel-default">
                {{--<div class="panel-heading dark-bg">--}}
                    {{--<h2 class="panel-title white-text">Personal Wish List</h2>--}}
                {{--</div>--}}
                <div class="panel-body">
                    @if(count($wishlist) === 0)
                        <h4 class="text-center">You have no movie in your wish list at the moment!</h4>
                    @else
                        {{--{{var_dump($wishlist)}}--}}
                        @foreach($wishlist as $k=>$movie)
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <img src="{{url('images/gallery/'.$movie['poster'])}}" class="img-responsive1 center-block" alt="POST" height="400" style="width: 100% !important;"/>
                                        <div class="btn-group btn-group-raised center-block">
                                            <a class="btn btn-info btn-raised col-md-6" href="{{url('/movie/'.$movie['id'])}}">View</a>
                                            <form action="{{url('/wishlist/'.$movie['id'])}}" method="POST">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <input type="submit" class="btn btn-danger btn-raised col-md-6" href="" value="Remove">
                                            </form>
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
            </div><!--end panel-->
        </div>
    </div>

@stop