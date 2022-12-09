<header class="w-screen px-20 md:px-[6vw] py-8 flex items-center justify-between gap-4 sticky z-50 bg-white top-0">
    <a href="{{ route('index') }}">
        <h1 class="uppercase font-black text-blue-400 text-md md:text-2xl whitespace-nowrap" title="online shopping">
            o-shopping</h1>
        <div
            class="grow @if (!$show) hidden @endif rounded shadow-lg left-1/2 -translate-x-1/2 md:translate-x-0 md:left-0 md:shadow-none absolute w-80 p-8 top-20 md:top-0 md:p-0 md:w-full md:relative md:flex flex-col md:flex-row items-center justify-center md:justify-between gap-4 bg-white">
            <nav
                class="grow flex items-center justify-center gap-6 flex-col md:flex-row capitalize font-semibold text-gray-500 text-lg">
                <a href="{{ route('index') }}" class="hover:text-gray-900">home</a>
                <a href="{{ route('category', ['category' => 'all']) }}" class="hover:text-gray-900">marketplace</a>
                <a href="{{ route('about') }}" class="hover:text-gray-900">about us</a>
                <a href="{{ route('contact') }}" class="hover:text-gray-900">get a quote</a>
            </nav>
            <div class="flex items-center justify-end gap-4 font-bold uppercase text-sm flex-col md:flex-row">
                @auth
                    <a href="{{ route('logout.index') }}"
                        class="bg-gray-100 px-8 py-1 flex items-center justify-center rounded hover:bg-gray-700 hover:text-white">
                        logout
                    </a>
                @endauth
                @guest
                    <i class="fa fa-home"></i>
                    <a href="{{ route('login.index') }}"
                        class="bg-gray-100 px-8 py-1 flex items-center justify-center rounded hover:bg-gray-700 hover:text-white">
                        login
                    </a>
                    <a href="{{ route('register.index') }}"
                        class="bg-blue-600 px-8 py-1 flex items-center justify-center rounded hover:bg-blue-500 text-white">
                        register
                    </a>
                @endguest
            </div>
        </div>
        <div class="w-8 flex md:hidden flex-col justify-evenly gap-1 cursor-pointer relative ml-auto" wire:click="toggle">
            <i
                class=" @if ($show) rotate-45 absolute @endif block w-4/5 h-1 bg-black rounded"></i>
            <i
                class=" @if ($show) -rotate-45 absolute @endif block w-4/5 h-1 bg-black rounded"></i>
        </div>
        <div class="flex gap-4 text-white text-sm">
            <a href="#" class="h-6 w-6 relative cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="grey">
                    <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                    <path
                        d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z" />
                </svg>
                <b
                    class="font-thin absolute top-0 right-0 w-6 h-6 rounded-full bg-black translate-x-1/2 -translate-y-1/2 flex items-center justify-center">01</b>
            </a>
            <a href="#" class="h-6 w-6 relative cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="grey" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                <b
                    class="font-thin absolute top-0 right-0 w-6 h-6 rounded-full bg-black translate-x-1/2 -translate-y-1/2 flex items-center justify-center">01</b>
            </a>
        </div>
    </a>
</header>
