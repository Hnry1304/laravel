@extends('Layout.index')

@section('content')
  <button class="h-12 w-48 bg-slate-500 rounded-xl m-4">
    <a href="{{ url("/") }}" class="text-white  block p-3 rounded-xl">Home</a>
  </button>

  <div class="bg-slate-400 h-full ">
    <form action="agregarProducto" method="post">
      @csrf
      <input type="radio" name="producto" value="playera" class="shirt" {{ old('producto') == 'playera' ? 'checked='.' '.'checked' .'' : ' '}}>Playera
      <input type="radio" name="producto" value="sudadera" class="shirt" {{ old('producto') == 'sudadera' ? 'checked='.' '.'checked' .'' : ' '}}>Sudadera
      <input type="radio" name="producto" value="tazas" class="others">Tazas
      <input type="radio" name="producto" value="gorras" class="others">Gorras
      <br>
      <div id="playera_sudadera" class="hidden">
        {{-- tallas unicamente se mostraran con las playeras o sudaderas --}}
        <input type="radio" name="talla" value="xs" {{ old('talla') == 'xs' ? 'checked='.' '.'checked' .'' : ' '}}>XS
        <input type="radio" name="talla" value="s" {{ old('talla') == 's' ? 'checked='.' '.'checked' .'' : ' '}}>S
        <input type="radio" name="talla" value="m" {{ old('talla') == 'm' ? 'checked='.' '.'checked' .'' : ' '}}>M
        <input type="radio" name="talla" value="l" {{ old('talla') == 'l' ? 'checked='.' '.'checked' .'' : ' '}}>L
        @error('talla')
          <p> {{$message}} </p>
        @enderror
        <br>
        {{-- colores unicamente se mostraran con las playeras o sudaderas --}}
        <input type="radio" name="color" value="Blanco" {{ old('color') == 'Blanco' ? 'checked='.' '.'checked' .'' : ' '}}>Blanco
        <input type="radio" name="color" value="Negro" {{ old('color') == 'Negro' ? 'checked='.' '.'checked' .'' : ' '}}>Negro
        <input type="radio" name="color" value="GrisJaspe" {{ old('color') == 'GrisJaspe' ? 'checked='.' '.'checked' .'' : ' '}}>Gris Jaspe
        <input type="radio" name="color" value="NegroJaspe"{{ old('color') == 'NegroJaspe' ? 'checked='.' '.'checked' .'' : ' '}}>Negro Jaspe
        <input type="radio" name="color" value="Royal" {{ old('color') == 'Royal' ? 'checked='.' '.'checked' .'' : ' '}}>Royal
        <input type="radio" name="color" value="VerdeBosque" {{ old('color') == 'VerdeBosque' ? 'checked='.' '.'checked' .'' : ' '}}>Verde Bosque
        <input type="radio" name="color" value="Marron" {{ old('color') == 'Marron' ? 'checked='.' '.'checked' .'' : ' '}}>Marron
        <input type="radio" name="color" value="Rojo" {{ old('color') == 'Rojo' ? 'checked='.' '.'checked' .'' : ' '}}>Rojo
        <input type="radio" name="color" value="Marino" {{ old('color') == 'Marino' ? 'checked='.' '.'checked' .'' : ' '}}>Marino
        @error('color')
          <p> {{$message}} </p>
        @enderror
        <br>
        {{-- genero unicamente se mostraran con las playeras o sudaderas --}}
        <input type="radio" name="genero" value="Dama" {{ old('genero') == 'Dama' ? 'checked='.' '.'checked' .'' : ' '}}>Dama
        <input type="radio" name="genero" value="Caballero" {{ old('genero') == 'Caballero' ? 'checked='.' '.'checked' .'' : ' '}}>Caballero
        @error('genero')
          <p> {{$message}} </p>
        @enderror
      </div>
      
      <input type="text" name="precio" placeholder="precio">
      @error('precio')
        <p> {{$message}} </p>
      @enderror
      
      <input type="text" name="cantidad" placeholder="cantidad">
      @error('cantidad')
        <p> {{$message}} </p>
      @enderror
      <input type="submit" value="Agregar">
      
    </form>
  </div>

@endsection