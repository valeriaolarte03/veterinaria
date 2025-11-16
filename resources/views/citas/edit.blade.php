<x-app-layout>
    <div class="max-w-md mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Editar cita</h1>

        <form action="{{ route('citas.update', $cita) }}" method="POST" class="space-y-4">
            @csrf @method('PUT')

            <div>
                <label for="mascota_id" class="block text-sm font-medium text-gray-700">Nombre del paciente</label>
                <select name="mascota_id" id="mascota_id"
                    class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
                    <option value="">Seleccione el nombre</option>
                    @foreach($mascotas as $mascota)    
                        <option value="{{ $mascota->id }}" 
                            {{ old('mascota_id', $cita->mascota_id ?? '') == $mascota->id ? 'selected' : '' }}>
                            {{ $mascota->nombre }}
                        </option>
                    @endforeach
                </select>
                @error('mascota_id')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block font-medium">Fecha cita</label>
                <input type="date" step="0.01" name="fecha_cita" value="{{ $cita->fecha_cita }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Motivo</label>
                <input type="text" name="motivo" value="{{ $cita->motivo }}" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block font-medium">Estado</label>
                <select name="estado" class="w-full border rounded p-2" required>
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>

            <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Actualizar</button>
        </form>
    </div>
</x-app-layout>