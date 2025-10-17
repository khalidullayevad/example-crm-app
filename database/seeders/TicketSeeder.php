<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tickets')->insert([
            [
                'customer_id' => 1,
                'subject' => 'Internet not working',
                'description' => 'My internet connection is down since morning.',
                'status' => 'new',
                'manager_response_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 2,
                'subject' => 'Account login issue',
                'description' => 'I forgot my password and cannot log in.',
                'status' => 'processed',
                'manager_response_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 3,
                'subject' => 'Payment failed',
                'description' => 'Tried to pay via card but it failed.',
                'status' => 'not processed',
                'manager_response_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
