@extends('Layout.index')

@section('content')
  <button class="h-12 w-48 bg-slate-500 rounded-xl m-4">
    <a href="{{ url("/") }}" class="text-white  block p-3 rounded-xl">Home</a>
  </button>

  <div class="bg-slate-400 h-full ">
    <form action="" method="post">
      <input type="text" name="nombre">
      <input type="text" name="descripcion">
      <input type="text" name="precio">
      <input type="text" name="cantidadDisponible">
  
      <input type="submit" value="Agregar">
    </form>
  </div>

@endsection