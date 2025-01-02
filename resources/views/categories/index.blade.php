@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">category List</div>
    <div class="card-body">
        @can('create-category')
        <a href="{{ route('categories.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New category</a>
        @endcan
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">S#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        @can('edit-category')
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                        @endcan

                        @can('delete-category')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this category?');"><i class="bi bi-trash"></i> Delete</button>
                        @endcan
                    </td>
                </tr>
                @empty
                <td colspan="4">
                    <span class="text-danger">
                        <strong>No category Found!</strong>
                    </span>
                </td>
                @endforelse
            </tbody>
        </table>

        {{-- {{ $categories->links() }} --}}

    </div>
</div>
@endsection
