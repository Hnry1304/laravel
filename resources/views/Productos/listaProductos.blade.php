@extends('Layout.index')

@section('content')

    @include('complements.navbar')
    
    <button class="h-12 w-48 bg-slate-500 rounded-xl m-4">
        <a href="{{ url('/vistaProductos') }}" class="text-white  block p-3 rounded-xl">back</a>
    </button>

    @include('Productos.tablas')

@endsection
