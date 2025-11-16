<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Citas</h1>
            <a href="{{ route('citas.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Nueva
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
                    <th class="p-3 text-left">Nombre paciente</th>                    
                    <th class="p-3 text-left">Fecha cita</th>
                    <th class="p-3 text-left">Motivo</th>
                    <th class="p-3 text-left">Estado</th>
                    <th class="p-3 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($citas as $cita)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="p-3">{{ $cita->id }}</td>
                        <td class="p-3">{{ $cita->mascota?->nombre ?? 'Sin nombre' }}</td>
                        <td class="p-3">{{ $cita->fecha_cita }}</td>
                        <td class="p-3">{{ $cita->motivo}}</td>
                        <td class="p-3">{{ $cita->estado == 1 ? "Activo" : "Inactivo"}}</td>
                        
                        <td class="p-3 text-center">
                            <a href="{{ route('citas.edit', $cita) }}" class="text-yellow-600 hover:underline mr-2">Editar</a>
                            <form action="{{ route('citas.destroy', $cita) }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('¿Eliminar esta Cita?')" class="text-red-600 hover:underline">
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