<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    
    {
      
DB::table('Produtos')->insert([
    'name' => 'Camiseta',
    'price' => 59.9,
    'quantity' => 20,
]);
    }
}
