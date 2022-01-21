<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddCategorirs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'title' => "Instagramm",
                'alias' => 'instagramm'
            ],
            [
                'title' => "Facebook",
                'alias' => 'facebook'
            ]
        ]);
    }
}
