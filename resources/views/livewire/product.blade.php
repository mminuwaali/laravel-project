<div class="group relative">
    <div class="min-h-80 aspect-square w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 relative">
        <form action="" method="post" class="z-10 absolute w-8 h-8 top-4 right-8">
            <button class="w-full h-full flex" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z" />
                </svg>
            </button>
        </form>
        <a href="{{ route('product', ['product' => $data]) }}">
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
        @if ($data->quantity > 0)
            <form action="{{ route('cart.store') }}" method="post"
                class="w-full flex items-center justify-center font-bold">
                @csrf
                <input type="hidden" name="product_id" value="{{ $data->id }}" />
                <button type="submit"
                    class="bg-gray-200 flex items-center py-2 justify-center w-4/5 rounded hover:bg-gray-800 hover:text-white whitespace-nowrap capitalize">
                    add to cart
                </button>
            </form>
        @else
            <span>out of stock</span>
        @endif
    </div>
</div>
