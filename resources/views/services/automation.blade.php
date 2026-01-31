<x-layouts.app>
    <div class="relative py-20 min-h-screen bg-brand-dark">
        <!-- Abstract Bg -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-brand-primary/5 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header -->
            <div class="text-center mb-16">
                <span class="text-brand-primary font-bold tracking-widest uppercase text-sm">Managed n8n Services</span>
                <h1 class="text-4xl md:text-5xl font-extrabold mt-2 mb-6 text-white">
                    Automatización de <span class="text-gradient">Clase Mundial</span>
                </h1>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                    Deja de perder tiempo en tareas manuales. Conectamos tus herramientas favoritas para que tu negocio
                    funcione en piloto automático.
                </p>
            </div>

            <!-- Content Grid -->
            <div class="grid md:grid-cols-2 gap-12 items-center mb-24">
                <div class="space-y-8">
                    <div class="glass p-6 rounded-xl border-l-4 border-brand-primary">
                        <h3 class="text-xl font-bold text-white mb-2">Integraciones Ilimitadas</h3>
                        <p class="text-gray-400">Conectamos tu CRM, correo, hojas de cálculo y más de 200 aplicaciones
                            sin escribir código.</p>
                    </div>
                    <div class="glass p-6 rounded-xl border-l-4 border-brand-primary">
                        <h3 class="text-xl font-bold text-white mb-2">Webhooks Personalizados</h3>
                        <p class="text-gray-400">Recibe datos en tiempo real de cualquier fuente y dispara acciones
                            instantáneas.</p>
                    </div>
                    <div class="glass p-6 rounded-xl border-l-4 border-brand-primary">
                        <h3 class="text-xl font-bold text-white mb-2">Infraestructura Gestionada</h3>
                        <p class="text-gray-400">Olvídate de servidores. Nosotros mantenemos tu instancia de n8n segura,
                            actualizada y escalable.</p>
                    </div>
                </div>

                <!-- Visual/Image Placeholder -->
                <div
                    class="glass p-2 rounded-2xl bg-gradient-to-br from-brand-primary/20 to-brand-dark aspect-square flex items-center justify-center relative shadow-[0_0_50px_rgba(6,182,212,0.2)]">
                    <!-- Stylized Nodes SVG -->
                    <svg class="w-2/3 h-2/3 text-brand-primary opacity-80" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.5">
                        <circle cx="6" cy="6" r="3" />
                        <circle cx="18" cy="18" r="3" />
                        <path d="M8.5 8.5l7 7" />
                        <circle cx="18" cy="6" r="3" />
                        <path d="M8.5 15.5l7 -7" />
                        <circle cx="6" cy="18" r="3" />
                        <path d="M8.5 6l7 0" />
                    </svg>
                    <div class="absolute inset-0 bg-brand-primary/10 rounded-2xl blur-xl -z-10"></div>
                </div>
            </div>

            <!-- CTA -->
            <div class="glass p-12 rounded-3xl text-center border-t border-brand-primary/30">
                <h2 class="text-3xl font-bold text-white mb-6">¿Listo para automatizar?</h2>
                <a href="/#pricing"
                    class="inline-block px-10 py-4 bg-brand-primary text-brand-dark font-bold rounded-full hover:bg-white hover:text-brand-dark transition-all duration-300 transform hover:scale-105">
                    Ver Planes de Automatización
                </a>
            </div>
        </div>
    </div>
</x-layouts.app>