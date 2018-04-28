@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header"> Change Password </div>
                <div class="card-body">
                    <form class="form-horizontal" action=" {{ route('password.update') }} " method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Your Password :</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" autofocus>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong> {{ $errors->first('password') }} </strong>
                                    </span>
                                @endif
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">New Password:</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control{{ $errors->has('new_password') ? ' is-invalid' : '' }}" id="new_password" name="new_password" >

                                @if ($errors->has('new_password'))
                                    <span class="invalid-feedback">
                                        <strong> {{ $errors->first('new_password') }} </strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="new_password_confirmation" class="col-sm-2 col-form-label">New Password Confirmation :</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control{{ $errors->has('new_password_confirmation') ? ' is-invalid' : '' }}" id="new_password_confirmation" name="new_password_confirmation" >

                                @if ($errors->has('new_password_confirmation'))
                                    <span class="invalid-feedback">
                                        <strong> {{ $errors->first('new_password_confirmation') }} </strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-2">
                                <button class="btn btn-primary float-right" type="submit">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
