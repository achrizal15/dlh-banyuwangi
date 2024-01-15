@props(['title' => '', 'detail'])
<div class="group hover:bg-utama-300 px-5 rounded-md transition xl:px-16 py-8 relative">
    {{ $slot }}
    <div class="flex flex-col text-utama-100 gap-3">
        <h3 class="text-base xl:text-lg font-semibold">{{ $title }}</h3>
        <p class="text-xs xl:text-base font-thin">{{ $detail }}</p>
    </div>

    <div class="absolute top-20 bottom-20 right-0 w-[1px] bg-utama-100 group-hover:hidden"></div>
</div>
