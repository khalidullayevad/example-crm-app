<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'name' => 'Diana Khalidullayeva',
                'phone' => '+77000000001',
                'email' => 'diana@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'John Doe',
                'phone' => '+77000000002',
                'email' => 'john@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'phone' => '+77000000003',
                'email' => 'jane@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
