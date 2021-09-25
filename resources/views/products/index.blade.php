@extends('layouts.app')

@section('content')
<hr>
<div class="w-full flex justify-center ">
    <div class="w-2/3 flex justify-between p-5 ">
        <h1 class="text-3xl font-sans tracking-tighter">Product CRUD</h1>
        <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('products.create') }}">Create Product</a>
    </div>    
</div>


{{-- Display message --}}
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="w-full flex justify-center">
<table class="border-collapse border border-indigo-800 w-2/3">
    <thead>
        <tr></tr>
        <tr>
            <th class="border border-indigo-600" scope="col">Product ID</th>
            <th class="border border-indigo-600" scope="col">Product Name</th>
            <th class="border border-indigo-600" scope="col">Product Price</th>
            <th class="border border-indigo-600" scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($products as $product) {{-- Loop products --}}
        <tr>
            <th class="border border-indigo-600" scope="row">{{ $loop->iteration }}</th>
            <td class="border border-indigo-600">{{ $product->name }}</td>
            <td class="border border-indigo-600">$ {{ $product->price }}</td>
            <td class="border border-indigo-600">

                <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="actionDropdown"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <li><a class="dropdown-item" href="{{ route('products.show', $product->id) }}">View</a></li> {{-- View --}}
                        <li><a class="dropdown-item" href="{{ route('products.edit', $product->id) }}">Edit</a></li> {{-- Edit --}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('products.destroy', $product->id) }}" method="post"> {{-- Delete --}}
                                @csrf
                                @method('delete')
                                <button type="submit" class="dropdown-item">Delete</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
</div>


@endsection