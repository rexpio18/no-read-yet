<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">  <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,600,800|inter:400,500" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body { font-family: 'Inter', sans-serif; }
            h1, h2 { font-family: 'Plus Jakarta Sans', sans-serif; }
            
            .mesh-gradient {
                background-color: #0a0a0a;
                background-image: 
                    radial-gradient(at 0% 0%, hsla(253,16%,7%,1) 0, transparent 50%), 
                    radial-gradient(at 50% 0%, hsla(225,39%,30%,0.3) 0, transparent 50%), 
                    radial-gradient(at 100% 0%, hsla(339,49%,30%,0.3) 0, transparent 50%);
            }

            .glass {
                background: rgba(255, 255, 255, 0.03);
                backdrop-filter: blur(12px);
                -webkit-backdrop-filter: blur(12px);
                border: 1px solid rgba(255, 255, 255, 0.08);
            }
        </style> </head>
    <body class="antialiased mesh-gradient text-white min-h-screen flex flex-col items-center">
        
        <div class="fixed inset-0 overflow-hidden pointer-events-none">
            <div class="absolute -top-[10%] -left-[10%] w-[40%] h-[40%] rounded-full bg-indigo-500/10 blur-[120px] animate-pulse"></div>
            <div class="absolute top-[20%] -right-[10%] w-[30%] h-[30%] rounded-full bg-fuchsia-500/10 blur-[120px] animate-pulse delay-700"></div>
        </div>

        <header class="relative w-full max-w-6xl px-6 py-10 flex justify-between items-center z-10">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-gradient-to-tr from-indigo-500 to-fuchsia-500 rounded-lg flex items-center justify-center font-bold text-white shadow-lg shadow-indigo-500/20">
                    P
                </div>
                <span class="text-xl font-extrabold tracking-tight uppercase italic">Pioquinto</span>
            </div>

            @if (Route::has('login'))
                <nav class="flex items-center gap-6">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm font-medium text-slate-400 hover:text-white transition">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-medium text-slate-400 hover:text-white transition">Sign in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-5 py-2.5 bg-white text-black text-xs font-bold rounded-full hover:bg-indigo-50 transition shadow-xl shadow-white/5">
                                Join Now
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <main class="relative z-10 flex flex-col items-center justify-center flex-1 px-6 text-center">
            <div class="glass px-4 py-1 rounded-full text-[10px] font-bold tracking-[0.2em] uppercase text-indigo-300 mb-8">
                Welcome to the Future
            </div>
            
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tighter mb-6 bg-gradient-to-b from-white to-slate-500 bg-clip-text text-transparent leading-tight">
                Design with <br class="hidden md:block"> absolute <span class="text-white">precision.</span>
            </h1>

            <p class="max-w-xl text-lg text-slate-400 mb-10 leading-relaxed">
                Your Laravel foundation is ready. Start building your next masterpiece with our refined, responsive, and highly customizable starter kit.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 w-full max-w-md">
                <a href="#" class="flex-1 px-8 py-4 bg-indigo-600 hover:bg-indigo-500 rounded-2xl font-semibold transition-all shadow-lg shadow-indigo-600/20">
                    View Docs
                </a>
                <a href="#" class="flex-1 px-8 py-4 glass hover:bg-white/10 rounded-2xl font-semibold transition-all">
                    GitHub Repo
                </a>
            </div>
            <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-6 w-full max-w-5xl">
                <div class="glass p-8 rounded-3xl text-left hover:scale-[1.02] transition-transform">
                    <div class="text-indigo-400 mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="font-bold mb-2">High Performance</h3>
                    <p class="text-sm text-slate-500">Optimized by Vite and Laravel for lightning fast speeds.</p>
                </div>
                <div class="glass p-8 rounded-3xl text-left hover:scale-[1.02] transition-transform">
                    <div class="text-fuchsia-400 mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                    </div>
                    <h3 class="font-bold mb-2">Secure by Default</h3>
                    <p class="text-sm text-slate-500">Industry standard protection for all your user data.</p>
                </div>
                <div class="glass p-8 rounded-3xl text-left hover:scale-[1.02] transition-transform">
                    <div class="text-emerald-400 mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
                    </div>
                    <h3 class="font-bold mb-2">Tailwind v4</h3>
                    <p class="text-sm text-slate-500">Utilizing the latest CSS features for a modern UI.</p>              </div>
            </div>
        </main>
        <footer class="relative z-10 w-full py-10 text-center text-slate-600 text-[10px] tracking-widest uppercase">
            &copy; {{ date('Y') }} Pioquinto App &bull; Built with Laravel
        </footer>
    </body> </html>