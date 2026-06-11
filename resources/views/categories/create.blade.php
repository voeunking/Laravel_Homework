@extends('layout.app')
@section('title')
  <title>Create</title>
@endsection
@section('contain')
   <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name"
                            aria-describedby="emailHelp">
                        @error('name')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="dec" class="form-label">Description</label>
                        <div class="form-floating">
                            <textarea name="dec" class="form-control" id="dec">{{ old('dec') }}</textarea>
                        </div>
                        @error('dec')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="active" class="form-label">Active</label>
                        <input type="text" name="active" value="{{ old('active') }}" class="form-control" id="active">
                        @error('active')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection

