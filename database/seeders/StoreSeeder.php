<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Store;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('store')->insert([
            'NamaProduk' => 'Gucci',
            'Catalogue' => 'Aksesoris',
            'Harga' => '10000',
        ]);
    }
}
