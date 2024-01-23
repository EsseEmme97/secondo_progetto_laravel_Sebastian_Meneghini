<section class="flex justify-center bg-slate-700 flex-wrap gap-8 mt-20">
    @foreach ($products as $product )
        <x-card :product='$product'/>
    @endforeach
</section>
