@props([
    'label' => 'informasi & regulasi',
    'active' => false,
])
<div class="relative" x-data="{ open: false }">
    <div x-on:click="open=true">
        <x-nav-link
            label="{{ $label }} <svg xmlns='http://www.w3.org/2000/svg' width='15' height='15' viewBox='0 0 15 15' fill='none'>
           <path d='M3.75 5.625L7.5 9.375L11.25 5.625' stroke='#292828' stroke-width='2' stroke-linecap='round'
               stroke-linejoin='round' />
       </svg>"
            route="#" :active="$active" />
    </div>
    <ul x-show="open" x-on:click.outside="open=false" x-transition
        class="lg:absolute top-16 rounded-md bg-utama-100 p-5 gap-2 flex flex-col">
        {{ $slot }}
    </ul>
</div>
