@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center align-items-center mt-5" style="margin: 40px;">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row justify-content-center">
                            <img src="{{ asset('images/PNP-Logo-768x432@1X.png') }}" class="img-fluid" alt="...">
                        </div>
                        <div class="form-group row justify-content-center">
                            <h5><span class="font-weight-bold">PNP</span> Violation Ticketing System</h5>
                        </div>
                        <div class="form-group row justify-content-center mt-5">
                            <div class="col-md-8 input-group">
                                <input id="email" type="email" placeholder="Email" class="form-control border-right-0 border @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span class="input-group-append">
                                  <div class="input-group-text bg-transparent border-left-0 border"><img src="{{ asset('images/email-1818372-1541480@1X.png') }}" class="img-fluid" alt="..."></div>
                                </span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-8 input-group">
                                <input id="password" type="password" placeholder="Password" class="form-control  border-right-0 border @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <span class="input-group-append">
                                  <div class="input-group-text bg-transparent border-left-0 border"><img src="{{ asset('images/lock-1818372-1541480@1X.png') }}" class="img-fluid" alt="..."></div>
                                </span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="dd-grid gap-2 col-md-8 justify-content-center">
                                <button type="submit" class="btn btn-login btn-block text-light" style="background-color: #009933">
                                    {{ __('LOG-IN') }}
                                </button>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-dark font-weight-bold" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
