<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $subscriptions = $user->subscriptions()->with(['plan.service'])->orderBy('status')->get();

        // Get invoices via subscriptions
        $invoices = \App\Models\Invoice::whereIn('subscription_id', $subscriptions->pluck('id'))
            ->latest()
            ->take(5)
            ->get();

        return view('dashboard', compact('subscriptions', 'invoices'));
    }
}
