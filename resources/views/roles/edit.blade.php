<x-app-layout>
    <div class="max-w-md mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Editar rol</h1>

        <form action="{{ route('rol.update', $rol) }}" method="POST" class="space-y-4">
            @csrf @method('PUT')

            <div>
                <label class="block font-medium">Nombre</label>
                <input type="text" name="nombre" value="{{ $rol->nombre }}" class="w-full border rounded p-2" required>
            </div>

            <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Actualizar</button>
        </form>
    </div>
</x-app-layout>