@props(['label', 'name'])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-black/10 border border-black/10 px-5 py-4 w-full',
        'value' => old($name),
        'cols' => '40',
        'rows' => '5'
    ];
@endphp

<x-forms.field :$label :$name>
    <textarea {{ $attributes($defaults) }}></textarea>
</x-forms.field>

