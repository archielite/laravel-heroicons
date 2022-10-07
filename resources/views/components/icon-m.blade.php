@props([
    'icon',
    'class'         => 'w-5 h-5',
    'fill'          => 'currentColor',
    'viewBox'       => '20 20',
    'strokeWidth'   => '',
    'stroke'        => ''
])

<svg
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 {{ $viewBox }}"
    fill="{{ $fill }}"
    stroke-width="{{ $strokeWidth }}"
    stroke="{{ $stroke }}"
    class="{{ $class }}"
    {{ $attributes }}
>
    @includeIf('heroicons::components.icons.m-'.$icon)
</svg>
