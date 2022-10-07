@props([
    'icon',
    'class'       => 'w-6 h-6',
    'fill'        => 'none',
    'viewBox'     => '24 24',
    'strokeWidth' => '1.5',
    'stroke'      => 'currentColor',
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
    @includeIf('heroicons::components.icons.20-outline-' . $icon)
</svg>
