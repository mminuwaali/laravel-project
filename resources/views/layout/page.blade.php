<!DOCTYPE html>
<html lang="en">

<head>
    <livewire:styles />
    <meta charset="UTF-8">
    <title>Document</title>
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    @include('modal')
    <livewire:header />
    <main class="w-screen flex flex-col px-4 items-center md:px-[6vw] py-8 overflow-auto gap-8">
        @yield('content')
        <div class="bg-gray-50 w-full">
            <div
                class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    <span class="block">Ready to dive in?</span>
                    <span class="block text-indigo-600">Start with a free account today.</span>
                </h2>
                <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                    <div class="inline-flex rounded-md shadow">
                        <a href="{{ route('register.index') }}"
                            class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-5 py-3 text-base font-medium text-white hover:bg-indigo-700">Get
                            started</a>
                    </div>
                    <div class="ml-3 inline-flex rounded-md shadow">
                        <a href="{{ route('about') }}"
                            class="inline-flex items-center justify-center rounded-md border border-transparent bg-white px-5 py-3 text-base font-medium text-indigo-600 hover:bg-indigo-50">Learn
                            more</a>
                    </div>
                </div>
            </div>
        </div>

        <section id="subscribe"
            class="w-full rounded-3xl bg-blue-700 flex gap-4 flex-col items-center justify-center p-20 py-32">
            <h3 class="text-white text-center font-bold text-5xl">Get notified of new products.</h3>
            <p class="text-gray-300 w-3/5 text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab
                consectetur ex amet.</p>
            <form action="{{ route('subscribe.store') }}" method="POST" class="flex gap-4 font-thinbold">
                @csrf
                <input type="email" name="email" class="px-6 py-3 rounded-md w-96 outline-none"
                    placeholder="Enter your email" required />
                <input type="submit" value="notify me"
                    class="bg-white bg-opacity-20 px-8 py-3 rounded-md text-white capitalize hover:bg-opacity-30 cursor-pointer" />
            </form>
        </section>
    </main>

    <livewire:footer />
    <livewire:scripts />
</body>

</html>
