@extends('Layout.index')

@section('content')
  @include('complements.navbar')

  <div class="hidden-options">
    <button class="h-12 w-48 bg-slate-500 rounded-xl m-4">
      <a href="{{ url('/listar/sudadera') }}" class="text-white  block p-3 rounded-xl">Sudaderas</a>
    </button>
    <button class="h-12 w-48 bg-slate-500 rounded-xl m-4">
      <a href="{{ url('listar/playera') }}" class="text-white  block p-3 rounded-xl">Playeras</a>
    </button>
    <button class="h-12 w-48 bg-slate-500 rounded-xl m-4">
      <a href="{{ url('listar/gorra') }}" class="text-white  block p-3 rounded-xl">Gorras</a>
    </button>
    <button class="h-12 w-48 bg-slate-500 rounded-xl m-4">
      <a href="{{ url('listar/taza') }}" class="text-white  block p-3 rounded-xl">Tazas</a>
    </button>
  
  </div>  
@endsection