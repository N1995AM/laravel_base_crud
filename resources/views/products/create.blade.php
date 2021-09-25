@extends('layouts.app')

@section('content')

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


<form action="{{ route('products.store') }}" method="post" >
    @csrf

    <div class="flex justify-center">
        
        <div class="w-5/6 my-5">
            <p class="text-3xl font-sans tracking-tighter">Products Create</p>

            <input type="text" name="name" class="focus:border-light-blue-500 focus:ring-1 focus:ring-light-blue-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-10 p-4 my-3" placeholder="Product Name"/>
            <input type="number" name="price" class="focus:border-light-blue-500 focus:ring-1 focus:ring-light-blue-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-10 p-4 my-3" placeholder="Price $$"/>   
            <textarea class="focus:border-light-blue-500 focus:ring-1 focus:ring-light-blue-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2  p-4 my-3" name="description" rows="4" placeholder="Description"></textarea>
        </div> 
    </div>
    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Save
        </button>
    </div>
</form>


@endsection