<x-app-layout>
    <div class="max-w-md mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Nuevo cliente</h1>

        <form action="{{ route('clientes.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block font-medium">Nombre</label>
                <input type="text" name="nombre" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Teléfono</label>
                <input type="text" name="telefono" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Correo electónico</label>
                <input type="text" step="0.01" name="email" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Dirección</label>
                <input type="text" name="direccion" class="w-full border rounded p-2" required>
            </div>

            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
        </form>
    </div>
</x-app-layout>