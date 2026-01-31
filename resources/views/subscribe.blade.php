<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="glass p-8 rounded-2xl border border-brand-primary/30">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-white mb-2">Confirmar Suscripción</h2>
                    <p class="text-gray-400">Estás a un paso de potenciar tu negocio.</p>
                </div>

                <div class="bg-black/30 p-6 rounded-xl border border-white/5 mb-8">
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <h3 class="text-xl font-bold text-white">{{ $plan->service->name }}</h3>
                            <p class="text-brand-primary">{{ $plan->name }} Plan</p>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl font-bold text-white">S/ {{ $plan->price_pen }}</p>
                            <p class="text-xs text-gray-500">/ mes</p>
                        </div>
                    </div>

                    <ul class="space-y-2 mt-4 text-sm text-gray-400 border-t border-white/5 pt-4">
                        @if($plan->features)
                            @foreach($plan->features as $feature)
                                <li class="flex items-center">
                                    <span class="text-green-400 mr-2">✓</span> {{ $feature }}
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>

                <div class="space-y-4">
                    <!-- Simulate Payment Method -->
                    <div
                        class="p-4 border border-brand-primary/50 rounded-lg bg-brand-primary/5 flex items-center justify-between">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-brand-primary mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                            <span class="text-white font-medium">Tarjeta de Crédito (Simulado)</span>
                        </div>
                        <span class="text-gray-500 text-sm">**** 4242</span>
                    </div>

                    <form action="{{ route('subscribe.store', $plan) }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="w-full py-4 bg-brand-primary text-brand-dark font-bold rounded-lg hover:bg-white transition-colors text-lg shadow-[0_0_20px_rgba(6,182,212,0.3)]">
                            Pagar y Suscribirse
                        </button>
                    </form>

                    <div class="text-center">
                        <a href="{{ route('home') }}#pricing"
                            class="text-sm text-gray-500 hover:text-white transition-colors">Cancelar y Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>