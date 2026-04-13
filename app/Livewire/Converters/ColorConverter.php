<?php

namespace App\Livewire\Converters;

use Livewire\Component;

class ColorConverter extends Component
{
    public string $value = '#000000';

    public string $from = 'HEX';
    public string $to = 'RGB';

    public string $result = '0, 0, 0';

    public function updatedValue()
    {
        $this->convert();
    }

    public function updatedFrom()
    {
        $this->convert();
    }

    public function updatedTo()
    {
        $this->convert();
    }

    public function convert()
    {
        if ($this->from === 'HEX' && $this->to === 'RGB') {
            $this->result = $this->hexToRgb($this->value);
        }

        if ($this->from === 'RGB' && $this->to === 'HEX') {
            $this->result = $this->rgbToHex($this->value);
        }

        if ($this->from === $this->to) {
            $this->result = $this->value;
        }
    }

    private function hexToRgb($hex): string
    {
        $hex = ltrim($hex, '#');

        if (strlen($hex) === 3) {
            $hex = implode('', array_map(fn($c) => $c . $c, str_split($hex)));
        }

        return implode(', ', [
            hexdec(substr($hex, 0, 2)),
            hexdec(substr($hex, 2, 2)),
            hexdec(substr($hex, 4, 2)),
        ]);
    }

    private function rgbToHex(string $rgb): string
    {
        $parts = preg_split('/[\s,]+/', trim($rgb));

        if (count($parts) !== 3) {
            return '#000000'; // fallback instead of crash
        }

        [$r, $g, $b] = $parts;

        return sprintf("#%02X%02X%02X", $r, $g, $b);
    }

    public function getPreviewColorProperty(): string
    {
        return match ($this->from) {
            'HEX' => $this->value ?: '#000000',
            'RGB' => $this->rgbToHex($this->value),
            default => '#000000',
        };
    }
    public function render()
    {
        return view('livewire.converters.color-converter');
    }
}
