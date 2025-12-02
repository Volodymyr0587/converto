<?php

namespace App\Livewire\Converters;

use Livewire\Component;

class LengthConverter extends Component
{
    public $value = 1;
    public $from = 'meter';
    public $to = 'kilometer';
    public $result = 0;

    public array $units = [
        'kilometer' => 1000,
        'meter' => 1,
        'centimeter' => 0.01,
        'millimeter' => 0.001,
        'micrometer' => 1e-6,
        'nanometer' => 1e-9,
        'mile' => 1609.344,
        'yard' => 0.9144,
        'foot' => 0.3048,
        'inch' => 0.0254,
    ];

    public function updated($field)
    {
        $this->convert();
    }

    public function convert()
    {
        if (!isset($this->units[$this->from]) || !isset($this->units[$this->to])) {
            $this->result = 0;
            return;
        }

        $meters = $this->value * $this->units[$this->from];
        $this->result = $meters / $this->units[$this->to];
    }

    public function render()
    {
        return view('livewire.converters.length-converter');
    }
}
