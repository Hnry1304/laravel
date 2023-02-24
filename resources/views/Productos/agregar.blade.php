@extends('Layout.index')

@section('content')
  <button class="h-12 w-48 bg-slate-500 rounded-xl m-4">
    <a href="{{ url("/") }}" class="text-white  block p-3 rounded-xl">Home</a>
  </button>

  <div class="bg-slate-400 h-full ">
    <form action="" method="post">

      <input type="radio" name="producto" vadlue="playera" class="shirt">Playera
      <input type="radio" name="producto" value="sudadera" class="shirt">Sudadera
      <input type="radio" name="producto" value="tazas" class="others">Tazas
      <input type="radio" name="producto" value="gorras" class="others">Gorras
      <br>
      <div id="playera_sudadera" class="hidden">
        {{-- tallas unicamente se mostraran con las playeras o sudaderas --}}
        <input type="radio" name="talla" value="xs">XS
        <input type="radio" name="talla" value="s">S
        <input type="radio" name="talla" value="m">M
        <input type="radio" name="talla" value="l">L
        <br>
        {{-- colores unicamente se mostraran con las playeras o sudaderas --}}
        <input type="radio" name="color" value="blanco">Blanco
        <input type="radio" name="color" value="Negro">Negro
        <input type="radio" name="color" value="GrisJaspe">Gris Jaspe
        <input type="radio" name="color" value="NegroJaspe">Negro Jaspe
        <input type="radio" name="color" value="Royal">Royal
        <input type="radio" name="color" value="VerdeBosque">Verde Bosque
        <input type="radio" name="color" value="Marron">Marron
        <input type="radio" name="color" value="Rojo">Rojo
        <input type="radio" name="color" value="Marino">Marino
        <br>
        {{-- genero unicamente se mostraran con las playeras o sudaderas --}}
        <input type="radio" name="genero" value="Dama">Dama
        <input type="radio" name="genero" value="Dama">Caballero
      </div>
      
      <input type="text" name="price" placeholder="precio">

      <input type="text" name="cantidad" placeholder="cantidad">

      <input type="submit" value="Agregar">
    </form>
  </div>

@endsection