<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Aqua 330ml',
            'name' => 'Air Mineral - Aqua 330ml',
        ]);
        Product::create([
            'name' => 'Glade Air Freshener 225ml',
            'name' => 'Pewangi Ruanagan - Glade Air Freshener 225ml',
        ]);
    }
}
