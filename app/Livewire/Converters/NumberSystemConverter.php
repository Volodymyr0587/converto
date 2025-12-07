<?php

namespace App\Livewire\Converters;

use Livewire\Component;

// class NumberSystemConverter extends Component
// {
//     public $value = 1;
//     public $from = 'decimal';
//     public $to = 'binary';
//     public $result = '';

//     /*
//      * List of supported number systems and their bases.
//      */
//     public array $units = [
//         'binary'  => 2,
//         'octal'   => 8,
//         'decimal' => 10,
//         'hex'     => 16,
//     ];

//     public function mount()
//     {
//         $this->convert();
//     }

//     public function updated($property)
//     {
//         if (in_array($property, ['value', 'from', 'to'])) {
//             $this->convert();
//         }
//     }

//     public function convert()
//     {
//         $input = trim($this->value ?? '');

//         if ($input === '') {
//             $this->result = '';
//             return;
//         }

//         // Validate input
//         if (!$this->isValidInput($input, $this->from)) {
//             $this->result = 'Invalid number for selected base.';
//             return;
//         }

//         // Step 1: convert FROM base → decimal
//         $decimal = intval($input, $this->units[$this->from]);

//         // Step 2: convert decimal → target base
//         $this->result = $this->decimalToBase($decimal, $this->to);
//     }

//     private function decimalToBase(int $decimal, string $to): string
//     {
//         return match ($to) {
//             // 'binary'  => decbin($decimal),
//             'binary'  => sprintf('%08b', $decimal),
//             'octal'   => decoct($decimal),
//             'decimal' => (string) $decimal,
//             'hex'     => strtoupper(dechex($decimal)),
//         };
//     }

//     private function isValidInput(string $number, string $base): bool
//     {
//         return match ($base) {
//             'binary'  => preg_match('/^[01]+$/', $number),
//             'octal'   => preg_match('/^[0-7]+$/', $number),
//             'decimal' => preg_match('/^[0-9]+$/', $number),
//             'hex'     => preg_match('/^[0-9A-Fa-f]+$/', $number),
//             default   => false
//         };
//     }

//     public function render()
//     {
//         return view('livewire.converters.number-system-converter');
//     }
// }



class NumberSystemConverter extends Component
{
    public $value = 1;
    public $from = 'decimal';
    public $to = 'binary';
    public $result = '';

    public array $units = [
        'binary'  => 2,
        'octal'   => 8,
        'decimal' => 10,
        'hex'     => 16,
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
        $input = trim($this->value ?? '');

        if ($input === '') {
            $this->result = '';
            return;
        }

        if (!$this->isValidInput($input, $this->from)) {
            $this->result = 'Invalid number for selected base.';
            return;
        }

        // Step 1: convert FROM base to decimal
        $decimal = intval($input, $this->units[$this->from]);

        // Step 2: convert decimal to target base
        $converted = $this->decimalToBase($decimal, $this->to);

        // Step 3: pretty binary grouping
        if ($this->to === 'binary') {
            $converted = $this->prettyBinary($converted);
        }

        $this->result = $converted;
    }

    private function decimalToBase(int $decimal, string $to): string
    {
        return match ($to) {
            'binary'  => decbin($decimal),
            'octal'   => decoct($decimal),
            'decimal' => (string) $decimal,
            'hex'     => strtoupper(dechex($decimal)),
        };
    }

    private function isValidInput(string $number, string $base): bool
    {
        return match ($base) {
            'binary'  => preg_match('/^[01]+$/', $number),
            'octal'   => preg_match('/^[0-7]+$/', $number),
            'decimal' => preg_match('/^[0-9]+$/', $number),
            'hex'     => preg_match('/^[0-9A-Fa-f]+$/', $number),
            default   => false
        };
    }

    private function prettyBinary(string $bin): string
    {
        // Pad left with leading zeros until length is multiple of 4
        $length = strlen($bin);
        $pad = (4 - ($length % 4)) % 4;

        if ($pad > 0) {
            $bin = str_repeat('0', $pad) . $bin;
        }

        // Split into 4-bit groups
        return trim(chunk_split($bin, 4, ' '));
    }

    public function render()
    {
        return view('livewire.converters.number-system-converter');
    }
}
