<?php

namespace App\Livewire\Converters;

use Livewire\Component;
use Illuminate\Support\Number;

class TimeConverter extends Component
{
    public $value = 1;
    public $from = 'second';
    public $to = 'minute';
    public $result = 0;

    public array $units = [
        'second' => 1,
        'millisecond' => 0.001,
        'microsecond' => 0.000001,
        'nanosecond' => 0.000000001,
        'picosecond' => 0.000000000001,
        'minute' => 60,
        'hour' => 3600,
        'day' => 86400,
        'week' => 604800,
        'month' => 2628000,      // average
        'year' => 31556926,      // average
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

        $seconds = $this->value * $this->units[$this->from];

        $raw = $seconds / $this->units[$this->to];


        $this->result = Number::format($raw, maxPrecision: 10);
    }

    public function render()
    {
        return view('livewire.converters.time-converter');
    }
}
