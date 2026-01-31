<x-layouts.app>
    <div class="relative py-20 min-h-screen bg-brand-dark">
        <!-- Abstract Bg -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 left-0 w-[800px] h-[800px] bg-brand-secondary/5 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header -->
            <div class="text-center mb-16">
                <span class="text-brand-secondary font-bold tracking-widest uppercase text-sm">Managed Chatwoot
                    Services</span>
                <h1 class="text-4xl md:text-5xl font-extrabold mt-2 mb-6 text-white">
                    Omnicanalidad <span class="text-gradient">Total</span>
                </h1>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                    Atiende a tus clientes donde ellos estén. WhatsApp, Facebook, Instagram y Webchat en una sola
                    pantalla.
                </p>
            </div>

            <!-- Content Grid -->
            <div class="grid md:grid-cols-2 gap-12 items-center mb-24">
                <!-- Visual/Image Placeholder (Left on desktop) -->
                <div
                    class="order-2 md:order-1 glass p-2 rounded-2xl bg-gradient-to-br from-brand-secondary/20 to-brand-dark aspect-square flex items-center justify-center relative shadow-[0_0_50px_rgba(212,175,55,0.2)]">
                    <!-- Stylized Chat SVG -->
                    <svg class="w-2/3 h-2/3 text-brand-secondary opacity-80" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    <div class="absolute inset-0 bg-brand-secondary/10 rounded-2xl blur-xl -z-10"></div>
                </div>

                <div class="order-1 md:order-2 space-y-8">
                    <div class="glass p-6 rounded-xl border-l-4 border-brand-secondary">
                        <h3 class="text-xl font-bold text-white mb-2">Bandeja Compartida</h3>
                        <p class="text-gray-400">Todo tu equipo de soporte y ventas en un solo lugar. Asigna
                            conversaciones, añade notas y etiqueta chats.</p>
                    </div>
                    <div class="glass p-6 rounded-xl border-l-4 border-brand-secondary">
                        <h3 class="text-xl font-bold text-white mb-2">Chatbots Híbridos</h3>
                        <p class="text-gray-400">Automatiza la primera respuesta y deriva a agentes humanos solo cuando
                            sea necesario.</p>
                    </div>
                    <div class="glass p-6 rounded-xl border-l-4 border-brand-secondary">
                        <h3 class="text-xl font-bold text-white mb-2">Reportes Detallados</h3>
                        <p class="text-gray-400">Mide tiempos de respuesta, satisfacción del cliente y productividad de
                            tus agentes.</p>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="glass p-12 rounded-3xl text-center border-t border-brand-secondary/30">
                <h2 class="text-3xl font-bold text-white mb-6">¿Listo para conectar?</h2>
                <a href="/#pricing"
                    class="inline-block px-10 py-4 bg-brand-secondary text-brand-dark font-bold rounded-full hover:bg-white hover:text-brand-dark transition-all duration-300 transform hover:scale-105">
                    Ver Planes Omnicanal
                </a>
            </div>
        </div>
    </div>
</x-layouts.app>