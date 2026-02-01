<x-layouts.app>
    <!-- Commercial Popup (Exit Intent) -->
    <div x-data="{ 
            show: false,
            init() {
                setTimeout(() => this.show = true, 10000); // Show after 10s
                // Exit intent logic could be added here later if needed
            },
            close() {
                this.show = false;
            }
         }" x-show="show" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/80 backdrop-blur-sm"
        style="display: none;">

        <div
            class="bg-brand-dark border border-brand-primary/30 rounded-2xl max-w-lg w-full p-8 relative shadow-[0_0_50px_rgba(6,182,212,0.3)]">
            <button @click="close" class="absolute top-4 right-4 text-gray-400 hover:text-white">✕</button>

            <div class="text-center mb-6">
                <span
                    class="bg-brand-secondary text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">Oferta
                    Limitada</span>
                <h2 class="text-3xl font-bold text-white mt-4">¿Quieres un 20% OFF? 🎁</h2>
                <p class="text-gray-300 mt-2">Obtén un descuento especial en tu primer año digitalizando tu negocio.</p>
            </div>

            <form action="https://wa.me/51945178963" method="GET" target="_blank" class="space-y-4">
                <div>
                    <input type="text" name="text" hidden value="Hola, quiero mi descuento del 20%. Mi negocio es: ">
                    <label class="block text-sm font-medium text-gray-400 mb-1">Nombre de tu Negocio</label>
                    <input type="text" required placeholder="Ej. Restaurante Sabor Peruano"
                        class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white focus:border-brand-primary focus:ring-1 focus:ring-brand-primary outline-none transition-colors">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-1">¿Qué necesitas mejorar?</label>
                    <select
                        class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white focus:border-brand-primary focus:ring-1 focus:ring-brand-primary outline-none transition-colors">
                        <option value="Ventas">Quiero vender más por WhatsApp</option>
                        <option value="Orden">Quiero ordenar mi caos administrativo</option>
                        <option value="Ambos">Ambos (Plan Completo)</option>
                    </select>
                </div>

                <button type="submit" @click="close"
                    class="w-full bg-brand-primary text-brand-dark font-bold py-4 rounded-xl hover:bg-brand-accent transition-all transform hover:scale-[1.02] shadow-lg">
                    Reclamar Descuento en WhatsApp 👉
                </button>
                <p class="text-xs text-center text-gray-500 mt-4">Sin compromiso. Habla con un humano.</p>
            </form>
        </div>
    </div>

    <!-- Hero Section with Spline 3D -->
    <div class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- 3D Background -->
        <div class="absolute inset-0 z-0">
            <spline-viewer url="https://prod.spline.design/6Wq1Q7YGyM-iab9i/scene.splinecode"></spline-viewer>
        </div>

        <!-- Overlay to ensure text readability -->
        <div
            class="absolute inset-0 bg-brand-dark/80 z-0 bg-gradient-to-b from-transparent via-brand-dark/20 to-brand-dark">
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
            <span
                class="inline-block py-1 px-3 rounded-full bg-brand-primary/10 border border-brand-primary/20 text-brand-primary text-sm font-bold tracking-wide mb-6">
                AGENCIA DIGITAL VS. HABLAGROWTH
            </span>
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 text-white drop-shadow-2xl">
                ¿Tu negocio te controla<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-primary to-brand-secondary">o tú
                    lo controlas?</span>
            </h1>
            <p class="mt-4 max-w-3xl mx-auto text-xl text-gray-200 mb-10 leading-relaxed font-light">
                Olvídate de las agencias tradicionales que solo postean fotos bonito.
                Nosotros instalamos <strong class="text-brand-primary">SISTEMAS</strong> que venden, cobran y atienden
                por ti.
                Modernízate de verdad.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#solutions"
                    class="px-8 py-4 bg-brand-primary text-brand-dark font-bold rounded-full hover:bg-brand-accent transition-all duration-300 shadow-[0_0_20px_rgba(6,182,212,0.5)] transform hover:scale-105">
                    Ver cómo funciona
                </a>
                <a href="https://wa.me/51945178963?text=Hola,%20quiero%20modernizar%20mi%20negocio." target="_blank"
                    class="px-8 py-4 border border-white/30 backdrop-blur-md hover:bg-white/10 rounded-full font-medium transition-all text-white">
                    Hablar con un Experto
                </a>
            </div>
        </div>
    </div>

    <!-- Pain Points Section (Dolores) -->
    <div class="py-24 bg-brand-dark relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">¿Te suena familiar?</h2>
                <p class="text-gray-400 text-lg">La realidad de muchos empresarios peruanos antes de conocernos.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white/5 p-8 rounded-3xl border border-white/10 hover:border-red-500/50 transition-colors"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl mb-4">😫</div>
                    <h3 class="text-xl font-bold text-white mb-3">"No tengo vida"</h3>
                    <p class="text-gray-400">Te pasas el día respondiendo los mismos mensajes de WhatsApp y copiando
                        datos a un Excel. Eres esclavo del teléfono.</p>
                </div>
                <div class="bg-white/5 p-8 rounded-3xl border border-white/10 hover:border-red-500/50 transition-colors"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl mb-4">💸</div>
                    <h3 class="text-xl font-bold text-white mb-3">"Se me van las ventas"</h3>
                    <p class="text-gray-400">Te escriben 10 clientes, respondes tarde a 5 y se olvidan de ti. Pierdes
                        dinero por no responder rápido.</p>
                </div>
                <div class="bg-white/5 p-8 rounded-3xl border border-white/10 hover:border-red-500/50 transition-colors"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="text-4xl mb-4">📉</div>
                    <h3 class="text-xl font-bold text-white mb-3">"Todo es un desorden"</h3>
                    <p class="text-gray-400">No sabes cuánto vendiste hoy, quién debe, ni qué empleado atendió mal a un
                        cliente. Vives a ciegas.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Solutions Section -->
    <div id="solutions" class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-brand-primary/5 skewed-bg"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">La Solución: Modernización Real</h2>
                <p class="text-gray-400 text-lg">No necesitas más "marketing", necesitas SISTEMAS.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Automation Card -->
                <div class="glass p-10 rounded-3xl border-2 border-transparent hover:border-brand-primary/50 transition-all duration-500 group relative overflow-hidden"
                    data-aos="fade-right">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <svg class="w-32 h-32 text-brand-primary" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2L2 7l10 5 10-5-10-5zm0 9l2.5-1.25L12 8.5l-2.5 1.25L12 11zm0 2.5l-5-2.5-5 2.5L12 22l10-8.5-5-2.5-5 2.5z" />
                        </svg>
                    </div>

                    <h3 class="text-3xl font-bold text-white mb-4 group-hover:text-brand-primary transition-colors">
                        Piloto Automático</h3>
                    <p class="text-gray-300 text-lg mb-8 leading-relaxed">
                        Creamos robots de software que hacen el trabajo sucio. Facturación automática, recordatorios de
                        cobro y registro de clientes sin que muevas un dedo.
                    </p>
                    <a href="{{ route('services.automation') }}"
                        class="inline-flex items-center text-brand-primary font-bold text-lg hover:translate-x-2 transition-transform">
                        Ver cómo funciona <span class="ml-2">→</span>
                    </a>
                </div>

                <!-- Omnichannel Card -->
                <div class="glass p-10 rounded-3xl border-2 border-transparent hover:border-brand-secondary/50 transition-all duration-500 group relative overflow-hidden"
                    data-aos="fade-left">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <svg class="w-32 h-32 text-brand-secondary" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z" />
                        </svg>
                    </div>

                    <h3 class="text-3xl font-bold text-white mb-4 group-hover:text-brand-secondary transition-colors">
                        Central de Mando</h3>
                    <p class="text-gray-300 text-lg mb-8 leading-relaxed">
                        Deja de saltar entre WhatsApp, Instagram y Messenger. Ten todo en una sola pantalla profesional
                        para ti y tus vendedores.
                    </p>
                    <a href="{{ route('services.omnichannel') }}"
                        class="inline-flex items-center text-brand-secondary font-bold text-lg hover:translate-x-2 transition-transform">
                        Ver como funciona <span class="ml-2">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Section (Simplified) -->
    <div id="pricing" class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-4">Inversión Transparente</h2>
            <p class="text-gray-400">Sin contratos forzosos. Cancela cuando quieras.</p>

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
                <div class="glass p-8 rounded-2xl border-t-4 {{ $plan->name === 'Growth' ? 'border-brand-primary transform md:-translate-y-4 shadow-[0_0_30px_rgba(6,182,212,0.15)] relative' : 'border-white/10' }}"
                    data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">

                    @if($plan->name === 'Growth')
                        <div
                            class="absolute top-0 right-0 bg-brand-primary text-brand-dark text-xs font-bold px-3 py-1 rounded-bl-lg">
                            MAS VENDIDO</div>
                    @endif

                    <h3 class="text-xl font-bold text-white mb-2">{{ $plan->name }}</h3>
                    <p class="text-sm text-brand-primary mb-6">{{ $plan->service->name }}</p>

                    <div class="mb-6">
                        <span class="text-4xl font-bold text-white"
                            x-text="currency === 'PEN' ? 'S/ {{ $plan->price_pen }}' : '$ {{ $plan->price_usd }}'"></span>
                        <span class="text-gray-500">/mes</span>
                    </div>

                    <ul class="space-y-3 mb-8 text-sm text-gray-300">
                        @if($plan->features)
                            @foreach($plan->features as $feature)
                                <li class="flex items-start">
                                    <span class="text-brand-primary mr-2 mt-0.5">✓</span> {{ $feature }}
                                </li>
                            @endforeach
                        @endif
                    </ul>

                    <a href="https://wa.me/51945178963?text=Hola,%20quiero%20empezar%20con%20el%20plan%20{{ urlencode($plan->name) }}%20de%20{{ urlencode($plan->service->name) }}."
                        target="_blank"
                        class="block text-center w-full py-3 rounded-lg font-bold transition-all {{ $plan->name === 'Growth' ? 'bg-brand-primary text-brand-dark hover:bg-brand-accent' : 'border border-white/20 hover:bg-white/10 text-white' }}">
                        Comenzar Ahora
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>