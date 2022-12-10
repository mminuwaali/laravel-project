<header class="w-screen px-20 md:px-[6vw] py-8 flex items-center justify-between gap-4 sticky z-50 bg-white top-0">
    <a href="{{ route('index') }}">
        <h1 class="uppercase font-black text-blue-400 text-md md:text-2xl whitespace-nowrap" title="online shopping">
            o-shopping
        </h1>
        <div
            class="grow @if (!$show) hidden @else flex @endif rounded shadow-lg left-1/2 -translate-x-1/2 md:translate-x-0 md:left-0 md:shadow-none absolute w-80 p-8 top-20 md:top-0 md:p-0 md:w-full md:relative md:flex flex-col md:flex-row items-center justify-center md:justify-between gap-4 bg-white">
            <nav
                class="grow flex items-center justify-center gap-6 flex-col md:flex-row capitalize font-semibold text-gray-500 text-lg">
                <a href="{{ route('index') }}" class="hover:text-gray-900">home</a>
                <a href="{{ route('category', ['category' => 'all']) }}" class="hover:text-gray-900">marketplace</a>
                <a href="{{ route('about') }}" class="hover:text-gray-900">about us</a>
                <a href="{{ route('contact.index') }}" class="hover:text-gray-900">get a quote</a>
            </nav>
            <div class="flex items-center justify-end gap-4 font-bold uppercase text-sm flex-col md:flex-row">
                @auth
                    @if (!Auth::user()->admin)
                        <a href="{{ route('admin.index') }}" class="hover:text-gray-900">admin</a>
                    @endif
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
        <div class="w-8 flex md:hidden flex-col justify-evenly gap-1 cursor-pointer relative ml-auto"
            wire:click="toggle">
            <i
                class=" @if ($show) rotate-45 absolute @endif block w-4/5 h-1 bg-black rounded"></i>
            <i
                class=" @if ($show) -rotate-45 absolute @endif block w-4/5 h-1 bg-black rounded"></i>
        </div>
        <div class="flex gap-4 text-white text-sm">
            <livewire:carticon />
            <livewire:favicon />
        </div>
    </a>
</header>
