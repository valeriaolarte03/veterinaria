<x-app-layout>
    <div class="max-w-md mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Editar cliente</h1>

        <form action="{{ route('clientes.update', $cliente) }}" method="POST" class="space-y-4">
            @csrf @method('PUT')

            <div>
                <label class="block font-medium">Nombre</label>
                <input type="text" name="nombre" value="{{ $cliente->nombre }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Teléfono</label>
                <input type="text" name="telefono" value="{{ $cliente->telefono }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Correo electónico</label>
                <input type="text" step="0.01" name="email" value="{{ $cliente->email }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Dirección</label>
                <input type="text" name="direccion" value="{{ $cliente->direccion }}" class="w-full border rounded p-2" required>
            </div>
            <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Actualizar</button>
        </form>
    </div>
</x-app-layout>