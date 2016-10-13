@extends('layout')

@section('Title')
    Checkout Page
@stop

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if(!session()->has('cart') || count(session('cart')) === 0)
                {{--redirect to home since there is nothing in cart--}}
                <script type="text/javascript">
                    window.location = "{{url('/')}}";
                </script>
            @else
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title text-center"><b>Payment</b></h3>
                </div>
                <div class="panel-body">
                    <!--payment form-->
                    <form class="form-horizontal" method="POST" action="{{url('/checkout')}}">
                        {{csrf_field()}}
                        <fieldset>
                            <div class="form-group">
                                <label for="" class="col-md-3 control-label">Full Name:</label>

                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="" placeholder="Full Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-3 control-label">Address:</label>

                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="" placeholder="Address">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-3 control-label">Credit Card No:</label>

                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="" placeholder="">
                                    <p class="text-muted">16 digits e.g. 1234 2345 3456 4567</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-3 control-label">Expire:</label>

                                <div class="col-md-2">
                                    <input type="text" class="form-control" placeholder="MM"/>
                                    <input type="text" class="form-control" placeholder="YY"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-3 control-label">CVS</label>

                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-6">
                                    <a href="{{url('/cart')}}" class="btn btn-danger btn-raised">Cancel</a>
                                    <button type="submit" class="btn btn-info btn-raised">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <!--end payment form-->
                </div>
            </div><!--end panel-->
            @endif
        </div>
    </div>

@stop