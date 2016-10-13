@extends('layout')

@section('title')
    My Account Page
@stop

@section('content')

    <div class="row">
        <h1>Account</h1>

        {{--{{var_dump($orders)}}--}}
        @foreach($orders as $k=>$order)
            <p>Order id: {{$order['id']}}</p>
        @endforeach
        {!! $orders->links() !!}
    </div>

@stop