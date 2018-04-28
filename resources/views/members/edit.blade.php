@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('members.index')}}">Members</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Member</li>
                    
                </ol>
            </nav>
            <div class="card">
                <div class="card-header"> Edit Member 
                </div>

                <div class="card-body">
                    <form class="form-horizontal" action=" {{ route('members.update', $member->id) }} " method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Member Name :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ $member->name }}" autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong> {{ $errors->first('name') }} </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Member Email :</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ $member->email }}" autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong> {{ $errors->first('email') }} </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-2">
                                <button class="btn btn-primary float-right" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
