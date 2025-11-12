<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">mascotas</h1>
            <a href="{{ route('mascotas.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Nuevo
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="min-w-full bg-white border border-gray-200 rounded shadow">
            <thead>
                <tr class="bg-gray-100">
                    <th class="p-3 text-left">ID</th>
                    <th class="p-3 text-left">Nombre mascota</th>
                    <th class="p-3 text-left">Fecha de nac.</th>
                    <th class="p-3 text-left">sexo</th>
                    <th class="p-3 text-left">Nombre dueño</th>
                    <th class="p-3 text-left">Raza mascota</th>
                    <th class="p-3 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mascotas as $mascota)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="p-3">{{ $mascota->id }}</td>
                        <td class="p-3">{{ $mascota->nombre }}</td>
                        <td class="p-3">{{ $mascota->fecha_nacimiento }}</td>
                        <td class="p-3">{{ $mascota->sexo }}</td>
                        <td class="p-3">{{ $mascota->cliente?->nombre ?? 'Sin dueño' }}</td>
                        <td class="p-3">{{ $mascota->raza?->nombre ?? 'Sin raza' }}</td>
                        <td class="p-3 text-center">
                            <a href="{{ route('mascotas.edit', $mascota) }}" class="text-yellow-600 hover:underline mr-2">Editar</a>
                            <form action="{{ route('mascotas.destroy', $mascota) }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('¿Eliminar este mascota?')" class="text-red-600 hover:underline">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>