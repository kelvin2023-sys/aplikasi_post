@extends('layouts.admin')
@section('main-content')
    <div class="col-md-12 mx-auto">
        <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Tambah Post') }}</h1>
        <div class="card">
            @if ($errors->any())
                {{ implode('', $errors->all('message')) }}
            @endif
            <div class="card-header">
                +
            </div>
            <div class="card-body">
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="font-weight-bold">JUDUL</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" value="{{ old('title') }}" placeholder="Masukkan Judul Post">

                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Category</label>

                                <select class="form-control" name="category_id">
                                    <option value="category_id">Select Category</option>
                                    @foreach ($categories as $key => $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="font-weight-bold">KONTEN</label>
                                <textarea id="editor" class="editor form-control rows="10" cols="50" @error('content') is-invalid @enderror"
                                    name="content" rows="10" placeholder="Masukkan Konten Post">{{ old('content') }}</textarea>
                                <!-- error message untuk content -->
                                @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="font-weight-bold">GAMBAR</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    name="image">

                                <!-- error message untuk title -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="" hidden>Select Status</option>
                                    <option value="1">Publish</option>
                                    <option value="0">Private</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Publish Date</label>
                                <input type="date" name="publish_date" id="publish_date" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="justify-content-end mt-3">
                            <button type="submit" class="btn btn-md btn-primary">PUBLISH</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
