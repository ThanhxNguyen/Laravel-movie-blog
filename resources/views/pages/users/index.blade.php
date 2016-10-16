@extends('layout')

@section('title')
    My Account Page
@stop

@section('content')

    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading dark-bg">
                    <h4 class="text-center white-text">Orders Summary</h4>
                </div>
                @if(count($orders) > 0)
                    <div class="panel-body">

                        @foreach($orders as $k=>$order)
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <a href="javascript:void(0)">
                                        <b>Order Number: </b>{{$order['id']}}
                                    </a>
                                </div>
                                <div class="panel-body">
                                    @foreach($order->summaries as $j=>$summary)
                                        <div class="col-sm-12">
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <div class="col-sm-6">
                                                        <p><b>Movie: </b>{{App\Movie::find($summary->movie_id)->title}}</p>
                                                        <p><b>Cinema: </b>{{App\Cinema::find($summary->cinema_id)->name}}</p>
                                                        <p><b>Session: </b>{{App\Session::find($summary->session_id)->slot}}</p>
                                                        <p><b>Ticket Type: </b>{{App\TicketType::find($summary->ticket_type_id)->type}}</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p><b>Price(ea): </b>${{number_format(App\TicketType::find($summary->ticket_type_id)->price, 2)}}</p>
                                                        <p><b>Quantity: </b>{{$summary->quantity}}</p>
                                                        <p><b>Total Paid: </b>{{number_format( (App\TicketType::find($summary->ticket_type_id)->price) * $summary->quantity , 2)}}</p>
                                                        <p><b>Purchased At: </b>{{$order->created_at->diffForHumans()}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="panel-footer">
                        {!! $orders->links() !!}
                    </div>
                @else
                    <h4 class="text-center"><i>No Content Available!</i></h4>
                @endif
            </div><!--end panel-->
        </div>

    </div>

@stop