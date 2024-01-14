<section class="pt-16 px-5 xl:px-16">
    <x-heading prefix="Feeds" suffix="Instagram" />
    <div class="grid xl:grid-cols-2 gap-5">
        <article class="flex flex-col items-center gap-5">
            <div class="grid grid-cols-2 md:grid-cols-3 gap-5">
                @foreach ($feeds as $item)
                    <div class="rounded-md overflow-hidden relative group">
                        @if ($item->media_type == 'VIDEO')
                            <iframe title="Vidio dlh {{ $item->media_id }}" height="390" width="390"
                                class="w-full h-full" src="{{ $item->media_url }}" frameborder="0">
                            </iframe>
                            <div
                                class="absolute bottom-16 right-0 group-hover:translate-x-0 lg:-translate-x-52 overflow-hidden transition-all duration-500 px-2 text-xs lg:text-sm transform flex gap-3 flex-col items-center justify-center">
                                <a class="text-center bg-utama-300 text-white hover:text-utama-100 hover:bg-utama-400 transition p-2 rounded-full text-sm lg:text-base font-medium"
                                    href="{{ $item->permalink }}" target="_blank" rel="noopener noreferrer"
                                    aria-label="goto instagram">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M17 2H7C4.23858 2 2 4.23858 2 7V17C2 19.7614 4.23858 22 7 22H17C19.7614 22 22 19.7614 22 17V7C22 4.23858 19.7614 2 17 2Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M16 11.3703C16.1234 12.2025 15.9812 13.0525 15.5937 13.7993C15.2062 14.5461 14.5931 15.1517 13.8416 15.53C13.0901 15.9082 12.2384 16.0399 11.4077 15.9062C10.5771 15.7726 9.80971 15.3804 9.21479 14.7855C8.61987 14.1905 8.22768 13.4232 8.09402 12.5925C7.96035 11.7619 8.09202 10.9102 8.47028 10.1587C8.84854 9.40716 9.45414 8.79404 10.2009 8.40654C10.9477 8.01904 11.7977 7.87689 12.63 8.0003C13.4789 8.12619 14.2648 8.52176 14.8716 9.12861C15.4785 9.73545 15.8741 10.5214 16 11.3703Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M17.5 6.5H17.51" stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        @else
                            <img width="100%" height="390"
                                class="w-full min-h-[280px] md:min-h-[390px] object-cover" src="{{ $item->media_url }}"
                                alt="{{ $item->media_id }}">
                            <div
                                class="absolute bottom-0 left-0 right-0 h-full max-h-0 group-hover:max-h-full overflow-hidden group-hover:min-h-full min-h-0 transition-all duration-500 px-2 text-xs lg:text-sm bg-utama-100/80 text-hitam backdrop-blur-sm transform flex gap-3 flex-col items-center justify-center">
                                <p class="line-clamp-4 text-center">
                                    {!! $item->caption !!}
                                </p>
                                <a class="text-center bg-utama-300 text-white hover:text-utama-100 hover:bg-utama-400 transition p-2 rounded-full text-sm lg:text-base font-medium"
                                    href="{{ $item->permalink }}" target="_blank" rel="noopener noreferrer"
                                    aria-label="goto instagram">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M17 2H7C4.23858 2 2 4.23858 2 7V17C2 19.7614 4.23858 22 7 22H17C19.7614 22 22 19.7614 22 17V7C22 4.23858 19.7614 2 17 2Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M16 11.3703C16.1234 12.2025 15.9812 13.0525 15.5937 13.7993C15.2062 14.5461 14.5931 15.1517 13.8416 15.53C13.0901 15.9082 12.2384 16.0399 11.4077 15.9062C10.5771 15.7726 9.80971 15.3804 9.21479 14.7855C8.61987 14.1905 8.22768 13.4232 8.09402 12.5925C7.96035 11.7619 8.09202 10.9102 8.47028 10.1587C8.84854 9.40716 9.45414 8.79404 10.2009 8.40654C10.9477 8.01904 11.7977 7.87689 12.63 8.0003C13.4789 8.12619 14.2648 8.52176 14.8716 9.12861C15.4785 9.73545 15.8741 10.5214 16 11.3703Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M17.5 6.5H17.51" stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        @endif

                    </div>
                @endforeach
            </div>
            <a class="text-center bg-utama-300 text-white hover:text-utama-100 hover:bg-utama-400 transition px-5 rounded-full py-3 text-sm lg:text-base font-medium"
                href="https://www.instagram.com/{{ $feeds->first()->username }}/" target="_blank"
                rel="noopener noreferrer">Kunjungi
                Langsung</a>
        </article>
        <div>
            <iframe width="600" height="725" title="dasboard looker" class="w-full h-full min-h-[700px]"
                src="https://lookerstudio.google.com/embed/reporting/4048dbe2-07b0-4b4f-9dd4-89f54b0c82d5/page/ioVaD"
                frameborder="0" style="border:0" allowfullscreen
                sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"></iframe>
        </div>
    </div>

</section>
