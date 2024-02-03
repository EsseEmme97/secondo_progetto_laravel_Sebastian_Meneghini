<div  wire:transition.out  class="backdrop-blur-sm fixed top-0 left-0 min-h-screen min-w-full">
    <form  wire:submit='store'
        class="absolute z-50 translate-x-[-50%] translate-y-[-50%] top-[-50%] left-1/2 w-2/3 bg-slate-100 p-8 rounded slide-in" enctype="multipart/form-data">
        @csrf
        <div class="flex justify-end">
            <button wire:click="$parent.displayForm" type="button"><box-icon name='x'size='md'></box-icon></button>
        </div>
        <div class="flex flex-col mt-4">
            <label class="text-sm" for="title">title</label>
            <input wire:model='title' name='title' id='title' type="text" class="p-2 rounded-md outline-none bg-slate-200 @error('title')
                outline-red-500
            @enderror">
        </div>
        <div class="flex flex-col mt-4">
            <label class="text-sm" for="category">category</label>
            <input wire:model='category' id='cateogry' name='category' type="text" class="p-2 rounded-md outline-none bg-slate-200 @error('category')
            outline-red-500
        @enderror">
        </div>
        <div class="flex flex-col mt-4">
            <label class="text-sm" for="price">price</label>
            <input wire:model='price' id='price' name='price' type="number" class="p-2 rounded-md outline-none bg-slate-200 @error('price')
            outline-red-500
        @enderror">
        </div>
        <div class="flex flex-col mt-4">
            <label class="text-sm" for="description">description</label>
            <textarea wire:model='description' id='description' name='description' type="text" class="p-2 rounded-md outline-none bg-slate-200 @error('description')
            outline-red-500
        @enderror"></textarea>
        </div>
        <div class="flex flex-col mt-4">
            <label class="text-sm" for="image">image</label>
            <input wire:model='image' name='image' id='image' type="text" class="p-2 rounded-md outline-none bg-slate-200 ">
        </div>
        <div class="flex flex-col mt-4">
            <label class="text-sm" for="imageFile">load image</label>
            <input wire:model='imageFile' name='imageFile' id='imageFile' type="file" class="p-2 rounded-md outline-none bg-slate-200 @error('imageFile')
            outline-red-500
        @enderror">
        </div>
        <div class="mt-8">
            <button type="submit" class="p-2 bg-indigo-400 w-full rounded-md text-white">Send Data</button>
        </div>
    </form>
</div>

