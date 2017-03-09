@extends('layouts.auth')

@section('content')
    <!-- Register Content -->
    <div class="content overflow-hidden">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                <!-- Register Block -->
                <div class="block block-themed animated fadeIn">
                    <div class="block-header bg-success">
                        <ul class="block-options">
                            <li>
                                <a href="#">View Terms</a>
                            </li>
                            <li>
                                <a href="{{ route('login') }}" data-toggle="tooltip" data-placement="left" title="Log In"><i class="si si-login"></i></a>
                            </li>
                        </ul>
                        <h3 class="block-title">Register</h3>
                    </div>
                    <div class="block-content block-content-full block-content-narrow">
                        <!-- Register Title -->
                        <h1 class="h2 font-w600 push-30-t push-5">Startify</h1>
                        <p>Please fill the following details to create a new account.</p>
                        <!-- END Register Title -->

                        <!-- Register Form -->
                        <form class="form-horizontal push-50-t push-50" role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <div class="col-xs-12">
                                    <div class="form-material form-material-success">
                                        <input class="form-control" type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Please enter a username">
                                        <label for="name">Username</label>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col-xs-12">
                                    <div class="form-material form-material-success">
                                        <input class="form-control" type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Please provide your email">
                                        <label for="email">Email</label>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="col-xs-12">
                                    <div class="form-material form-material-success">
                                        <input class="form-control" type="password" id="password" name="password" placeholder="Choose a strong password..">
                                        <label for="password">Password</label>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material form-material-success">
                                        <input class="form-control" type="password" id="password-confirm" name="password_confirmation" placeholder="..and confirm it">
                                        <label for="password-confirm">Confirm Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label class="css-input switch switch-sm switch-success">
                                        <input type="checkbox" id="terms" name="terms"><span></span> I agree with terms &amp; conditions
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <button class="btn btn-block btn-success" type="submit"><i class="fa fa-plus pull-right"></i> Sign Up</button>
                                </div>
                            </div>
                        </form>
                        <!-- END Register Form -->
                    </div>
                </div>
                <!-- END Register Block -->
            </div>
        </div>
    </div>
    <!-- END Register Content -->
@endsection
