@extends('Layout.index')

@section('content')
    <button class="h-12 w-48 bg-slate-500 rounded-xl m-4">
        <a href="{{ url('/') }}" class="text-white  block p-3 rounded-xl">Home</a>
    </button>

    <button class="h-12 w-48 bg-slate-500 rounded-xl m-4">
        <a href="{{ url('/vistaProductos') }}" class="text-white  block p-3 rounded-xl">back</a>
    </button>


    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre Producto
                    </th>

                    @foreach ($info as $item)
                        @if ($item->producto == 'playera' || $item->producto == 'sudadera')
                            <th scope="col" class="px-6 py-3">
                                Talla
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Color
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Genero
                            </th>
                        @endif
                        @break
                    @endforeach

                    <th scope="col" class="px-6 py-3">
                        precio
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Cantidad Disponible
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach ($info as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                        <td class="px-6 py-4">
                            {{ $item->producto }}
                        </td>

                        @if ($item->producto == 'playera' || $item->producto == 'sudadera')
                            <td class="px-6 py-4">
                                {{ $item->talla }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->color }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->genero }}
                            </td>
                        @endif

                        <td class="px-6 py-4">
                            {{ $item->precio }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->cantidadDisponible }}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
