<x-app-layout>
    <div class="max-w-md mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Nuevo tratamiento</h1>

        <form action="{{ route('tratamientos.store') }}" method="POST" class="space-y-4">
            @csrf

            {{-- Selección de cita --}}
            <div>
                <label for="cita_id" class="block text-sm font-medium text-gray-700">Cita</label>
                <select name="cita_id" id="cita_id"
                    class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
                    <option value="">Seleccione una cita</option>
                    @foreach($citas as $cita)
                        <option value="{{ $cita->id }}" {{ old('cita_id') == $cita->id ? 'selected' : '' }}>
                            {{ $cita->id }} - {{ $cita->motivo }}
                        </option>
                    @endforeach
                </select>
                
            </div>

            {{-- Descripción --}}
            <div>
                <label class="block font-medium">Descripción</label>
                <input type="text" name="descripcion" value="{{ old('descripcion') }}" 
                       class="w-full border rounded p-2" required>
                
            </div>

            {{-- Medicamento --}}
            <div>
                <label class="block font-medium">Medicamento</label>
                <input type="text" name="medicamento" value="{{ old('medicamento') }}" 
                       class="w-full border rounded p-2">
                
            </div>

            {{-- Costo --}}
            <div>
                <label class="block font-medium">Costo</label>
                <input type="number" step="0.01" name="costo" value="{{ old('costo') }}" 
                       class="w-full border rounded p-2" required>
                
            </div>

            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
        </form>
    </div>
</x-app-layout>
