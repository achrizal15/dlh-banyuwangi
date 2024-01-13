@props([
    'route' => '',
    'label' => 'Beranda',
    'active' => false,
])
<a href="{{ $route }}"
    class="uppercase text-sm font-semibold {{ $active ? 'text-utama-300' : 'text-hitam' }} flex items-center ">
    {!! $label !!}
</a>
