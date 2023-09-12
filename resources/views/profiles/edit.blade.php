@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-8 offset-2">

                    <div class="row">
                        <h1>Edit Profile</h1>
                    </div>

                    <div class="row mb-3">
                        <label for="title" class="col-md-4 col-form-label">Title</label>

                        <input id="title" type="text" class="form-control" name="title"
                            @error('title') is-invalid @enderror" value="{{ old('title') ?? $user->profile->title }}"
                            autofocus>

                        @error('title')
                            <strong>{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="description" class="col-md-4 col-form-label">Description</label>

                        <input id="description" type="text" class="form-control" name="description"
                            @error('description') is-invalid @enderror"
                            value="{{ old('description') ?? $user->profile->description }}" autofocus>

                        @error('description')
                            <strong>{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="url" class="col-md-4 col-form-label">URL</label>

                        <input id="url" type="text" class="form-control" name="url"
                            @error('url') is-invalid @enderror" value="{{ old('url') ?? $user->profile->url }}" autofocus>

                        @error('url')
                            <strong>{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                        <input type="file" name="image" id="image" class="form-control-file">
                        @error('image')
                            <strong>{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Save Profile</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection
