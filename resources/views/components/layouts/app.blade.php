<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'HablaGrowth - Automation & Omnichannel Solutions' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-brand-dark text-white selection:bg-brand-primary selection:text-brand-dark">

    <!-- Navbar -->
    <nav x-data="{ open: false }" class="fixed w-full z-50 transition-all duration-300 glass">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-2">
                    <a href="/">
                        <x-logo class="h-10 w-auto" />
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="/"
                        class="hover:text-brand-primary transition-colors text-sm font-medium uppercase tracking-wide">Inicio</a>
                    <a href="#automation"
                        class="hover:text-brand-primary transition-colors text-sm font-medium uppercase tracking-wide">Automatización</a>
                    <a href="#omnichannel"
                        class="hover:text-brand-primary transition-colors text-sm font-medium uppercase tracking-wide">Omnicanalidad</a>
                    <a href="#pricing"
                        class="hover:text-brand-primary transition-colors text-sm font-medium uppercase tracking-wide">Planes</a>

                    <a href="/admin/login"
                        class="px-5 py-2 rounded-full border border-brand-primary text-brand-primary hover:bg-brand-primary hover:text-brand-dark transition-all duration-300 text-sm font-bold">
                        Clientes
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button @click="open = !open" class="text-gray-300 hover:text-white focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="open" @click.away="open = false" class="md:hidden glass border-t border-white/10">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="/"
                    class="block px-3 py-2 rounded-md text-base font-medium hover:bg-white/5 hover:text-brand-primary">Inicio</a>
                <a href="#automation"
                    class="block px-3 py-2 rounded-md text-base font-medium hover:bg-white/5 hover:text-brand-primary">Automatización</a>
                <a href="#omnichannel"
                    class="block px-3 py-2 rounded-md text-base font-medium hover:bg-white/5 hover:text-brand-primary">Omnicanalidad</a>
                <a href="/admin/login"
                    class="block w-full text-center mt-4 px-5 py-3 rounded-full bg-brand-primary text-brand-dark font-bold">
                    Acceso Clientes
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-black/40 border-t border-white/5 py-12 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} HablaGrowth. Potenciado por LevelUP Peru.</p>
        </div>
    </footer>

</body>

</html>