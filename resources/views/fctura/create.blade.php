<x-app-layout>
    <div class="max-w-md mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Nueva factura</h1>

        <form action="{{ route('fctura.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block font-medium">ID cliente</label>
                <input type="number" name="cliente_id" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Fecha</label>
                <input type="date" step="0.01" name="fecha" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Total</label>
                <input type="number" name="total" class="w-full border rounded p-2" required>
            </div>

            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
        </form>
    </div>
</x-app-layout>