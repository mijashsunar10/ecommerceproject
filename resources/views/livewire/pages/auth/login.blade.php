<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="h-[80vh] flex justify-center items-center">
        <form action="" class="w-[600px]">
            <div class="mb-5 w-full">
                <label for="">Email <b>*</b></label>
                <input type="email" class="border block rounded py-2 px-3 w-full">
            </div>

            <div class="mb-5 w-full">
                <label for="">Password<b>*</b></label>
                <input type="password" class="border block rounded py-2 px-3">
            </div>
            <button class="bg-blue-700 px-4 py-2 rounded w-full text-white font-bold">Login</button>
            <div class="mt-5 text-center">
                <span>New to waggy <a wire:navigate href="{{route('register')}}" class=" text-blue-600">Register</a>
                </span>
            </div>
        </form>
       
    </div>
</div>
