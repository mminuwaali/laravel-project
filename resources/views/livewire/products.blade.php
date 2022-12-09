<section id="products" class="flex flex-col">
    <h2 class="text-3xl capitalize font-bold tracking-tight text-gray-900">recent products</h2>
    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        @for ($i = 0; $i < 12; $i++)
            <livewire:product />
        @endfor
</section>
