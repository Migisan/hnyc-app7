<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * データ初期設定
         */
        // DB::table('users')->truncate();
        $now = new DateTime();

        /*
         * データ挿入
         */
        DB::table('users')->insert([
            'id'   => 1,
            'l_name' => 'テスト',
            'f_name' => 'ユーザー',
            'email' => 'test-user@test.com',
            'password' => Hash::make('Tu123456'),
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }
}
