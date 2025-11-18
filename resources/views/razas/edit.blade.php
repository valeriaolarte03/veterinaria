<x-app-layout>
    <div class="max-w-md mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Editar raza</h1>

        <form action="{{ route('razas.update', $raza) }}" method="POST" class="space-y-4">
            @csrf @method('PUT')

            <div>
                <label class="block font-medium">Raza</label>
                <input type="text" name="name" value="{{ $raza->name }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label for="especie_id" class="block text-sm font-medium text-gray-700">Especie</label>
                <select name="especie_id" id="especie_id"
                    class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
                    <option value="">Seleccione una especie</option>
                    @foreach($especies as $especie)    
                        <option value="{{ $especie->id }}" 
                            {{ old('especie_id', $raza->especie_id ?? '') == $especie->id ? 'selected' : '' }}>
                            {{ $especie->nombre }}
                        </option>
                    @endforeach
                </select>
                @error('especie_id')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Actualizar</button>
        </form>
    </div>
</x-app-layout>