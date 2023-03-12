<div>
    <h1>{{ $producto }}</h1>

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>

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
                    Cantidad Disponible
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach ($info as $item)

                @if ($item->cantidadDisponible <= 3)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

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
                            {{ $item->cantidadDisponible }}
                        </td>
                    </tr>    
                @endif
                
            @endforeach

        </tbody>
    </table>
    
</div>

<div>
    <h1>{{ $producto }}</h1>

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>

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
                    Cantidad Disponible
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach ($info as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

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
                        {{ $item->cantidadDisponible }}
                    </td>
                </tr> 
                
            @endforeach

        </tbody>
    </table>
    
</div>