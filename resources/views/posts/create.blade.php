@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/p" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">

                    <div class="row">
                        <h1>Add New Post</h1>
                    </div>

                    <div class="row mb-3">
                        <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

                        <input id="caption" type="text" class="form-control" name="caption"
                            @error('caption') is-invalid @enderror" value="{{ old('caption') }}" autofocus required>

                        @error('caption')
                            <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">Image</label>
                        <input type="file" name="image" id="image" class="form-control-file" required>
                        @error('image')
                            <strong>{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Add New Post</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection
