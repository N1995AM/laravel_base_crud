@extends('layouts.app')

@section('content')

<h1>Products Create</h1>
<hr/>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('products.store') }}" method="post">
    @csrf
    <input type="text" name="name" class="form-control mb-3" placeholder="Product Name"/>
    
    <input type="number" name="price" class="form-control mb-3" placeholder="Price $$"/>
    
    <textarea class="form-control mb-3" name="description" rows="4" placeholder="Description"></textarea>
    
 

    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Save
        </button>
    </div>


</form>


@endsection