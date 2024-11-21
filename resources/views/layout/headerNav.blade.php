<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['public/css/style.css', 'public/js/script.js'])
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <div class="hidden w-full bg-green-500 md:block">
            <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
                <div class="flex items-center">
                    <svg class="h-6 w-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z" />
                    </svg>
                    <span class="text-white">(225) 555-0118</span>
                </div>
                <div class="flex items-center">
                    <svg class="h-6 w-6 text-white dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                    </svg>
                    <span class="text-white">michelle.rivera@example.com</span>
                </div>
                <h1 class="font-bold text-white">Follow Us and get a chance to win 80% off</h1>
                <div class="flex items-center justify-evenly text-white">
                    <h1 class="font-bold">Follow Us : </h1>
                    <svg class="h-6 w-6 text-white dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                            clip-rule="evenodd" />
                    </svg>
                    <svg class="h-6 w-6 text-white dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                            clip-rule="evenodd" />
                    </svg>
                    <svg class="h-6 w-6 text-white dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                            clip-rule="evenodd" />
                    </svg>
                    <svg class="h-6 w-6 text-white dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M22 5.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.343 8.343 0 0 1-2.605.981A4.13 4.13 0 0 0 15.85 4a4.068 4.068 0 0 0-4.1 4.038c0 .31.035.618.105.919A11.705 11.705 0 0 1 3.4 4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 6.1 13.635a4.192 4.192 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 2 18.184 11.732 11.732 0 0 0 8.291 20 11.502 11.502 0 0 0 19.964 8.5c0-.177 0-.349-.012-.523A8.143 8.143 0 0 0 22 5.892Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>
        <nav class="w-full border-b border-gray-200 bg-white dark:bg-gray-900">
            <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
                <!-- Logo / Brand Section -->
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span
                        class="self-center whitespace-nowrap text-2xl font-semibold text-gray-900 dark:text-white">Bandage</span>
                </a>
                <!-- Menu Toggle Button for Mobile -->
                <div class="flex md:order-2">
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24" transform="scale(-1, 1)">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M5 7h14M5 12h14M5 17h10" />
                        </svg>
                    </button>
                </div>
                <!-- Navigation Menu -->
                <div class="hidden w-full items-center justify-between md:order-1 md:flex md:w-auto"
                    id="navbar-sticky">
                    <div
                        class="mt-4 flex flex-col items-center justify-center rounded-lg border border-gray-100 bg-gray-50 p-4 text-center font-medium md:mt-0 md:w-full md:flex-row md:space-y-0 md:border-0 md:bg-white md:p-0">
                        <div
                            class="flex flex-col items-center justify-center space-y-2 p-4 pb-0 text-center font-medium md:mx-2.5 md:mt-0 md:flex-row md:space-y-0 md:border-0 md:bg-white md:p-0 lg:mx-52">
                            <a href="#"
                                class="block rounded px-3 py-2 text-gray-900 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700 md:hover:bg-transparent md:hover:text-gray-900"
                                aria-current="page">Home</a>
                            <a class="block">
                                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                    class="flex w-full items-center justify-between rounded px-3 py-2 text-gray-400 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700 md:w-auto md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-gray-900">Shop
                                    <svg class="ms-2.5 h-2.5 w-2.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>
                                <!-- Dropdown Menu -->
                                <div id="dropdownNavbar"
                                    class="absolute z-10 mt-2 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white font-normal shadow-lg group-hover:block">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-400">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tableware</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Glassware</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Cookware</a>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                            <a href="#"
                                class="block rounded px-3 py-2 text-gray-400 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700 md:hover:bg-transparent md:hover:text-gray-900">About</a>
                            <a href="#"
                                class="block rounded px-3 py-2 text-gray-400 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700 md:hover:bg-transparent md:hover:text-gray-900">Blog</a>
                            <a href="#"
                                class="block rounded px-3 py-2 text-gray-400 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700 md:hover:bg-transparent md:hover:text-gray-900">Contact</a>
                            <a href="#"
                                class="block rounded px-3 py-2 text-gray-400 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700 md:hover:bg-transparent md:hover:text-gray-900">Pages</a>
                        </div>
                        <div
                            class="flex flex-col items-center justify-center space-y-2 p-4 pt-0 text-center font-medium md:mx-2.5 md:mt-0 md:flex-row md:space-y-0 md:border-0 md:bg-white md:p-0">
                            <a href="#"
                                class="flex rounded px-3 py-2 text-blue-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 md:hover:bg-transparent md:hover:text-blue-900">
                                <svg class="text-blue700 h-6 w-6 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2"
                                        d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <span>
                                    Login/Register
                                </span>
                            </a>
                            <a href="#"
                                class="flex rounded px-3 py-2 text-blue-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 md:hover:bg-transparent md:hover:text-blue-900"><svg
                                    class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="1"
                                        d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="flex items-center rounded px-3 py-2 text-blue-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 md:hover:bg-transparent md:hover:text-blue-900"><svg
                                    class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1"
                                        d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312" />
                                </svg>
                                <span class="text-xs">1</span>
                            </a>
                            <a href="#"
                                class="flex items-center rounded px-3 py-2 text-blue-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 md:hover:bg-transparent md:hover:text-blue-900"><svg
                                    class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1"
                                        d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                                </svg>
                                <span class="text-xs">1</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <main class="mx-8 max-w-screen-xl sm:mx-auto sm:w-full sm:px-4">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>


</html>
