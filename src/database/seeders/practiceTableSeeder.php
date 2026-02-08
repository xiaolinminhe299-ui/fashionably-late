<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class practiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); // 外部キー制約を無効化
        DB::table('practice')->truncate(); // テーブルクリア
        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); // 外部キー制約を有効化
                $param = [
                'id' => 1,
                'category_id' => 1,
                'first_name' => 'Taro',
                'last_name' => 'Yamada',
                'gender' => 1, // 男性
                'email' => 'taro.yamada@example.com',
                'tel' => '09012345678',
                'address' => 'Tokyo, Japan',
                'building' => 'ABC Building',
                'detail' => 'Test detail for Taro Yamada.',
                'created_at' => now(),
                'updated_at' => now(),
                ];
               \DB::table('practice')->insert($param);

                $param = [
                'id' => 2,
                'category_id' => 2,
                'first_name' => 'Hanako',
                'last_name' => 'Tanaka',
                'gender' => 2, // 女性
                'email' => 'hanako.tanaka@example.com',
                'tel' => '08087654321',
                'address' => 'Osaka, Japan',
                'building' => 'XYZ Building',
                'detail' => 'Test detail for Hanako Tanaka.',
                'created_at' => now(),
                'updated_at' => now(),
                ];
               \DB::table('practice')->insert($param);
    }
}
