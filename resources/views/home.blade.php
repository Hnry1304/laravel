@extends('Layout.index')

@section('content')
  @include('complements.navbar')

  <div class="hidden-options">
    <button class="h-12 w-48 bg-slate-500 rounded-xl m-4">
      <a href="{{ url("/agregar") }}" class="text-white  block p-3 rounded-xl">Agregar Prducto</a>
    </button>
  
    <button class="h-12 w-48 bg-slate-500 rounded-xl m-4">
      <a href="{{ url("/vistaProductos") }}" class="text-white  block p-3 rounded-xl">Ver Productos</a>
    </button>
  </div>
@endsection