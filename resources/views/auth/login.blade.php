@extends('layouts.app')

@section('content')
    <div class="loginColumns animated fadeInDown">
        <div class="row">
            <div class="col-md-6">
                <h3 class="font-bold">HackRealityAsia | Core</h3>
                <p>
                    The core is an open source project to serve as a web administration tool to maintain and manage
                    <a class="text-primary" href="https://hackreality.asia">
                        hackreality.asia
                    </a>
                    page.
                </p>
                <p>
                    Feel free to contribute or
                    <a href="https://www.github.com/hackrealityasia/hackreality-core">
                        <i class="fa fa-code-fork"></i> fork
                    </a>
                    the project at
                    <a href="https://www.github.com/hackrealityasia"
                       class="text-primary">www.github.com/hackrealityasia</a>
                </p>
            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="m-t" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input title="Email" placeholder="Email" id="email" type="text"
                                   class="form-control" name="email" value="{{ old('email') }}" required
                                   autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input title="Password" placeholder="Password" id="password" type="password"
                                   class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                        <p class="text-muted text-center">
                            <small><a href="{{ route('password.request') }}">Forgot password?</a></small>
                        </p>
                        <p class="text-muted text-center">
                            <small>Do you have any inquiries?</small>
                        </p>
                        <a class="btn btn-sm btn-outline-dark btn-block" href="mailto:maintenance@hackreality.asia">Contact
                            Us</a>
                    </form>
                    <p class="m-t">
                        <small>For immediate maintenance support, please reach us through
                            <a href="mailto:maintenance@hackreality.asia">
                                maintenance@hackreality.asia
                            </a>
                        </small>
                    </p>
                </div>
            </div>
        </div>
        <hr class="btn-primary"/>
        <div class="row">
            <div class="col-md-6">
                <small>HackReality | VR Philippines</small>
            </div>
            <div class="col-md-6 text-right">
                <small>All Rights Reserved. Copyright 2018</small>
            </div>
        </div>
    </div>
@endsection
