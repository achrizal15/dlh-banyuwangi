<nav class="fixed top-0 left-0 right-0 bg-utama-100 px-5 lg:px-16 flex justify-between items-center py-3">
    <section class="flex items-center gap-6">
        <a href="/" class="flex items-center gap-3 focus:outline-none" aria-label="beranda">
            <img src="{{ Vite::asset('resources/images/dlh-2.webp') }}" alt="dlh-logo" width="60" height="60"
                class="h-auto w-14">
            <article class="md:flex flex-col justify-center hidden">
                <p class="text-utama-300 text-base font-semibold leading-5">DINAS LINGKUNGAN HIDUP</p>
                <p class="text-hitam text-sm font-semibold leading-3">BANYUWANGI</p>
            </article>
        </a>
        <a aria-label="telpon dlh" href="tel:(0333) 424113"
            class="flex focus:outline-none text-hitam gap-5 items-center px-3 py-2 border-[0.5px] border-dashed bg-white border-utama-200">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                <g clip-path="url(#clip0_282_419)">
                    <path
                        d="M15.05 5.27246C16.0267 5.46303 16.9244 5.94072 17.6281 6.6444C18.3317 7.34807 18.8094 8.24573 19 9.22246M15.05 1.27246C17.0793 1.4979 18.9716 2.40664 20.4162 3.84947C21.8609 5.2923 22.772 7.18347 23 9.21246M22 17.1925V20.1925C22.0011 20.471 21.9441 20.7466 21.8325 21.0018C21.7209 21.257 21.5573 21.486 21.3521 21.6743C21.1468 21.8626 20.9046 22.0059 20.6407 22.0952C20.3769 22.1844 20.0974 22.2175 19.82 22.1925C16.7428 21.8581 13.787 20.8066 11.19 19.1225C8.77382 17.5871 6.72533 15.5386 5.18999 13.1225C3.49997 10.5137 2.44824 7.54346 2.11999 4.45246C2.095 4.17593 2.12787 3.89722 2.21649 3.63409C2.30512 3.37095 2.44756 3.12915 2.63476 2.92408C2.82196 2.71901 3.0498 2.55517 3.30379 2.44298C3.55777 2.3308 3.83233 2.27272 4.10999 2.27246H7.10999C7.5953 2.26768 8.06579 2.43954 8.43376 2.75599C8.80173 3.07245 9.04207 3.51191 9.10999 3.99246C9.23662 4.95253 9.47144 5.89519 9.80999 6.80246C9.94454 7.16038 9.97366 7.54938 9.8939 7.92334C9.81415 8.29731 9.62886 8.64057 9.35999 8.91246L8.08999 10.1825C9.51355 12.686 11.5864 14.7589 14.09 16.1825L15.36 14.9125C15.6319 14.6436 15.9751 14.4583 16.3491 14.3786C16.7231 14.2988 17.1121 14.3279 17.47 14.4625C18.3773 14.801 19.3199 15.0358 20.28 15.1625C20.7658 15.231 21.2094 15.4757 21.5265 15.85C21.8437 16.2242 22.0122 16.702 22 17.1925Z"
                        stroke="#282828" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </g>
                <defs>
                    <clipPath id="clip0_282_419">
                        <rect width="24" height="24" fill="white" transform="translate(0 0.272461)" />
                    </clipPath>
                </defs>
            </svg>
            <span class="text-sm">(0333) 424113</span>
        </a>
    </section>
    <section class="flex items-center">
        <button class="lg:hidden" aria-label="menu mobile">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M21 10H7" stroke="#373636" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M21 6H3" stroke="#373636" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M21 14H3" stroke="#373636" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M21 18H7" stroke="#373636" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
        @include('layout.bwh.menu')
    </section>
</nav>
