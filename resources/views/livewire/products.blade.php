<section id="products" class="flex flex-col">
    @if ($show)
        <h2 class="text-3xl capitalize font-bold tracking-tight text-gray-900">recent products</h2>
    @endif
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
