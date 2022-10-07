@props([
    'icon',
    'class'       => 'w-6 h-6',
    'fill'        => 'currentColor',
    'viewBox'     => '24 24',
    'strokeWidth' => '',
    'stroke'      => '',
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
    @includeIf('heroicons::components.icons.24-solid-' . $icon)
</svg>
