<section id="slideshow"
    class=" bg-black h-[clamp(24em,calc(100vw/2.5),85vh)] flex justify-start overflow-hidden text-white">
    @foreach ($items as $key => $item)
        <div class="w-full h-full relative shrink-0 flex flex-col items-center md:items-start justify-center gap-4 bg-green-900 px-[7%] transition-all duration-500 text-center md:text-left"
            style="transform: translateX({{ $index * -100 }}%)">
            <img src="{{ url('images/authentication.jpg') }}" alt="" class="absolute w-full h-full object-cover top-0 left-0" />
            <h2 class="text-4xl md:text-7xl md:w-[max(12em,70%)] font-bold capitalize z-10">
                {{ $item['title'] }}
            </h2>
            <p class="md:w-[max(12em,80%)] z-10">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, inventore?
                Sit sed iste accusamus dolore expedita architecto quisquam harum perferendis obcaecati veritatis nemo
            </p>
            <a href="#" class="mr-auto px-8 py-1 flex items-center justify-center border-2 z-10">shop now</a>
        </div>
    @endforeach
    <div class="absolute flex gap-4 items-center justify-start w-full px-20 py-6 bottom-0 left-0 font-black text-md">
        @foreach ($items as $key => $item)
            <span wire:click="setIndex({{ $key }})"
                class="cursor-pointer @if ($index == $key) text-blue-600 @endif">
                0{{ $key + 1 }}.
            </span>
        @endforeach
    </div>
</section>
