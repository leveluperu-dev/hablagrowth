<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin User
        \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@hablagrowth.online',
            'password' => bcrypt('password'),
        ]);

        // Services
        $automation = \App\Models\Service::create([
            'name' => 'Automation Services',
            'slug' => 'automation',
            'description' => 'Managed n8n workflows for business automation.',
        ]);

        $omnichannel = \App\Models\Service::create([
            'name' => 'Omnichannel Services',
            'slug' => 'omnichannel',
            'description' => 'Unified customer communication via Chatwoot.',
        ]);

        // Automation Plans
        $automation->plans()->create([
            'name' => 'Startup',
            'price_pen' => 99.00,
            'price_usd' => 29.00,
            'features' => ['5 Workflows', '1,000 Executions', 'Email Support'],
        ]);

        $automation->plans()->create([
            'name' => 'Growth',
            'price_pen' => 199.00,
            'price_usd' => 59.00,
            'features' => ['20 Workflows', '10,000 Executions', 'Priority Support', 'Webhooks'],
        ]);

        $automation->plans()->create([
            'name' => 'Enterprise',
            'price_pen' => 499.00,
            'price_usd' => 149.00,
            'features' => ['Unlimited Workflows', 'Unlimited Executions', 'Dedicated Account Manager', 'SLA'],
        ]);

        // Omnichannel Plans
        $omnichannel->plans()->create([
            'name' => 'Teams',
            'price_pen' => 149.00,
            'price_usd' => 45.00,
            'features' => ['3 Agents', 'WhatsApp & FB', 'Basic Reports'],
        ]);

        $omnichannel->plans()->create([
            'name' => 'Business',
            'price_pen' => 299.00,
            'price_usd' => 89.00,
            'features' => ['10 Agents', 'All Channels', 'Advanced Reports', 'Chatbots'],
        ]);
    }
}
