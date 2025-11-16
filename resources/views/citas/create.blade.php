<x-app-layout>
    <div class="max-w-md mx-auto py-8">

        <h1 class="text-2xl font-bold mb-4">Nueva cita</h1>

        <form action="{{ route('citas.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block font-medium mb-1">Nombre del paciente</label>
                <select name="mascota_id" class="w-full border rounded p-2" required>
                    <option value="">Selecione nombre de mascota</option>
                    @foreach($mascotas as $mascota)
                        <option value="{{ $mascota->id }}">{{ $mascota->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block font-medium">Fecha cita</label>
                <input type="date" step="0.01" name="fecha_cita" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Motivo</label>
                <input type="text" name="motivo" class="w-full border rounded p-2" required>
            </div>

           <div>
                <label class="block font-medium">Estado</label>
                <select name="estado" class="w-full border rounded p-2" required>
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>


            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
        </form>
    </div>
</x-app-layout>