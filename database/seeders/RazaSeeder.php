<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RazaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['raza'=>'Holstein','created_at' => now(),'updated_at' => now()],
            ['raza'=>'Angus','created_at' => now(),'updated_at' => now()],
            ['raza'=>'Brahman americano','created_at' => now(),'updated_at' => now()],
            ['raza'=>'Simmental','created_at' => now(),'updated_at' => now()],
            ['raza'=>'Charolesa','created_at' => now(),'updated_at' => now()],
            ['raza'=>'Nelore','created_at' => now(),'updated_at' => now()],
            ['raza'=>'Hereford','created_at' => now(),'updated_at' => now()],
            ['raza'=>'Limousin','created_at' => now(),'updated_at' => now()],
            ['raza'=>'Jersey','created_at' => now(),'updated_at' => now()],
        ];
        DB::table('razas')->insert($data);
    }
}
