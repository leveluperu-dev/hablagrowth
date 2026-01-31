<x-layouts.app>
    <!-- Hero Section -->
    <div class="relative overflow-hidden min-h-screen flex items-center justify-center">
        <!-- Abstract Background -->
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-brand-primary/20 rounded-full blur-[120px]"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-brand-secondary/10 rounded-full blur-[120px]"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6">
                <span class="block">Revoluciona tu Negocio con</span>
                <span class="text-gradient">Automatización Inteligente</span>
            </h1>
            <p class="mt-4 max-w-3xl mx-auto text-xl text-gray-300 mb-10">
                Centraliza tus comunicaciones y automatiza tus flujos de trabajo. HablaGrowth te ofrece la tecnología de
                las grandes empresas, simplificada para ti.
            </p>
            <div class="flex justify-center gap-4">
                <a href="https://wa.me/51945178963?text=Hola,%20me%20interesa%20conocer%20m%C3%A1s%20sobre%20las%20soluciones%20de%20HablaGrowth."
                    target="_blank"
                    class="px-8 py-4 bg-brand-primary text-brand-dark font-bold rounded-full hover:bg-brand-accent transition-all duration-300 shadow-[0_0_20px_rgba(6,182,212,0.5)]">
                    Explorar Soluciones
                </a>
                <a href="#pricing"
                    class="px-8 py-4 border border-white/20 hover:bg-white/10 rounded-full font-medium transition-all">
                    Ver Planes
                </a>
            </div>
        </div>
    </div>

    <!-- Features / Services Section -->
    <div id="services" class="py-24 relative bg-black/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Nuestras Soluciones</h2>
                <p class="text-gray-400">Tecnología de punta para escalar tu operación.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Automation Card -->
                <div class="glass p-8 rounded-2xl hover:border-brand-primary/50 transition-all duration-300 group">
                    <div
                        class="h-14 w-14 bg-brand-primary/20 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-brand-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-white">Automatización de Procesos</h3>
                    <p class="text-gray-400 mb-6">Integra tus aplicaciones, elimina tareas repetitivas y ahorra cientos
                        de horas con flujos de trabajo inteligentes (n8n Managed).</p>
                    <ul class="space-y-2 mb-8 text-gray-300">
                        <li class="flex items-center"><span class="text-brand-primary mr-2">✓</span> Conexión con +200
                            Apps</li>
                        <li class="flex items-center"><span class="text-brand-primary mr-2">✓</span> Webhooks
                            Personalizados</li>
                        <li class="flex items-center"><span class="text-brand-primary mr-2">✓</span> Sin Límites de
                            Ejecución (Según plan)</li>
                    </ul>
                    <a href="https://wa.me/51945178963?text=Hola,%20quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20el%20servicio%20de%20Automatizaci%C3%B3n%20de%20Procesos."
                        target="_blank"
                        class="text-brand-primary font-bold hover:text-brand-accent flex items-center group-hover:translate-x-2 transition-transform">
                        Saber más <span>→</span>
                    </a>
                </div>

                <!-- Omnichannel Card -->
                <div class="glass p-8 rounded-2xl hover:border-brand-secondary/50 transition-all duration-300 group">
                    <div
                        class="h-14 w-14 bg-brand-secondary/20 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-brand-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-white">Omnicanalidad Total</h3>
                    <p class="text-gray-400 mb-6">Centraliza WhatsApp, Facebook, Instagram y Webchat en una sola bandeja
                        de entrada compartida para todo tu equipo (Chatwoot Managed).</p>
                    <ul class="space-y-2 mb-8 text-gray-300">
                        <li class="flex items-center"><span class="text-brand-secondary mr-2">✓</span> Bandeja Unificada
                        </li>
                        <li class="flex items-center"><span class="text-brand-secondary mr-2">✓</span> Bots y Respuestas
                            Rápidas</li>
                        <li class="flex items-center"><span class="text-brand-secondary mr-2">✓</span> Reportes de
                            Rendimiento</li>
                    </ul>
                    <a href="https://wa.me/51945178963?text=Hola,%20quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20el%20servicio%20de%20Omnicanalidad%20Total."
                        target="_blank"
                        class="text-brand-secondary font-bold hover:text-white flex items-center group-hover:translate-x-2 transition-transform">
                        Saber más <span>→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Section -->
    <div id="pricing" class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-4">Planes Flexibles</h2>
            <p class="text-gray-400">Crece a tu ritmo. Cambia de plan cuando lo necesites.</p>

            <!-- Currency Toggle -->
            <div class="mt-8 inline-flex bg-white/5 rounded-full p-1 border border-white/10"
                x-data="{ currency: 'PEN' }">
                <button @click="currency = 'PEN'"
                    :class="{ 'bg-brand-primary text-brand-dark': currency === 'PEN', 'text-gray-400': currency !== 'PEN' }"
                    class="px-6 py-2 rounded-full font-bold transition-all">Soles (S/)</button>
                <button @click="currency = 'USD'"
                    :class="{ 'bg-brand-primary text-brand-dark': currency === 'USD', 'text-gray-400': currency !== 'USD' }"
                    class="px-6 py-2 rounded-full font-bold transition-all">Dólares ($)</button>
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach($plans as $plan)
                <div
                    class="glass p-8 rounded-2xl border-t-4 {{ $plan->name === 'Growth' ? 'border-brand-primary transform md:-translate-y-4 shadow-[0_0_30px_rgba(6,182,212,0.15)] relative' : ($plan->name === 'Enterprise' ? 'border-brand-secondary' : 'border-gray-500') }}">

                    @if($plan->name === 'Growth')
                        <div
                            class="absolute top-0 right-0 bg-brand-primary text-brand-dark text-xs font-bold px-3 py-1 rounded-bl-lg">
                            POPULAR</div>
                    @endif

                    <h3
                        class="text-xl font-bold {{ $plan->name === 'Enterprise' ? 'text-brand-secondary' : ($plan->name === 'Growth' ? 'text-white' : 'text-gray-300') }}">
                        {{ $plan->name }}
                    </h3>
                    <p class="text-sm text-brand-primary mb-4">{{ $plan->service->name }}</p>

                    <div class="my-6">
                        <span
                            class="text-4xl font-bold {{ $plan->name === 'Growth' ? 'text-brand-primary' : 'text-white' }}"
                            x-text="currency === 'PEN' ? 'S/ {{ $plan->price_pen }}' : '$ {{ $plan->price_usd }}'"></span>
                        <span class="text-gray-500">/mes</span>
                    </div>

                    <ul class="space-y-2 mb-6 text-sm text-gray-400">
                        @if($plan->features)
                            @foreach($plan->features as $feature)
                                <li class="flex items-center">
                                    <span class="text-brand-primary mr-2">✓</span> {{ $feature }}
                                </li>
                            @endforeach
                        @else
                            <li class="italic text-gray-600">Ver detalles del servicio</li>
                        @endif
                    </ul>

                    <a href="https://wa.me/51945178963?text=Hola,%20estoy%20interesado%20en%20el%20plan%20{{ urlencode($plan->name) }}%20de%20{{ urlencode($plan->service->name) }}."
                        target="_blank"
                        class="block text-center w-full py-3 rounded-lg transition-colors font-bold {{ $plan->name === 'Growth' ? 'bg-brand-primary text-brand-dark hover:bg-brand-accent' : ($plan->name === 'Enterprise' ? 'border border-brand-secondary text-brand-secondary hover:bg-brand-secondary/10' : 'border border-white/10') }}">
                        {{ $plan->name === 'Enterprise' ? 'Contactar' : 'Comenzar' }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>