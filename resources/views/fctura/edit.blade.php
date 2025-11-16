<x-app-layout>
    <div class="max-w-md mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Editar factura</h1>

        <form action="{{ route('fctura.update', $fctura) }}" method="POST" class="space-y-4">
            @csrf @method('PUT')

            <div>
                <label class="block font-medium">ID cliente</label>
                <input type="number" name="cliente_id" value="{{ $fctura->cliente_id }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Fecha</label>
                <input type="date" step="0.01" name="fecha" value="{{ $fctura->fecha }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Total</label>
                <input type="number" name="total" value="{{ $fctura->total }}" class="w-full border rounded p-2">
            </div>

            <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Actualizar</button>
        </form>
    </div>
</x-app-layout>