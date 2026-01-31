<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <!-- Welcome Section -->
            <div class="glass p-6 rounded-lg border border-brand-primary/20">
                <h3 class="text-2xl font-bold text-white mb-2">Hola, {{ Auth::user()->name }} 👋</h3>
                <p class="text-gray-400">Bienvenido a tu panel de control. Desde aquí puedes gestionar tus servicios y
                    facturación.</p>
            </div>

            <!-- Active Subscriptions -->
            <div>
                <h4 class="text-lg font-bold text-white mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-brand-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                    </svg>
                    Mis Servicios Activos
                </h4>

                @if($subscriptions->count() > 0)
                    <div class="grid md:grid-cols-2 gap-6">
                        @foreach($subscriptions as $sub)
                            <div
                                class="glass p-6 rounded-xl border-l-4 {{ $sub->status === 'active' ? 'border-green-500' : 'border-red-500' }}">
                                <div class="flex justify-between items-start mb-4">
                                    <div>
                                        <h5 class="text-lg font-bold text-white">{{ $sub->plan->service->name }}</h5>
                                        <p class="text-brand-primary text-sm">{{ $sub->plan->name }} Plan</p>
                                    </div>
                                    <span
                                        class="px-3 py-1 rounded-full text-xs font-bold {{ $sub->status === 'active' ? 'bg-green-500/20 text-green-400' : 'bg-red-500/20 text-red-400' }}">
                                        {{ ucfirst($sub->status) }}
                                    </span>
                                </div>
                                <div class="flex justify-between text-sm text-gray-400 border-t border-white/5 pt-4">
                                    <span>Próxima renovación:</span>
                                    <span
                                        class="text-white">{{ $sub->next_renew_date ? $sub->next_renew_date->format('d M, Y') : 'N/A' }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="glass p-8 rounded-xl text-center border-dashed border-2 border-white/10">
                        <p class="text-gray-400 mb-4">No tienes servicios activos actualmente.</p>
                        <a href="{{ route('home') }}#pricing"
                            class="inline-block px-6 py-2 bg-brand-primary text-brand-dark rounded-full font-bold hover:bg-white transition-colors">
                            Contratar Servicio
                        </a>
                    </div>
                @endif
            </div>

            <!-- Invoices / Billing -->
            <div>
                <h4 class="text-lg font-bold text-white mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-brand-secondary" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Historial de Facturación
                </h4>

                <div class="glass overflow-hidden rounded-xl">
                    @if($invoices->count() > 0)
                        <table class="w-full text-left">
                            <thead class="bg-black/20 text-gray-400 text-xs uppercase">
                                <tr>
                                    <th class="px-6 py-3">ID</th>
                                    <th class="px-6 py-3">Fecha</th>
                                    <th class="px-6 py-3">Monto</th>
                                    <th class="px-6 py-3">Estado</th>
                                    <th class="px-6 py-3">Acción</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-white/5">
                                @foreach($invoices as $invoice)
                                    <tr class="text-gray-300 text-sm hover:bg-white/5 transition-colors">
                                        <td class="px-6 py-4">#{{ $invoice->id }}</td>
                                        <td class="px-6 py-4">{{ $invoice->created_at->format('d M, Y') }}</td>
                                        <td class="px-6 py-4 font-bold text-white">
                                            {{ $invoice->currency }} {{ $invoice->amount }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="px-2 py-1 rounded text-xs {{ $invoice->status === 'paid' ? 'text-green-400 bg-green-500/10' : 'text-yellow-400 bg-yellow-500/10' }}">
                                                {{ ucfirst($invoice->status) }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <button class="text-brand-primary hover:text-white">Descargar</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="p-6 text-center text-gray-500">
                            No hay facturas disponibles.
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</x-app-layout>