<div>
    <nav class="flex grid-rows-3 justify-around py-3 items-center">
        <div>
            <img src="{{asset('images/logo.png')}}" alt="logo">
        </div>
        <div>
            <form class="flex">
                <input type="search" placeholder="search..." class="p-3 border-s-2 border-t-2 border-b-2 rounded-s text-gray-500 focus:outline-none">
                <button class="p-3 border-t-2 border-b-2 border-r-2 hover:bg-slate-200 transition duration-700 ease-out rounded-right">
                    <i class="fa-solid fa-search"></i>
                </button>


            </form>
        </div>
        <div>
            <div class="flex grid-rows-2 gap-6"> 
                <div>
                    <div class="text-right">Phone</div>
                    <div>9809090</div>
                </div>
                <div>
                    <div class="text-right">Email</div>
                    <div>abcd@gmail.com</div>
                </div>
            </div>
        </div>

        
        

    </nav>
    <hr>
    <nav class="flex grid-rows-3 justify-around py-3 items-center">
        <div>
            <form action="">
                <select name="" id="" class="p-3 rounded border bg-gray-100">
                    <option value="">Shop by Category</option>
                    <option value="">Clothes</option>
                    <option value="">Foods</option>
                </select>
            </form>
        </div>
        <div class="flex gap-10">
            <a wire:navigate href="{{route('home')}}">Home</a>
            <a wire:navigate href="{{route('shop')}}">Shop</a>
            <a href="">Contact</a>
           

        </div>
        <div class="flex gap-10">
            <a href="">
                <i class="fa-solid fa-user"></i>
            </a>
            <a href="">
                <i class="fa-solid fa-heart"></i>
            </a>
            <a href="">
                <i class="fa-solid fa-shopping-cart"></i>
            </a>
            
           

        </div>

    </nav>
   

</div>