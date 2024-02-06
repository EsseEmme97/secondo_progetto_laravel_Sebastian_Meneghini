<div class="flex gap-8 mt-11 p-4">
    @if ($showUpdateForm)
        <livewire:update-form :$product/>
    @endif
    <img src="@if (str_starts_with($product->image, 'http')) {{ $product->image }}
            @else
                {{ Storage::url($product->image) }} @endif"
        class="w-[128px] h-[128px] rounded-full" alt="{{ $product->title }}">
    <div class="text-slate-300 flex-grow">
        <div class="flex justify-between">
            <h1 class="text-4xl font-bold">{{ $product->title }}</h1>
            @for ($var = 0; $var < round($product->rate); $var++)
                ⭐
            @endfor
        </div>
        <p class="mt-4">{{ $product->description }}</p>
        @if ($product->userId == Auth::id())
            <div class="mt-8 text-slate-300">
                <button type="button" wire:click='showForm' class="bg-blue-500 p-2 rounded-lg uppercase font-bold">Modify your
                    announcement</button>
                <button wire:confirm='are you sure to wanto to delete this product?' wire:click='deleteProduct' class="bg-red-500 p-2 rounded-lg uppercase font-bold">Delete your announcement</button>
            </div>
        @endif
    </div>
</div>
