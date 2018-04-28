@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('members.index')}}">Members</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$member->name}}</li>
                    
                </ol>
            </nav>
            <div class="card">
                <div class="card-header text-info"> {{ $member->name }} 
                </div>
{{-- {{dump($errors)}} --}}
                <div class="card-body">
                   <h3 clas="text-header">Buku yang sedang di Pinjam:</h3>
                   <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Books Name</th>
                            <th scope="col">Tanggal Peminjaman</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($member->borrowLogs()->borrowed()->get() as $key => $log)
                            <tr>
                                <th scope="row"> {{$key+1}} </th>
                                <td> {{ $log->book->title }} </td>
                                <td> {{ $log->created_at->format('D, d/M/Y') }} </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="alert alert-warning text-center">No Data.</td>
                            </tr>

                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="card-body">
                    <h3 clas="text-header">Buku yang sudah di Kembalikan:</h3>
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Books Name</th>
                            <th scope="col">Tanggal Pengembalian</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse ($member->borrowLogs()->returned()->get() as $key => $log)
                            <tr>
                                <th scope="row"> {{$key+1}} </th>
                                <td> {{ $log->book->title }} </td>
                                <td> {{ $log->updated_at->format('D, d/M/Y') }} </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="alert alert-warning text-center">No Data.</td>
                            </tr>

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
