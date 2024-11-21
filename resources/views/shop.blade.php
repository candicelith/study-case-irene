@extends('layout.headerNav')

@section('content')
    {{-- Breadcrumbs --}}
    <div class="flex py-6" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 rtl:space-x-reverse md:space-x-2">
            <li class="inline-flex items-center">
                <a href="#"
                    class="inline-flex items-center text-sm font-medium text-gray-900 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    Home
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="mx-1 h-3 w-3 text-gray-400 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <a href="#"
                        class="ms-1 text-sm font-medium text-gray-400 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white md:ms-2">Shop</a>
                </div>
            </li>
        </ol>
    </div>
    {{-- Breadcrumbs --}}

    {{-- Product --}}
    <section class="flex flex-col pb-12 sm:space-x-8 md:flex-row">
        <div class="space-y-5 sm:w-full">
            <div id="default-carousel" class="relative" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('assets/single-product-1-thumb-1.jpg') }}"
                            class="absolute left-1/2 top-1/2 block h-full w-full -translate-x-1/2 -translate-y-1/2 object-cover"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('assets/single-product-1-cover-2.jpg') }}"
                            class="absolute left-1/2 top-1/2 block h-full w-full -translate-x-1/2 -translate-y-1/2 object-cover"
                            alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute bottom-5 left-1/2 z-30 flex -translate-x-1/2 space-x-3">
                    <button type="button" class="h-3 w-3 rounded-full bg-white" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="h-3 w-3 rounded-full bg-white/50" aria-current="false"
                        aria-label="Slide 2" data-carousel-slide-to="1"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute left-0 top-0 z-30 flex h-full items-center px-4 focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 hover:bg-white/50 dark:bg-gray-800/30 dark:hover:bg-gray-800/60">
                        <svg class="h-4 w-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute right-0 top-0 z-30 flex h-full items-center px-4 focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 hover:bg-white/50 dark:bg-gray-800/30 dark:hover:bg-gray-800/60">
                        <svg class="h-4 w-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
            <div class="flex space-x-4">
                <img src="{{ asset('assets/single-product-1-thumb-1.jpg') }}" width="100" alt="">
                <img src="{{ asset('assets/single-product-1-cover-2.jpg') }}" width="100" alt=""
                    class="opacity-50">
            </div>
        </div>

        <div class="sm:w-full sm:p-3">
            <h1 class="mt-3 text-lg font-medium">Floating Phone</h1>
            <div class="mt-3 flex items-center">
                <svg class="ms-1 h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="ms-1 h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="ms-1 h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="ms-1 h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="ms-1 h-4 w-4 text-gray-300 dark:text-gray-500" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <a href="#" class="ms-3 text-sm font-medium text-gray-900 dark:text-white">10
                    reviews
                </a>
            </div>
            <h3 class="mt-5 font-black">$1,139.33</h3>
            <p class="mt-1 font-bold text-gray-400">Availability : <span class="text-blue-700">In Stock</span> </p>
            <p class="mt-8 font-medium text-gray-400">Met minim Mollie non desert Alamo est sit cliquey dolor
                do met sent. RELIT official consequent door ENIM RELIT Mollie.
                Excitation venial consequent sent nostrum met.
            </p>
            <hr class="my-7 h-px border-0 bg-gray-200">
            <div class="flex w-2/3 justify-between sm:w-1/4">
                <button class="rounded-full bg-blue-400 p-4"></button>
                <button class="rounded-full bg-green-400 p-4"></button>
                <button class="rounded-full bg-orange-400 p-4"></button>
                <button class="rounded-full bg-black p-4"></button>
            </div>
            <div class="mt-16 flex justify-between sm:w-1/2">
                <button
                    class="rounded-lg bg-blue-400 px-2.5 py-1 text-sm font-medium text-white hover:bg-blue-300 sm:px-5 sm:py-2 sm:text-base">Select
                    Options</button>
                <button class="rounded-full border border-gray-300 bg-white p-2">
                    <svg class="h-6 w-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                    </svg>
                </button>
                <button class="rounded-full border border-gray-300 bg-white p-2">
                    <svg class="h-6 w-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312" />
                    </svg>
                </button>
                <button class="rounded-full border border-gray-300 bg-white p-2">
                    <svg class="h-6 w-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2"
                            d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                        <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </button>
            </div>
        </div>
    </section>
    {{-- Product --}}

    {{-- Best Seller Products --}}
    <section class="py-12">
        <h3 class="font-bold">BESTSELLER PRODUCTS</h3>
        <hr class="my-6 h-px border-0 bg-gray-200">
        <div class="mx-auto flex max-w-screen-xl justify-center sm:block">
            <div class="grid gap-24 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                <div class="w-fit border border-gray-200 bg-white shadow">
                    <a href="#">
                        <img src="{{ asset('assets/product-cover-5.png') }}" alt="" />
                    </a>
                    <div class="space-y-2 px-6 pb-9 pt-6">
                        <a href="#">
                            <h5 class="mb-2 font-bold tracking-tight text-gray-900 dark:text-white">
                                Graphic Design
                            </h5>
                        </a>
                        <p class="font-medium text-gray-600 dark:text-gray-400">English Department</p>
                        <p class="font-medium text-gray-400">$16.48 <span class="ms-1 text-green-700">$6.48</span></p>
                    </div>
                </div>
                <div class="w-fit border border-gray-200 bg-white shadow">
                    <a href="#">
                        <img src="{{ asset('assets/product-cover-6.png') }}" alt="" />
                    </a>
                    <div class="space-y-2 px-6 pb-9 pt-6">
                        <a href="#">
                            <h5 class="mb-2 font-bold tracking-tight text-gray-900 dark:text-white">
                                Graphic Design
                            </h5>
                        </a>
                        <p class="font-medium text-gray-600 dark:text-gray-400">English Department</p>
                        <p class="font-medium text-gray-400">$16.48 <span class="ms-1 text-green-700">$6.48</span></p>
                    </div>
                </div>
                <div class="w-fit border border-gray-200 bg-white shadow">
                    <a href="#">
                        <img src="{{ asset('assets/product-cover-7.png') }}" alt="" />
                    </a>
                    <div class="space-y-2 px-6 pb-9 pt-6">
                        <a href="#">
                            <h5 class="mb-2 font-bold tracking-tight text-gray-900 dark:text-white">
                                Graphic Design
                            </h5>
                        </a>
                        <p class="font-medium text-gray-600 dark:text-gray-400">English Department</p>
                        <p class="font-medium text-gray-400">$16.48 <span class="ms-1 text-green-700">$6.48</span></p>
                    </div>
                </div>
                <div class="w-fit border border-gray-200 bg-white shadow">
                    <a href="#">
                        <img src="{{ asset('assets/product-cover-8.png') }}" alt="" />
                    </a>
                    <div class="space-y-2 px-6 pb-9 pt-6">
                        <a href="#">
                            <h5 class="mb-2 font-bold tracking-tight text-gray-900 dark:text-white">
                                Graphic Design
                            </h5>
                        </a>
                        <p class="font-medium text-gray-600 dark:text-gray-400">English Department</p>
                        <p class="font-medium text-gray-400">$16.48 <span class="ms-1 text-green-700">$6.48</span></p>
                    </div>
                </div>
                <div class="w-fit border border-gray-200 bg-white shadow">
                    <a href="#">
                        <img src="{{ asset('assets/product-cover-9.png') }}" alt="" />
                    </a>
                    <div class="space-y-2 px-6 pb-9 pt-6">
                        <a href="#">
                            <h5 class="mb-2 font-bold tracking-tight text-gray-900 dark:text-white">
                                Graphic Design
                            </h5>
                        </a>
                        <p class="font-medium text-gray-600 dark:text-gray-400">English Department</p>
                        <p class="font-medium text-gray-400">$16.48 <span class="ms-1 text-green-700">$6.48</span></p>
                    </div>
                </div>
                <div class="w-fit border border-gray-200 bg-white shadow">
                    <a href="#">
                        <img src="{{ asset('assets/product-cover-10.png') }}" alt="" />
                    </a>
                    <div class="space-y-2 px-6 pb-9 pt-6">
                        <a href="#">
                            <h5 class="mb-2 font-bold tracking-tight text-gray-900 dark:text-white">
                                Graphic Design
                            </h5>
                        </a>
                        <p class="font-medium text-gray-600 dark:text-gray-400">English Department</p>
                        <p class="font-medium text-gray-400">$16.48 <span class="ms-1 text-green-700">$6.48</span></p>
                    </div>
                </div>
                <div class="w-fit border border-gray-200 bg-white shadow">
                    <a href="#">
                        <img src="{{ asset('assets/product-cover-5.png') }}" alt="" />
                    </a>
                    <div class="space-y-2 px-6 pb-9 pt-6">
                        <a href="#">
                            <h5 class="mb-2 font-bold tracking-tight text-gray-900 dark:text-white">
                                Graphic Design
                            </h5>
                        </a>
                        <p class="font-medium text-gray-600 dark:text-gray-400">English Department</p>
                        <p class="font-medium text-gray-400">$16.48 <span class="ms-1 text-green-700">$6.48</span></p>
                    </div>
                </div>
                <div class="w-fit border border-gray-200 bg-white shadow">
                    <a href="#">
                        <img src="{{ asset('assets/product-cover-6.png') }}" alt="" />
                    </a>
                    <div class="space-y-2 px-6 pb-9 pt-6">
                        <a href="#">
                            <h5 class="mb-2 font-bold tracking-tight text-gray-900 dark:text-white">
                                Graphic Design
                            </h5>
                        </a>
                        <p class="font-medium text-gray-600 dark:text-gray-400">English Department</p>
                        <p class="font-medium text-gray-400">$16.48 <span class="ms-1 text-green-700">$6.48</span></p>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
