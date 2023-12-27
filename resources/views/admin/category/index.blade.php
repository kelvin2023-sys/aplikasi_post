@extends('layouts.admin')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
@endpush
@section('main-content')
    <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Category') }}</h1>
    <div class="card shadow-sm p-2">


        <div class="card-header bg-white justify-content-between align-items-start mb-1">
            @include('admin.category.create')
        </div>

        {{-- modal --}}
        <table class="table table-striped table-bordered" id="datatable">
            <thead>
                <tr>
                    <th width="10%">No</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Created At</th>
                    <th width="15%">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $i => $data)
                    <tr>
                        <th>{{ $i + 1 }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->slug }}</td>
                        <td>{{ $data->created_at }}</td>
                        <td>

                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalUpdate">
                                Edit
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">
                                Delete
                            </button>

                            @include('admin.category.delete')
                            @include('admin.category.update')

                        </td>
                    </tr>
                @empty
                    <th colspan="4" class="text-center">No Data Available</th>
                @endforelse
            </tbody>
        </table>

        <div class="card-body">
            {{ $categories->links() }}
        </div>
    </div>
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
