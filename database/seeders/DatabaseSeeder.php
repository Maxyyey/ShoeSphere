<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Seller;
use App\Models\Buyer;
use App\Models\Admin;
use App\Models\Transaction;
use App\Models\Product; // Import the Product model

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Seed users
        User::factory(10)->create();

        // Seed buyers
        Buyer::factory(5)->create();

        // Seed admins
        Admin::factory(3)->create();

        // Seed transactions
        Transaction::factory(20)->create();

        // Seed products
        Product::factory(50)->create();
    }
}
