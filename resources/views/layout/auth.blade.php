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
    <section class="w-screen h-screen grid md:grid-cols-2">
        <main class="h-screen flex">
            <a href="{{ route('index') }}" class="absolute left-8 top-8 font-bold text-gray-700 border-b-2"
                style="font-variant: small-caps">
                back to home
            </a>
            @yield('content')
        </main>
        <aside class="bg-black hidden md:flex relative">
            <img src="{{ url('images/authentication.jpg') }}" alt="" class="w-full h-full absolut object-cover">
        </aside>
    </section>
    <livewire:scripts />
</body>

</html>
