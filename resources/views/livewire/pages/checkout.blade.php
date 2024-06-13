<div>

    <div class="flex justify-center items-center h-[70vh]">
        <div class="grid grid-cols-2 max-w-[1450px] mx-auto gap-10 w-full  ">
            <div>
                <form action="" class="px-4 py-3">
                    <h2 class="text-2xl mb-5 ">Billing Address</h2>
                    <hr class="mb-6">
                    <div class="mb-5 w-full">
                       
                        <input type="text" class="border block rounded py-2 px-3 w-full" placeholder="Country">
                    </div>
        
                    <div class="mb-5 w-full">
                       
                        <input type="text" class="border block rounded py-2 px-3 w-full" placeholder="State">
                    </div>
                    <div class="mb-5 w-full">
                       
                        <input type="text" class="border block rounded py-2 px-3 w-full" placeholder="City">
                    </div>
                    <div class="mb-5 w-full">
                       
                        <input type="text" class="border block rounded py-2 px-3 w-full" placeholder="Address">
                    </div>
                    <div class="mb-5 w-full">
                       
                        <input type="text" class="border block rounded py-2 px-3 w-full" placeholder="Zip Code">
                    </div>
                   
                </form>
            </div>
    
            <div class="bg-slate-50 rounded px-4 py-3">
                <h2 class="text-2xl mb-5 ">Order Summary</h2>
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
                    <div class="text-right mt-4 ">
                        <strong>Total : 40$</strong>
                    </div>
                    <div class="text-right mt-6">
                        <a href="{{route('payment')}}" class="bg-blue-500 text-white py-2 px-4 rounded">Proceed</a>
                    </div>
            </div>
        </div>
    </div>
</div>
