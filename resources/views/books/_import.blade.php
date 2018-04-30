<div class="form-group row">
    <label for="text" class="col-sm-4 col-form-label">Gunakan Template terbaru</label>
    <div class="col-sm-8">
        <a href=" {{ route('template.books') }} " class="btn btn-xs btn-info"> Download </a>
    </div>
</div>

<div class="form-group row">
    <label for="text" class="col-sm-4 col-form-label">Pilih File: </label>
    <div class="col-sm-8">
        <div class="custom-file">
            <input type="file" id="excel" class="custom-file-input form-control {{ $errors->has('excel') ? 'is-invalid' : '' }} " name="excel" value="{{ old('excel') }}" autofocus>
            <label class="custom-file-label" for="customFile">Choose File</label>
            @if ($errors->has('excel'))
                <span class="invalid-feedback">
                    <strong> {{ $errors->first('excel') }} </strong>
                </span>
            @endif
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-4"></div>
    <div class="col-md-12 col-md-offset-2">
        <button class="btn btn-primary float-right" type="submit">Save</button>
    </div>
</div>