<x-app-layout>
    <div class="max-w-md mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Nueva raza</h1>

        <form action="{{ route('razas.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block font-medium">Raza</label>
                <input type="text" name="name" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium mb-1">especie</label>
                <select name="especie_id" class="w-full border rounded p-2" required>
                    <option value="">Seleccione una especie</option>
                    @foreach($especies as $especie)
                        <option value="{{ $especie->id }}">{{ $especie->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
        </form>
    </div>
</x-app-layout>