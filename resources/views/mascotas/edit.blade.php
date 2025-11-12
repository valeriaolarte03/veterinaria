<x-app-layout>
    <div class="max-w-md mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Editar mascota</h1>

        <form action="{{ route('mascotas.update', $mascota) }}" method="POST" class="space-y-4">
            @csrf @method('PUT')

            <div>
                <label class="block font-medium">Nombre</label>
                <input type="text" name="nombre" value="{{ $mascota->nombre }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">fecha nacimiento</label>
                <input type="date" name="fecha_nacimiento" value="{{ $mascota->fecha_nacimiento }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Sexo</label>
                <input type="text" step="0.01" name="sexo" value="{{ $mascota->sexo }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label for="cliente_id" class="block text-sm font-medium text-gray-700">Nombre dueño</label>
                <select name="cliente_id" id="cliente_id"
                    class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
                    <option value="">Seleccione al dueño</option>
                    @foreach($clientes as $cliente)    
                        <option value="{{ $cliente->id }}" 
                            {{ old('cliente_id', $mascota->cliente_id ?? '') == $cliente->id ? 'selected' : '' }}>
                            {{ $cliente->nombre }}
                        </option>
                    @endforeach
                </select>
                @error('cliente_id')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="raza_id" class="block text-sm font-medium text-gray-700">Raza mascota</label>
                <select name="raza_id" id="raza_id"
                    class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
                    <option value="">Seleccione la raza</option>
                    @foreach($razas as $raza)    
                        <option value="{{ $raza->id }}" 
                            {{ old('raza_id', $mascota->raza_id ?? '') == $raza->id ? 'selected' : '' }}>
                            {{ $raza->nombre }}
                        </option>
                    @endforeach
                </select>
                @error('raza_id')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Actualizar</button>
        </form>
    </div>
</x-app-layout>