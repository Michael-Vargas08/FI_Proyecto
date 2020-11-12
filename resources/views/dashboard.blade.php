<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container fixed h-screen w-64 shadow-md bg-white">
        <div class="container m-8 h-64-auto w-3/4">
            <ol class="p-10 pt-1">
                <li class="p-6 pt-2 pb-4 pl-1">
                    <button id="inventario" class="text-gray-500 rounded border-blue-500 hover:bg-blue-500 hover:text-white p-4">Inventario</button>
                </li>
                <li class="p-6 pt-2 pb-4 pl-1">
                    <button class="text-gray-500 rounded border-blue-500 hover:bg-blue-500 hover:text-white p-4">Calendario</button>
                </li>
                <li class="p-6 pt-2 pb-4 pl-1">
                    <button class="text-gray-500 rounded border-blue-500 hover:bg-blue-500 hover:text-white p-4">Contactos</button>
                </li>
                <li class="p-6 pt-2 pb-4 pl-1">
                    <button class="text-gray-500 rounded border-blue-500 hover:bg-blue-500 hover:text-white p-4">Graficas</button>
                </li>
                <li class="p-6 pt-2 pb-4 pl-1">
                    <button class="text-gray-500 rounded border-blue-500 hover:bg-blue-500 hover:text-white p-4">Sucursales</button>
                </li>
                <li class="p-6 pt-2 pb-4 pl-1">
                    <button class="text-gray-500 rounded border-blue-500 hover:bg-blue-500 hover:text-white p-4">Herramientas</button>
                </li>
            </ol>
        </div>
    </div>

    <table class="table-auto border-separate border-2 border-blue-600 ml-80 mt-10 absolute">
        <thead>
            <tr>
                <th class="px-4 py-2 border-2">Title</th>
                <th class="px-4 py-2 border-2">Author</th>
                <th class="px-4 py-2 border-2">Views</th>
                <th class="px-4 py-2 border-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border px-4 py-2">Intro to CSS</td>
                <td class="border px-4 py-2">Adam</td>
                <td class="border px-4 py-2">858</td>
                <td class="border px-4 py-2">
                    <button>
                        Acciones
                    </button>
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Intro to CSS</td>
                <td class="border px-4 py-2">Adam</td>
                <td class="border px-4 py-2">858</td>
                <td class="border px-4 py-2">
                    <button>
                        Acciones
                    </button>
                </td>
            </tr>
        </tbody>
    </table>

   


    <!-- SCRIPTS PROJECT -->
    <script src="{{ asset('js/Main.js') }}"></script>
    <script src="{{ asset('js/chart.js') }}"></script>

</x-app-layout>
