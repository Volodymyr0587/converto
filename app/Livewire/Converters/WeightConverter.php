<?php

namespace App\Livewire\Converters;

use Livewire\Component;
use Illuminate\Support\Number;

class WeightConverter extends Component
{
    public $value = 1;
    public $from = 'gram';
    public $to = 'kilogram';
    public $result = 0;

    public array $units = [
        'kilogram' => 1000,
        'gram' => 1,
        'milligram' => 0.001,
        'metric ton' => 1000000,
        'long ton' => 1016046.08,
        'short ton' => 907184,
        'pound' => 453.592,
        'ounce' => 28.3495,
        'carat' => 0.2,
        'atomic mass unit' => 1.660540199E-24
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
        if (!isset($this->units[$this->from]) || !isset($this->units[$this->to])) {
            $this->result = 0;
            return;
        }

        $grams = $this->value * $this->units[$this->from];

        $raw = $grams / $this->units[$this->to];

        $this->result = Number::format($raw, maxPrecision: 10);
    }

    public function render()
    {
        return view('livewire.converters.weight-converter');
    }
}
