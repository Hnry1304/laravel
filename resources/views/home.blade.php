@extends('Layout.index')

@section('content')
  <button class="h-12 w-48 bg-slate-500 rounded-xl m-4">
    <a href="{{ url("/agregar") }}" class="text-white  block p-3 rounded-xl">Agregar Prducto</a>
  </button>

@endsection