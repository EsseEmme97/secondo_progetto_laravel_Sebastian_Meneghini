<nav class="p-4 flex justify-between items-center bg-slate-800">
    <div class="flex items-center">
        <img src="https://robohash.org/dfgdfge
        " alt="logo img" class="h-[64px] w-[64px] rounded-full bg-white">
        @auth
            <p class="text-slate-300 text-bold text-lg ms-4">Benvenuto {{ Auth::user()->name }}</p>
        @endauth
    </div>
    <ul class="flex justify-center gap-8 text-slate-300 text-lg items-center">
        <li><a href="{{ route('products') }}" class="hover:bg-slate-700 p-2 rounded" wire:navigate>Products</a></li>
        <li><a href="#" class="hover:bg-slate-700 p-2 rounded" wire:navigate>Home</a></li>
        @auth
            <form class="mt-2" wire:submit='logout'><button><box-icon name='log-out' color='rgb(203 213 225)'
                        class="text-lg"></box-icon></button></form>
        @endauth
    </ul>
</nav>
