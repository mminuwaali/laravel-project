@extends('layout.page')

@section('content')
    <section id="indicator"
        class="w-full md:h-64 bg-black p-16 flex flex-col items-center md:items-start justify-center text-white gap-2 text-xl">
        <h2 class="capitalize font-bold text-green-500 text-xl md:text-5xl">categories</h2>
        <div class="flex gap-2 text-sm md:text-md" style="font-variant: small-caps">
            <a href="{{ route('index') }}" class="font-bold">home</a>
            /
            <span class="text-green-500 font-bold">{{ Request()->segment(2) }}</span>
        </div>
    </section>
    <section id="category" class="w-full flex flex-col p-8">
        <div class="w-full flex items-center justify-center flex-wrap gap-2 font-bold capitalize">
            @foreach ($categories as $category)
                <a href="{{ route('category', ['category' => $category]) }}"
                    class="hover:bg-black p-2 px-8 rounded hover:text-white @if (Request()->segment(2) == $category->id) text-white bg-black @endif">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>
        <section id="products" class="flex flex-col">
            <div
                class="mt-6 grid grid-cols-1 gap-y-10 items-center justify-center gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8 relative">
                {{-- @for ($i = 0; $i < 12; $i++)
                <livewire:product />
                @endfor --}}

                @forelse ($products as $product)
                    <livewire:product />
                @empty
                    <span class="absolute left-1/2 -translate-x-1/2 capitalize text-2xl text-gray-500 text-center w-full">no
                        products yet</span>
                @endforelse
        </section>

        {{ $products->links() }}
    </section>
@endsection
