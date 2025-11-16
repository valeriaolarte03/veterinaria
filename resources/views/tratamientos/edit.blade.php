<x-app-layout>
    <div class="max-w-md mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Editar tratamiento</h1>

        <form action="{{ route('tratamientos.update', $tratamiento) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            {{-- Selección de cita --}}
            <div>
                <label for="cita_id" class="block text-sm font-medium text-gray-700">Cita</label>
                <select name="cita_id" id="cita_id"
                    class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
                    <option value="">Seleccione una cita</option>
                    @foreach($citas as $cita)    
                        <option value="{{ $cita->id }}" 
                            {{ old('cita_id', $tratamiento->cita_id) == $cita->id ? 'selected' : '' }}>
                            {{ $cita->id }} - {{ $cita->motivo }}
                        </option>
                    @endforeach
                </select>
                @error('cita_id')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Descripción --}}
            <div>
                <label class="block font-medium">Descripción</label>
                <input type="text" name="descripcion" 
                       value="{{ old('descripcion', $tratamiento->descripcion) }}" 
                       class="w-full border rounded p-2" required>
                
            </div>

            {{-- Medicamento --}}
            <div>
                <label class="block font-medium">Medicamento</label>
                <input type="text" name="medicamento" 
                       value="{{ old('medicamento', $tratamiento->medicamento) }}" 
                       class="w-full border rounded p-2">
                
            </div>

            {{-- Costo --}}
            <div>
                <label class="block font-medium">Costo</label>
                <input type="number" step="0.01" name="costo" 
                       value="{{ old('costo', $tratamiento->costo) }}" 
                       class="w-full border rounded p-2" required>
                
            </div>

            <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Actualizar</button>
        </form>
    </div>
</x-app-layout>
