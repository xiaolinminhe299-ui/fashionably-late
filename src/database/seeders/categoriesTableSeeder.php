<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
                // データを削除
                DB::table('categories')->delete();

                $param = [
                'id' => 1,
                'content' => 'Product Inquiry', // お問い合わせの種類
                'created_at' => now(),
                'updated_at' => now(),
                ];
                \DB::table('categories')->insert($param);

                $param = [
                'id' => 2,
                'content' => 'Technical Support', // お問い合わせの種類
                'created_at' => now(),
                'updated_at' => now(),
                ];
                \DB::table('categories')->insert($param);

                $param = [
                'id' => 3,
                'content' => 'Feedback', // お問い合わせの種類
                'created_at' => now(),
                'updated_at' => now(),
                ];
                \DB::table('categories')->insert($param);


    }
}
