<x-app-layout>
    <div class="max-w-md mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Editar producto</h1>

        <form action="{{ route('productos.update', $producto) }}" method="POST" class="space-y-4">
            @csrf @method('PUT')

            <div>
                <label class="block font-medium">Nombre</label>
                <input type="text" name="nombre" value="{{ $producto->nombre }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Descripción</label>
                <input type="text" name="descripcion" value="{{ $producto->descripcion }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Precio</label>
                <input type="number" min="0" step="0.01" name="precio" value="{{ $producto->precio }}" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block font-medium">Disponible</label>
                <input type="number" min="0" name="stock" value="{{ $producto->stock }}" class="w-full border rounded p-2">
            </div>

            <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Actualizar</button>
        </form>
    </div>
</x-app-layout>