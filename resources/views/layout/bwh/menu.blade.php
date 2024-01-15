<menu :class="{
    'translate-x-0':
        !mobileToggle
}">
    <ul class="flex gap-5 flex-col items-start justify-start pt-10 lg:pt-0 lg:flex-row lg:items-center">
        <li>
            <x-nav-link route="{{ route('home') }}" :active="request()->routeIs('home')" />
        </li>
        <li>
            <x-nav-link label="tentang kami" route="{{ route('tentang.kami') }}" :active="request()->routeIs('tentang-kami')" />
        </li>
        <li>
            <x-nav-dropdown label="informasi & regulasi" :active="request()->routeIs('ir.*')">
                @foreach ($categories as $item)
                    <x-nav-dropdown-item label="{{ $item->nama }}"
                        route="{{ route('ir.index') }}?kategori={{ $item->id }}" :active="request()->routeIs('ir.*')" />
                @endforeach
            </x-nav-dropdown>
        </li>
        <li>
            <x-nav-dropdown label="Lainnya" :active="false">
                <x-nav-dropdown-item label="Artikel" route="{{ route('artikel.index') }}" :active="request()->routeIs('ir.*')" />
            </x-nav-dropdown>
        </li>
        <li>
            <a href="{{ route('bwh.index') }}">
                <img src="{{ Vite::asset('resources/images/bwh.webp') }}" alt="bwh-logo" width="100" height="60"
                    class="h-auto w-24">
            </a>
        </li>
    </ul>
</menu>
