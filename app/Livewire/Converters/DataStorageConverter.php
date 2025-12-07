<?php

namespace App\Livewire\Converters;

use Livewire\Component;

class DataStorageConverter extends Component
{
    public $value = 1;
    public $from = 'byte';
    public $to = 'kilobyte';
    public $result = 0;

    /*
     * For data storage, conversions are consistent powers of 1024.
     * We'll normalize everything to bytes, convert, then output the result.
     */
    public array $units = [
        'byte' => 1,
        'kilobyte' => 1024,
        'megabyte' => 1024 ** 2,
        'gigabyte' => 1024 ** 3,
        'terabyte' => 1024 ** 4,
        'petabyte' => 1024 ** 5,
    ];

    public function mount()
    {
        $this->convert();
    }

    public function updated($property)
    {
        if (in_array($property, ['value', 'from', 'to'])) {
            $this->convert();
        }
    }

    public function convert()
    {
        if (!is_numeric($this->value)) {
            $this->result = 0;
            return;
        }

        // Step 1: convert input value -> bytes
        $bytes = $this->value * $this->units[$this->from];

        // Step 2: convert bytes -> target unit
        $this->result = $bytes / $this->units[$this->to];
    }

    public function render()
    {
        return view('livewire.converters.data-storage-converter');
    }
}
