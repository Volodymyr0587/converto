<x-converter icon="color-swatch" title="Color Converter" :units="[
        'HEX' => 'HEX',
        'RGB' => 'RGB',
    ]" inputType="text"
    :value="$value" :from="$from" :to="$to" :result="$result" :previewColor="$this->previewColor" />