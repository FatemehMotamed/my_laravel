<?php

namespace Database\Seeders;

use App\Models\DigitalType;
use Illuminate\Database\Seeder;

class DigitalTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types=[
            ['name'=>'ebook'],
            ['name'=>'audio book'],
            ['name'=>'magazin'],
            ['name'=>'news paper'],
        ];

        DigitalType::insert($types);
    }
}
