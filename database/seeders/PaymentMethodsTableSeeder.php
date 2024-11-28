<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('payment_methods')->insert([
            [
                'name' => 'Virtual Accounts',
                'description' => 'Payment through bank virtual accounts.',
            ],
            [
                'name' => 'Gopay',
                'description' => 'Payment method using Gopay.',
            ],
            [
                'name' => 'Bank Transfer',
                'description' => 'Direct transfer from one bank account to another.',
            ],
            [
                'name' => 'Cash on Delivery',
                'description' => 'Pay for the order when it arrived.',
            ],
            [
                'name' => 'Jenius',
                'description' => 'Payment method using Jenius.',
            ],
        ]);
    }
}
