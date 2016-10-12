@extends('layout')

@section('title')
    Cart Page
@stop

@section('content')

    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title text-center"><b>Your Cart Summary</b></h2>
                </div>
                <div class="panel-body">
                    @php($grandTotal = 0)
                    @if(!session()->has('cart') || count(session('cart')) === 0)
                        {{--redirect to home since there is nothing in cart--}}
                        <script type="text/javascript">
                            window.location = "{{url('/')}}";
                        </script>
                    @else
                        @foreach(session()->get('cart') as $k=>$cart)
                            {{--{{dd($cart)}}--}}
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <p class="panel-title"><b>Ticket for: </b><i>{{App\Movie::find($cart['movie_id'])->title}}</i></p>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="pull-right">
                                                    <a href="{{url('cart/'.$k.'/remove')}}"><i class="fa fa-times fa-2x" aria-hidden="true" style="color: #f44336"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-6">
                                            <p><b>Cinema: </b>{{App\Cinema::find($cart['cinema_id'])->name}}</p>
                                            <p><b>Session: </b>{{App\Session::find($cart['session_id'])->slot}}</p>
                                            <p><b>Date: </b>{{App\Movie::find($cart['movie_id'])->date_showing}}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><b>Ticket Type: </b>{{App\TicketType::find($cart['ticketType'])->type}}</p>
                                            <p><b>Price(ea): </b>${{number_format(App\TicketType::find($cart['ticketType'])->price, 2)}}</p>
                                            <form method="POST" action="{{url('/cart/'.$k.'/update')}}" class="form-inline" style="margin-top: -30px">
                                                {{csrf_field()}}
                                                <input type="hidden" name="itemIndex" value="{{$k}}"/>
                                                <div class="form-group">
                                                    <label for="" class="control-label">Quantity:&nbsp;&nbsp;</label>
                                                    <input type="number" name="quantity" class="form-control" min="1" max="100" value="{{$cart['quantity']}}"/>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-sm btn-success btn-raised">Update</button>
                                                </div>
                                            </form>
                                            <p><b>Sub Total: </b>${{number_format( (App\TicketType::find($cart['ticketType'])->price * $cart['quantity']), 2 )}}</p>
                                        </div>
                                    </div>
                                </div><!--end panel-->
                            </div>
                            {{--add sub total to grand total--}}
                            @php
                                $grandTotal += (App\TicketType::find($cart['ticketType'])->price * $cart['quantity'])
                            @endphp
                        @endforeach

                    @endif

                </div><!--end main panel body-->

                <div class="panel-footer">
                    <div class="row">
                        <div class="col-sm-8">
                            {{--display grand total--}}
                            <h4><b>Grand Total: </b>${{number_format($grandTotal, 2)}}</h4>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{url('/')}}" class="btn btn-info btn-raised">Continue</a>&nbsp;
                            <a href="{{url('/checkout')}}" class="btn btn-success btn-raised">Check Out</a>
                        </div>
                    </div>
                </div>
            </div><!--end main panel-->
        </div>
    </div>

@stop