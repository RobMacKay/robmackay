<div class="px-4 md:px-0 py-4 bg-gradient-to-b from-slate-900 to-slate-950 border-b-2 border-slate-900 text-gray-400">
    <div class="max-w-3xl mx-auto flex justify-between">
        <nav class="space-x-8">
            <a href="/" class="hover:text-slate-700" wire:navigate>Home</a>
            <a href="/about" class="hover:text-slate-700"  wire:navigate>About</a>
        </nav>
        <nav class="space-x-4 flex">
            <a href="mailto:info@rscmedia.co.uk" alt="Mail Me">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white">
                    <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                    <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                  </svg>
            </a>
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
