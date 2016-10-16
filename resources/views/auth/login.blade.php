@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h4>Login Form</h4>
                </div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="col-md-6 col-md-offset-4">
                                @if($errors->has('email'))<p class="text-danger"><i>{{$errors->first('email')}}</i></p>@endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">
                            </div>
                            <div class="col-md-6 col-md-offset-4">
                                @if($errors->has('password'))<p class="text-danger"><i>{{$errors->first('password')}}</i></p>@endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-3 col-md-offset-3">
                                <button type="submit" class="btn btn-info btn-raised pull-right">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a class="text-primary" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                        <hr/>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <p><i>Don't have an account?</i></p>
                                <p><a href="{{url('/register')}}" class="btn btn-success">Register</a> Or <a href="{{url('/facebook/login')}}" class="btn btn-info">Login With Facebook</a></p>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
