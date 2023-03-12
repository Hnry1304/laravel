<div class="w-full bg-yellow-200 p-1">
    
    <div class="grid grid-flow-col-dense grid-cols-10">
        <div class="w-10 h-8 rounded-lg bg-green-400  col-span-3"></div>

        <p class="col-span-4 text-center font-extrabold text-3xl ">Cazzer</p>

        <button class="col-end-11" id="menu">
            <img src="img/icons/menu.png" class="w-8">
        </button>

    </div>
    
    <div class="hidden w-full mt-5 bg-orange-400 rounded-xl h-screen" id="menuOptions">
        <div class="">
            <a href="{{ url('/') }}" class="text-white  block p-3 rounded-xl">
                <p class="font-extrabold text-2xl hover:text-green-600">Home</p>
            </a>
        </div>

        <div class="">
            <a href="{{ url("/agregar") }}" class="text-white  block p-3 rounded-xl">
                <p class="font-extrabold text-2xl hover:text-green-600">Agregar Producto</p>
            </a>
        </div>
        
        <div class="">
            <a href="{{ url("/vistaProductos") }}" class="text-white  block p-3 rounded-xl">
                <p class="font-extrabold text-2xl hover:text-green-600">Ver Productos</p>
            </a>
        </div>
    </div>

</div>