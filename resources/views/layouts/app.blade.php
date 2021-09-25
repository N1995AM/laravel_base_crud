<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post CRUD</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    {{-- <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet"/>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script> --}}

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>

<body>
    <div class="mt-5">
        <nav aria-label="breadcrumb">
            <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
                <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                    <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="#">
                        <span class="sr-only">Workflow</span>
                        <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg">
                    </a>
                    <div class="-mr-2 flex items-center md:hidden">
                        <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        </button>
                    </div>
                    </div>
                </div>
                <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
                    <a href="{{ route('products.index') }}">Home</a>
    
                    <a href="{{ route('products.create') }}">Create</a>
    
                    <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Marketplace</a>
    
                    <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Company</a>
    
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Log in</a>
                </div>
                </nav>
            </div>


        </nav>
        @yield('content')
    </div>
</body>
</html>