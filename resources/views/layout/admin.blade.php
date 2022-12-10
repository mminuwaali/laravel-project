<!DOCTYPE html>
<html lang="en">

<head>
    <livewire:styles />
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    @include('modal')
    <div class="h-screen flex flex-col">
        <livewire:admin-header />
        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
            </div>
        </header>
        <main class="h-full">
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 h-full">
                <!-- Replace with your content -->
                <div class="px-4 py-6 sm:px-0 flex pverflow auto h-full flex-col">
                    @yield('content')
                </div>
                <!-- /End replace -->
            </div>
        </main>
    </div>

</body>

</html>
