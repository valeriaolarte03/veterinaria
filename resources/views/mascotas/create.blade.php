<x-app-layout>
    <div class="max-w-md mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Nueva mascota</h1>

        <form action="{{ route('mascotas.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block font-medium">Nombre</label>
                <input type="text" name="nombre" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">fecha nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Sexo</label>
                <input type="text" step="0.01" name="sexo" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Id cliente</label>
                <input type="number" step="0.01" name="cliente_id" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Id raza</label>
                <input type="number" name="raza_id" class="w-full border rounded p-2" required>
            </div>

            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
        </form>
    </div>
</x-app-layout>