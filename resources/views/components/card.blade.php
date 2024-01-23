<article class="p-8 rounded-lg w-1/4 bg-slate-800 text-slate-300">
    <span wire:loading>...caricamento dati</span>
    <a href={{route('singleProduct',['id'=> $product['id']])}} wire:navigate>
        <div class="flex justify-center">
            <img src="{{ $product['image'] }}" alt="product-image" class="w-[128px] h-[128px] rounded-full text-center">
        </div>
        <h3 class="my-4 font-bold text-xl text-center">{{ substr($product['title'], 0, 10) . '...' }}</h3>
        <span class="bg-indigo-500 rounded p-2">{{ $product['category'] }}</span>
        <span class="text-xl block my-4 font-bold">{{ $product['price'] }} €</span>
        <p class="text-sm">{{ substr($product['description'], 0, 100) . '...' }}</p>
    </a>
</article>
