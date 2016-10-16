@extends('layout')

@section('title')
    Receipt Page
@stop

@section('content')
    @if($order === null)
        {{--redirect to home since there is nothing in cart--}}
        <script type="text/javascript">
            window.location = "{{url('/')}}";
        </script>
    @else
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success">
                    <div class="panel-heading text-center">
                        <h4>Confirmation</h4>
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
                    <div class="panel-footer">
                        <a href="{{url('/')}}" class="btn btn-info btn-raised text-center">Back Home</a>
                    </div>
                </div>
            </div>
        </div>
    @endif


@stop