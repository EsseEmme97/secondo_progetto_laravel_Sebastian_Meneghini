<div>
    <div class="mt-2 p-2 flex justify-end">
        <button wire:click='displayForm' class="bg-indigo-500 rounded text-white p-2"> Crea nuovo articolo</button>
    </div>
    <section class="flex justify-center bg-slate-700 flex-wrap gap-8 mt-20">
        @if ($showForm)
            <livewire:new-product-form />
        @endif
        @foreach ($products as $product)
            <x-card :product='$product' />
        @endforeach
    </section>
</div>
