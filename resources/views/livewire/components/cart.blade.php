<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div x-show="cartOpen" @click.outside="cartOpen=false" class="fixed right-0 top-0 z-10 w-[400px] bg-[#EEEBE6] h-screen overflow-y-auto px-4">
        <div class="text-center py-4">
            <a href="">

                <i class="fa-solid fa-xmark" @click.prevent="cartOpen=false"></i>
                </a>
        </div>
        <div class="flex justify-between">
            <strong>Your Cart</strong>
            <strong>Your Cart</strong>
        </div >
        <div class="mt-4">
            <div class="flex justify-between item-center border-2 border-gray-300 py-2 px-3 text-gray-500">
                <div>
                    <div>Grey Hoodie</div>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
    
                    <div>
                        $12
                    </div>
            </div>
            <div class="flex justify-between item-center border-2 border-gray-300 py-2 px-3 text-gray-500">
                <div>
                    <div>Grey Hoodie</div>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
    
                    <div>
                        $12
                    </div>
            </div>
            <div class="flex justify-between item-center border-2 border-gray-300 py-2 px-3 text-gray-500">
                <div>
                    <div>Grey Hoodie</div>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
    
                    <div>
                        $12
                    </div>
            </div>
            <div class="flex justify-between item-center border-2 border-gray-300 py-2 px-3 text-gray-500">
                <div>
                    <div>Grey Hoodie</div>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
    
                    <div>
                        $12
                    </div>
            </div><div class="flex justify-between item-center border-2 border-gray-300 py-2 px-3 text-gray-500">
                <div>
                    <div>Grey Hoodie</div>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
    
                    <div>
                        $12
                    </div>
            </div>

           
            
        </div>
        <div class="mt-4">

            <button class="bg-[#EEEBE6] rounded text-white font-bold px-4 py-3 border w-full">CheckOut</button>
        </div>
    </div>
</div>
