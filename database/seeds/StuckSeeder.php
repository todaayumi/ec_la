<?php

use Illuminate\Database\Seeder;

class StuckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stucks')->insert([
            'title' => 'ぬいぐるみ',
            'price' => '700',
            'caption' => '熊のぬいぐるみです',
        ]);

        DB::table('stucks')->insert([
            'title' => '小説',
            'price' => '300',
            'caption' => '文庫本です',
        ]);

        DB::table('stucks')->insert([
            'title' => 'サイダー',
            'price' => '100',
            'caption' => '瓶入りサイダーです',
        ]);
    }
}
