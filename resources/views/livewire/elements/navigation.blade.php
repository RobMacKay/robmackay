<div class="px-4 md:px-0 py-4 bg-gradient-to-b from-slate-900 to-slate-950 border-b-2 border-slate-900 text-gray-400">
    <div class="max-w-3xl mx-auto flex justify-between">
        <nav class="space-x-8">
            <a href="/" class="hover:text-slate-700" wire:navigate>Home</a>
            <a href="/about" class="hover:text-slate-700"  wire:navigate>About</a>
            <a href="https://rscmedia.co.uk/articles" class="hover:text-slate-700">Blog</a>
        </nav>
        <nav class="space-x-4">
        @auth
            <a href="{{ url('/dashboard') }}" class="hover:text-slate-700" wire:navigate>Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="hover:text-slate-700" wire:navigate>Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="hover:text-slate-700" wire:navigate>Register</a>
            @endif
        @endauth
        </nav>
    </div>
</div>
