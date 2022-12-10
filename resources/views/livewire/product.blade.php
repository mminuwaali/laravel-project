<div class="group relative">
    <div
        class="min-h-80 aspect-square w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 relative">
        <a href="#">
            <img src="{{ url($data->image) }}" alt="Front of men&#039;s Basic Tee in black."
                class="h-full w-full object-cover object-center absolute" />
        </a>
    </div>
    <div class="mt-4 flex justify-between">
        <div>
            <h3 class="text-xl text-gray-700">
                <a href="{{ route('product', ['product' => $data]) }}">
                    {{ $data->name }}
                </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">{{ $data->category->name }}</p>
        </div>
        <p class="text-sm font-medium text-gray-900">${{ $data->price }}</p>
    </div>
    <div class="w-full flex p-2 justify-center capitalize font-thinbold">
        <a href="#"
            class="bg-gray-200 flex items-center py-2 justify-center w-4/5 rounded hover:bg-gray-400 hover:text-white">
            add to cart
        </a>
    </div>
</div>
