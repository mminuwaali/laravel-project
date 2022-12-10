<section id="cart" class="grow flex flex-col">
    <div class="w-full p-14 flex items-center justify-start capitalize">
        <h2 class="text-3xl font-bold">your favorites</h2>
    </div>
    <main class="grow flex flex-col gap-1 md:px-[16vw]">
        @for ($i = 0; $i < 6; $i++)
            <div class="flex w-full border-b-2 border-b-gray-300 p-8 gap-8">
                <div class="basis-64 w-64 bg-gray-200 rounded relative aspect-square overflow-hidden">
                    <img src="{{ url('images/authentication.jpg') }}" alt=""
                        class="absolute w-full h-full object-cover">
                </div>
                <div class="grow w-full flex flex-col justify-between">
                    <div class="w-full flex items-center justify-between">
                        <div class="flex flex-col items-start gap-1">
                            <span class="capitalize">product name</span>
                            <span class="capitalize text-gray-400">product gategory</span>
                        </div>
                        <p class="text-sm font-medium text-gray-900">$35</p>
                    </div>
                    <div class="w-full flex justify-between">
                        <span class="capitalize text-green-500">in stock </span>
                        <form action="{{ route('favorite.destroy', ['favorite' => 1]) }}" method="POST">
                            @csrf @method('delete')
                            <button type="submit" class="text-blue-600 capitalize">remove</button>
                        </form>
                    </div>
                </div>
            </div>
        @endfor
    </main>
</section>
