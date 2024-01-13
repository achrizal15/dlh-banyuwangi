<menu x-data="{ name: 123 }">
    <ul class="flex gap-5 items-center">
        <li>
            <x-nav-link route="{{ route('home') }}" :active="request()->routeIs('home')" />
        </li>
        <li>
            <x-nav-link label="tentang kami" route="{{ route('tentang.kami') }}" :active="request()->routeIs('tentang-kami')" />
        </li>
        <li>
            <x-dropdown label="informasi & regulasi" :active="request()->routeIs('ir.*')">
                @foreach ($categories as $item)
                    <x-dropdown-item label="{{ $item->nama }}"
                        route="{{ route('ir.index') }}?kategori={{ $item->id }}" :active="request()->routeIs('ir.*')" />
                @endforeach
            </x-dropdown>
        </li>
        <li>
            <x-dropdown label="Lainnya" :active="false">
                <x-dropdown-item label="Artikel" route="{{ route('artikel.index') }}?kategori={{ $item->id }}"
                    :active="request()->routeIs('ir.*')" />
            </x-dropdown>
        </li>
        <li>
            <a href="{{ route('bwh.index') }}">
                <img src="{{ Vite::asset('resources/images/bwh.webp') }}" alt="bwh-logo" width="100" height="60"
                    class="h-auto w-24">
            </a>
        </li>
    </ul>
</menu>
