@props([
    'prefix' => 'Feeds',
    'suffix' => 'Instagram',
    'align' => 'left',
])
<div class="flex items-center {{ $align == 'left' ? 'justify-start' : 'justify-center' }}">
    <div class="relative pb-10">
        <h2 class="lg:text-3xl text-2xl font-semibold text-hitam {{ $align == 'left' ? 'text-start' : 'text-center' }}">
            {{ $prefix }} <span class="text-utama-300">{{ $suffix }}</span>
        </h2>
        <img width="100%" height="60" class="h-auto w-[4rem] absolute left-0 -top-5"
            src="{{ Vite::asset('resources/images/gajah-oling.webp') }}" alt="gajah oling">
    </div>
</div>
