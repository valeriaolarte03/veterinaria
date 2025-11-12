<x-app-layout>
    <div class="max-w-md mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Nuevo usuario</h1>

        <form action="{{ route('usuarios.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block font-medium">Nombre</label>
                <input type="text" name="name" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">email</label>
                <input type="text" step="0.01" name="email" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">id rol</label>
                <input type="number" name="id_rol" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">fecha creación</label>
                <input type="date" name="fecha_creacion" class="w-full border rounded p-2">
            </div>

            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
        </form>
    </div>
</x-app-layout>