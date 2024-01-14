@props([
    'route' => '',
    'label' => 'Beranda',
    'active' => false,
])
<li class="min-w-max mr-5">
    <x-nav-link label="{{ $label }}" route="{{ $route }}" :active="$active" />
</li>
