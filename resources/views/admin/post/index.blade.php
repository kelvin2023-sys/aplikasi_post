@extends('layouts.admin')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
@endpush
@section('main-content')
    <div class="col-md-12 mx-auto">
        <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Post') }}</h1>
        <div class="card">
            <div class="card-body">
                <a href="{{ route('posts.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                <table class="table table-striped table-bordered" id="datatable">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Description</th>
                            <th scope="col">Publish Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Views</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ asset('/storage/posts/' . $post->image) }}" class="rounded"
                                        style="width: 150px">
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->category->name ?? 'None' }}</td>
                                <td>{{ Str::limit($post->content, 400) }}</td>
                                <td>{{ $post->publish_date }}</td>

                                @if ($post->status == 0)
                                    <td><span class="badge badge-danger">Private</span></td>
                                    </span>
                                @else
                                    <td><span class="badge badge-success">Published</span></td>
                                @endif
                                <td>{{ $post->views }}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        {{-- <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a> --}}
                                        <a href="{{ route('posts.edit', $post->id) }}"
                                            class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger mt-2">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Post belum Tersedia.
                            </div>
                        @endforelse
                    </tbody>
                </table>
                {{ $posts->links() }}
            </div>
        </div>

        @include('admin.post.script')
    @endsection
    @push('notif')
        @if (session('success'))
            <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if (session('warning'))
            <div class="alert alert-warning border-left-warning alert-dismissible fade show" role="alert">
                {{ session('warning') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (session('status'))
            <div class="alert alert-success border-left-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    @endpush
    @push('js')
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
        <script>
            new DataTable('#datatable');
        </script>
    @endpush
