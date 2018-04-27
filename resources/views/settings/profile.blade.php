@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header row"> 
                    <div class="col-3">
                        <h2 class="float-left"> Profile </h2>  
                    </div>
                </div>
                <div class="card-body">
                    <div class="col">
                      <table class="table">
                          <tbody>
                                <tr>
                                    <th class="text-muted"> Nama</th>
                                    <td> {{ auth()->user()->name }}  </td>
                                </tr>
                                <tr>
                                    <th class="text-muted"> Email </th>
                                    <td> {{ auth()->user()->email }}  </td>
                                </tr>
                          </tbody>
                      </table>
                      <a href=" {{ route('profile.edit') }} " class="btn btn-warning float-right"> Edit </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->


@endsection