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
                <label class="block font-medium mb-1">Dueño</label>
                <select name="id_cliente" class="w-full border rounded p-2" required>
                    <option value="">Selecione nombre</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block font-medium mb-1">Raza</label>
                <select name="id_raza" class="w-full border rounded p-2" required>
                    <option value="">Selecione la raza</option>
                    @foreach($razas as $raza)
                        <option value="{{ $raza->id }}">{{ $raza->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
        </form>
    </div>
</x-app-layout>