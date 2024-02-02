<x-layouts.app>
    <main class="min-h-screen bg-slate-600 flex justify-center items-center flex-col">
        <h1 class="text-8xl my-8 font-bold bg-gradient-to-r from-slate-800 to-indigo-700 bg-clip-text text-transparent">Login</h1>
        <form action="{{ route('login') }}" method='POST' class="p-4 rounded-lg bg-slate-800 text-white w-2/3">
            @csrf
            <div class="flex flex-col mt-4">
                <label for="email" class="text-sm mb-2">email</label>
                <input name="email" type="text" class="outline-none rounded bg-slate-900 p-2">
            </div>
            <div class="flex flex-col mt-4">
                <label for="password" class="text-sm mb-2">password</label>
                <input name="password" type="password" class="outline-none rounded bg-slate-900 p-2">
            </div>
            <div class="mt-6">
                <button type="submit" class="rounded bg-indigo-500 w-full p-2">invia</button>
            </div>
            <div class="mt-6 text-sm">
                <p>Not yet an account? <a href="{{route('register')}}" class="text-blue-500" wire:navigate>Sign up</a></p>
            </div>
        </form>
        @foreach ($errors->all() as $error)
            <span>{{ $error }}</span>
        @endforeach
    </main>
</x-layouts.app>
