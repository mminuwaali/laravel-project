<section id="cart" class="grow flex flex-col">
    <div class="w-full p-14 flex items-center justify-start capitalize">
        <h2 class="text-3xl font-bold">shopping cart</h2>
    </div>
    <div class="flex flex-wrap gap-8">
        <main class="grow flex flex-col gap-1">
            @for ($i = 0; $i < 6; $i++)
                <div class="flex w-full border-b-2 border-b-gray-300 p-8 gap-8">
                    <div class="basis-64 w-64 bg-gray-200 rounded relative aspect-square">
                        {{-- <img src="" alt="" class="absolute w-full h-full object-cover"> --}}
                    </div>
                    <div class="grow w-full flex flex-col justify-between">
                        <div class="w-full flex items-center justify-between">
                            <div class="flex flex-col items-start gap-1">
                                <span class="capitalize">product name</span>
                                <span class="capitalize text-gray-400">product gategory</span>
                                <p class="text-sm font-medium text-gray-900">$35</p>
                            </div>
                            <input type="number" name="quantity" min="0" max="0"
                                class="bg-gray-100 px-2 py-1 outline-none rounded-md text-center" value="1" readonly/>
                            <div class="w-5 flex flex-col gap-2 relative items-center justify-center cursor-pointer">
                                <i class="w-full h-1 bg-black absolute rounded-lg rotate-45"></i>
                                <i class="w-full h-1 bg-black absolute rounded-lg -rotate-45"></i>
                            </div>
                        </div>
                        <div class="w-full flex justify-start"><span class="capitalize text-green-500">in stock </span>
                        </div>
                    </div>
                </div>
            @endfor
        </main>
        <aside class="flex items-start basis-96 justify-center grow md:grow-0">
            <div class="w-full rounded flex flex-col bg-gray-100 p-8 gap-4 sticky top-20">
                <div class="w-full py-2 flex justify-start">
                    <h4 class="font-bold capitalize text-xl">order summary</h4>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="w-full flex justify-between capitalize border-b-2 border-gray-200 py-2">
                        <span>subtotal</span>
                        <span class="font-bold">N99.00</span>
                    </div>
                    <div class="w-full flex justify-between capitalize border-b-2 border-gray-200 py-2">
                        <span>shipping estimate</span>
                        <span class="font-bold">N5.00</span>
                    </div>
                    <div class="w-full flex justify-between capitalize border-b-2 border-gray-200 py-2">
                        <span>tax estimate</span>
                        <span class="font-bold">N8.00</span>
                    </div>
                    <div class="w-full flex justify-between capitalize font-bold text-lg">
                        <span>total</span>
                        <span>N99.00</span>
                    </div>
                </div>
                <input type="submit" value="checkout"
                    class="bg-blue-600 flex items-center justify-center rounded-md capitalize text-white py-3 cursor-pointer text-lg" />
            </div>
        </aside>
    </div>
</section>
