<?php

namespace App\Livewire\Converters;

use Livewire\Component;
use Illuminate\Support\Number;

class TemperatureConverter extends Component
{
    public $value = 1;
    public $from = 'celsius';
    public $to = 'fahrenheit';
    public $result = 0;

    /*
     * Temperature cannot be converted using simple multiplication.
     * Instead, we normalize everything through Celsius as the base unit.
     */
    public array $units = [
        'celsius' => 'Celsius (°C)',
        'fahrenheit' => 'Fahrenheit (°F)',
        'kelvin' => 'Kelvin (K)',
    ];

    public function updated($field)
    {
        $this->convert();
    }

    public function mount()
    {
        $this->convert();
    }

    public function convert()
    {
        if (!array_key_exists($this->from, $this->units) || !array_key_exists($this->to, $this->units)) {
            $this->result = 0;
            return;
        }

        // Step 1 — Convert FROM selected unit TO Celsius
        $celsius = match ($this->from) {
            'celsius' => $this->value,
            'fahrenheit' => ($this->value - 32) * 5 / 9,
            'kelvin' => $this->value - 273.15,
        };

        // Step 2 — Convert FROM Celsius TO target unit
        $raw = match ($this->to) {
            'celsius' => $celsius,
            'fahrenheit' => ($celsius * 9 / 5) + 32,
            'kelvin' => $celsius + 273.15,
        };

        $this->result = Number::format($raw, maxPrecision: 10);
    }

    public function render()
    {
        return view('livewire.converters.temperature-converter');
    }
}
