<x-app-layout>
    <div class="max-w-md mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Editar usuario</h1>

        <form action="{{ route('usuarios.update', $usuario) }}" method="POST" class="space-y-4">
            @csrf @method('PUT')

            <div>
                <label class="block font-medium">Nombre</label>
                <input type="text" name="name" value="{{ $usuario->name }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">email</label>
                <input type="text" step="0.01" name="email" value="{{ $usuario->email }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label for="id_rol" class="block text-sm font-medium text-gray-700">Rol</label>
                <select name="id_rol" id="id_rol"
                    class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
                    <option value="">Seleccione un rol</option>
                    @foreach($roles as $rol)    
                        <option value="{{ $rol->id }}" 
                            {{ old('id_rol', $usuario->id_rol ?? '') == $rol->id ? 'selected' : '' }}>
                            {{ $rol->nombre }}
                        </option>
                    @endforeach
                </select>
                @error('id_rol')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block font-medium">Fecha creación</label>
                <input type="text" name="fecha_creacion" value="{{ $usuario->fecha_creacion }}" class="w-full border rounded p-2">
            </div>

            <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Actualizar</button>
        </form>
    </div>
</x-app-layout>