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
            <th class="border border-indigo-600 p-3" scope="row">{{ $loop->iteration }}</th>
            <td class="border border-indigo-600 p-3">{{ $product->name }}</td>
            <td class="border border-indigo-600 p-3">$ {{ $product->price }}</td>
            <td class="border border-indigo-600 p-3">

                <div class="">  
                    <div class="flex w-full justify-end">
                        <div class="pl-3"><a class="text-green-500" href="{{ route('products.show', $product->id) }}">View</a></div> {{-- View --}}
                        <div class="pl-3"><a class="text-blue-500" href="{{ route('products.edit', $product->id) }}">Edit</a></div> {{-- Edit --}} 
                        <div class="pl-3 text-red">
                            <form action="{{ route('products.destroy', $product->id) }}" method="post"> {{-- Delete --}}
                                @csrf
                                @method('delete')
                                <button type="submit" class="text-white hover:text-red-500 bg-red-400 hover:bg-red-100 rounded-md p-2">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
</div>


@endsection