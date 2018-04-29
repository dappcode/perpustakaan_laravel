@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('books.index')}}">Books</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Export Book</li>
                    
                </ol>
            </nav>
            <div class="card">
                <div class="card-header"> Export Book </div>
{{-- {{dump($errors)}} --}}
                <div class="card-body">
                    <form class="form-horizontal" action=" {{ route('export.books.post') }} " method="post" enctype="multipart/form-data" target="_blank">
                        @csrf

                        <div class="form-group row">
                            <label for="text" class="col-sm-2 col-form-label">Author Name :</label>
                            <div class="col-sm-10">
                                <select class="custom-select form-control js-selectize {{ $errors->has('author_id') ? ' is-invalid' : '' }}" name="author_id[]" multiple placeholder="Choose Authors..." autofocus>
                                @foreach ($authors as $key => $author)
                                    <option value=" {{ $key }}"> {{ $author }} </option>
                                @endforeach    
                                </select>
                                @if ($errors->has('author_id'))
                                    <span class="invalid-feedback">
                                        <strong> {{ $errors->first('author_id') }} </strong>
                                    </span>
                                    <br>
                                @endif
                            </div>
                            <label for="text" class="col-sm-2 col-form-label">Pilih Output:</label>
                            <div class="col-sm-10">
                                <div class="form-control {{ $errors->has('type') ? ' is-invalid' : '' }}">
                                    <div class="form-check">
                                        <input class="form-check-input " type="radio" name="type" value="xls">
                                        <label class="form-check-label">
                                            Excel
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="type" value="pdf">
                                        <label class="form-check-label">
                                            Pdf
                                        </label>
                                    </div>
                                </div>
                                @if ($errors->has('type'))
                                    <span class="invalid-feedback">
                                        <strong> {{ $errors->first('type') }} </strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-2">
                                <button class="btn btn-primary float-right" type="submit"><i class="fas fa-upload"></i> Export</button>
                            </div>
                        </div>

                        {{-- @include('books._form') --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
