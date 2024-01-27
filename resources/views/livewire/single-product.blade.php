<main class="flex gap-8 mt-11 p-4">
    <img src="{{$product['image']}}" alt="" class="w-[128px] h-[128px] rounded-full ">
    <div class="text-slate-300 flex-grow">
        <div class="flex justify-between">
            <h1 class="text-4xl font-bold">{{$product['title']}}</h1>
            @for ($var = 0; $var < round($product['rate']); $var++)
              ⭐
           @endfor
        </div>
        <p class="mt-4">{{$product['description']}}</p>
    </div>
</main>
