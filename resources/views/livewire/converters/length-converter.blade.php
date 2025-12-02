<div class="space-y-4 p-6 max-w-lg mx-auto">

    <h2 class="text-xl font-bold">Length Converter</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div>
            <label class="text-sm">Value</label>
            <input type="number" step="any" wire:model.live="value"
                   class="w-full border rounded p-2">
        </div>

        <div>
            <label class="text-sm">From</label>
            <select wire:model.live="from" class="w-full border rounded p-2">
                @foreach ($units as $unit => $factor)
                    <option value="{{ $unit }}">{{ ucfirst($unit) }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="text-sm">To</label>
            <select wire:model.live="to" class="w-full border rounded p-2">
                @foreach ($units as $unit => $factor)
                    <option value="{{ $unit }}">{{ ucfirst($unit) }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="mt-16 text-lg font-semibold">
        Result: {{ $result }}
    </div>

</div>

