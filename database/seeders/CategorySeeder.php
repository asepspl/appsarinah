<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['cat_name' => 'Atasan','description'=>'Pakaian untuk bagian atas tubuh, seperti kemeja, blus, atau jaket.'],
            ['cat_name' => 'Bawahan','description'=>'Pakaian untuk bagian bawah tubuh, seperti celana, rok, atau jeans.'],
            ['cat_name' => 'Dress','description'=>'Pakaian satu potong yang biasanya dikenakan oleh wanita, mencakup berbagai gaya dan panjang.'],
            ['cat_name' => 'Outerwear','description'=>'Pakaian luar seperti mantel, jaket, atau blazer yang digunakan untuk melindungi dari cuaca.'],
            ['cat_name' => 'Pakaian Tradisional','description'=>'Pakaian yang mencerminkan budaya dan tradisi tertentu, seperti kebaya, batik, atau sari.'],
            ['cat_name' => 'Pakaian Olahraga','description'=>'Pakaian yang dirancang khusus untuk aktivitas fisik dan olahraga, seperti jersey, celana pendek, atau legging.'],
            ['cat_name' => 'Aksesori','description'=>'Item tambahan yang melengkapi penampilan, seperti topi, syal, ikat pinggang, atau perhiasan.'],
        ];
        DB::table('categories')->insert($categories); 
    }
}
