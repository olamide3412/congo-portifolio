@php
    $classes = ' p-1 shadow-sm bg-white rounded-xl  border border-transparent hover:border-secondary-500 group transition-colors duration-1000'
@endphp
<div  {{ $attributes(['class'=>$classes]) }}>

    {{$slot}}

</div>
