@props(['name'])

<span {{ $attributes->merge(['class' => 'inline-block svg-icon h-6 w-6']) }}>
    @includeIf('heroicons::components.icons.' . $name)
</span>
