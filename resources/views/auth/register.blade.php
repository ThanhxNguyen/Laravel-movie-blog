@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h4>Register Form</h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-3 control-label">Name</label>

                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                            <div class="col-md-7 col-md-offset-3">
                                @if($errors->has('name'))<p class="text-danger"><i>{{$errors->first('name')}}</i></p>@endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-3 control-label">E-Mail Address</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="col-md-7 col-md-offset-3">
                                @if($errors->has('email'))<p class="text-danger"><i>{{$errors->first('email')}}</i></p>@endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-3 control-label">Password</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control" name="password">
                            </div>
                            <div class="col-md-7 col-md-offset-3">
                                @if($errors->has('password'))<p class="text-danger"><i>{{$errors->first('password')}}</i></p>@endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-3 control-label">Confirm Password</label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                            <div class="col-md-7 col-md-offset-3">
                                @if($errors->has('password_confirmation'))<p class="text-danger"><i>{{$errors->first('password_confirmation')}}</i></p>@endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success btn-raised pull-right">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
