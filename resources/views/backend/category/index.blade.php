@extends('backend.layouts.adm_template')

@section('content')
    <!-- Awal Header -->
    <div class="row">
        <div class="col-12 text-center">
            <h3 class="text-primary">Laravel CRUD - Belajar</h3>
        </div>
    </div>
    <!-- Akhir Header -->

    <!-- Awal Content -->
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <div class="row">
                        <div class=" col-md-6 mb-3 mt-3">
                            <a href="{{ route('category.create') }}" class="btn btn-md btn-success w-100 w-md-auto">Add Category</a>
                        </div>
                        <div class="col-md-6">
                            <form action="/category" method="GET">
                                @csrf
                                <div class="input-group mb-3 mt-3">
                                    <input type="text" name="search" class="form-control" placeholder="Search category" aria-label="Search category" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-primary" type="submit" id="button-addon2">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Information</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($category as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->description }}</td>
                                    <td>{{ $row->category }}</td>
                                    <td>{{ $row->information }}</td>
                                    <td>
                                        <form action="{{ route('category.destroy', $row->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                            <a href="{{ route('category.show', $row->id) }}" class="btn btn-sm btn-dark">Show</a>
                                            <a href="{{ route('category.edit', $row->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center">No records available</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    {{ $category->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Content -->

@endsection
