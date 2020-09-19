<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_ratings')->insert([
            'tier' => 'Excelente'
        ]);

        DB::table('type_ratings')->insert([
            'tier' => 'Bueno'
        ]);

        DB::table('type_ratings')->insert([
            'tier' => 'Promedio'
        ]);

        DB::table('type_ratings')->insert([
            'tier' => 'Pobre'
        ]);

        DB::table('type_ratings')->insert([
            'tier' => 'Muy pobre'
        ]);
    }
}
