<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller
{
    public function show(Plan $plan)
    {
        return view('subscribe', compact('plan'));
    }

    public function store(Request $request, Plan $plan)
    {
        $user = Auth::user();

        // Check if already subscribed to this service
        // Simple logic for now: Allow multiple for demo

        // Create Subscription
        $subscription = $user->subscriptions()->create([
            'plan_id' => $plan->id,
            'status' => 'active',
            'start_date' => now(),
            'next_renew_date' => $plan->billing_cycle === 'yearly' ? now()->addYear() : now()->addMonth(),
        ]);

        // Create Invoice (Paid)
        $invoice = $subscription->invoices()->create([
            'amount' => $plan->price_pen, // Default to PEN for demo
            'currency' => 'PEN',
            'status' => 'paid', // Simulate successful payment
        ]);

        return redirect()->route('dashboard')->with('status', '¡Suscripción creada exitosamente!');
    }
}
