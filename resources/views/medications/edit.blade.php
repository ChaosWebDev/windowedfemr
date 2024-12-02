<x-app>
    <main id="medication" class='edit'>
        <header>
            <h1>Update Medication</h1>
        </header>

        <form action="{{ route('medication.update', $medication) }}" method="post">
            @csrf
            @method('PUT')

            <div class="column">
                <label for="status">Status</label>
                <select name="status" id="status">
                    <option value="active" {{ $medication->status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ $medication->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    <option value="on hold" {{ $medication->status == 'on hol' ? 'selected' : '' }}>On Hold</option>
                    <option value="stopped" {{ $medication->status == 'stopped' ? 'selected' : '' }}>Stopped</option>
                    <option value="completed" {{ $medication->status == 'completed' ? 'selected' : '' }}>Completed
                    </option>
                </select>
            </div>

            <div class="column">
                <label for="rxid">Rx ID</label>
                <input type="text" name="rxid" id="rxid" value="{{ old('rxid', $medication->rxid) }}">
                @error('rxid')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="column">
                <label for="formulary" class='required'>Formulary</label>
                <input type="text" name="formulary" id="formulary"
                    value="{{ old('formulary', $medication->formulary) }}" class='mb'>
                @error('formulary')
                    <div class="error">{{ $message }}</div>
                @enderror

                <label for="brand">Brand</label>
                <input type="text" name="brand" id="brand" value="{{ old('brand', $medication->brand) }}"
                    class='mb'>
                @error('brand')
                    <div class="error">{{ $message }}</div>
                @enderror

                <label for="display" class='required'>Display</label>
                <input type="text" name="display" id="display" value="{{ old('display', $medication->display) }}">
                @error('display')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="column">
                <label for="type" class='required'>Type</label>
                <input type="text" name="type" id="type" value="{{ old('type', $medication->type) }}">
                @error('type')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="column">
                <label for="dosage" class='required'>Dosage</label>
                <input type="text" name="dosage" id="dosage" value="{{ old('dosage', $medication->dosage) }}">
                @error('dosage')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="column">
                <label for="instructions" class='required'>Instructions</label>
                <input type="text" name="instructions" id="instructions"
                    value="{{ old('instructions', $medication->instructions) }}">
                @error('instructions')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="column">
                <label for="prescriber">Prescriber</label>
                <input type="text" name="prescriber" id="prescriber" list='prescribers'
                    value="{{ old('prescriber', $medication->prescriber) }}">
                @error('prescriber')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="column">
                <label for="notes">Notes</label>
                <textarea name="notes" id="notes">{{ old('notes', $medication->notes) }}</textarea>
                @error('notes')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <input type="submit" value="Update Medication">
        </form>


        <datalist id="prescribers"></datalist>
    </main>
</x-app>
