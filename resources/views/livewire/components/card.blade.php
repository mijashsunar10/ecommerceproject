<div class="grid grid-cols-6 gap-y-8 px-4 py-7 ">
    @foreach (range(0,11) as $index)
        
   
    <div>
        <div class="bg-[#EEEBE6] p-3 rounded-lg h-[200px] w-[200px]">
            <img class="w-full h-full object-cover object-top" src="{{asset('images/doggy.png')}}" alt="">
        </div>
        <div mt-5 text-2xl>
            Gray Hoodie
        </div>
        <div class="mt-2">
                  <i class="fa-solid fa-star text-[#926838]"></i>
                <i class="fa-solid fa-star text-[rgb(146,104,56)]"></i>
                <i class="fa-solid fa-star text-[#926838]"></i>
                <i class="fa-solid fa-star text-[#926838]"></i>
                <i class="fa-solid fa-star text-[#926838]"></i>
            </div>
            
            <div class="mt-3">
                $18.00
            </div>
            <div>
                <button class="border px-5 py-3 rounded">Add to Cart</button>
            </div>
     </div>
     @endforeach
</div>