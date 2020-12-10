<?php

use Illuminate\Database\Seeder;

class PrefectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * データクリア
         */
        DB::table('prefecture')->truncate();
        $now = new DateTime();

        /*
         * データ挿入
         */
        DB::table('prefecture')->insert([
            'id'   => 1,
            'name' => '北海道',
            'kana' => 'ほっかいどう',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 2,
            'name' => '青森県',
            'kana' => 'あおもりけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 3,
            'name' => '岩手県',
            'kana' => 'いわてけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 4,
            'name' => '宮城県',
            'kana' => 'みやぎけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 5,
            'name' => '秋田県',
            'kana' => 'あきたけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 6,
            'name' => '山形県',
            'kana' => 'やまがたけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 7,
            'name' => '福島県',
            'kana' => 'ふくしまけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 8,
            'name' => '茨城県',
            'kana' => 'いばらきけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 9,
            'name' => '栃木県',
            'kana' => 'とちぎけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 10,
            'name' => '群馬県',
            'kana' => 'ぐんまけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 11,
            'name' => '埼玉県',
            'kana' => 'さいたまけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 12,
            'name' => '千葉県',
            'kana' => 'ちばけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 13,
            'name' => '東京都',
            'kana' => 'とうきょうと',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 14,
            'name' => '神奈川県',
            'kana' => 'かながわけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 15,
            'name' => '新潟県',
            'kana' => 'にいがたけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 16,
            'name' => '富山県',
            'kana' => 'とやまけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 17,
            'name' => '石川県',
            'kana' => 'いしかわけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 18,
            'name' => '福井県',
            'kana' => 'ふくいけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 19,
            'name' => '山梨県',
            'kana' => 'やまなしけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 20,
            'name' => '長野県',
            'kana' => 'ながのけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 21,
            'name' => '岐阜県',
            'kana' => 'ぎふけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 22,
            'name' => '静岡県',
            'kana' => 'しずおかけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 23,
            'name' => '愛知県',
            'kana' => 'あいちけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 24,
            'name' => '三重県',
            'kana' => 'みえけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 25,
            'name' => '滋賀県',
            'kana' => 'しがけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 26,
            'name' => '京都府',
            'kana' => 'きょうとふ',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 27,
            'name' => '大阪府',
            'kana' => 'おおさかふ',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 28,
            'name' => '兵庫県',
            'kana' => 'ひょうごけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 29,
            'name' => '奈良県',
            'kana' => 'ならけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 30,
            'name' => '和歌山県',
            'kana' => 'わかやまけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 31,
            'name' => '鳥取県',
            'kana' => 'とっとりけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 32,
            'name' => '島根県',
            'kana' => 'しまねけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 33,
            'name' => '岡山県',
            'kana' => 'おかやまけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 34,
            'name' => '広島県',
            'kana' => 'ひろしまけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 35,
            'name' => '山口県',
            'kana' => 'やまぐちけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 36,
            'name' => '徳島県',
            'kana' => 'とくしまけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 37,
            'name' => '香川県',
            'kana' => 'かがわけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 38,
            'name' => '愛媛県',
            'kana' => 'えひめけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 39,
            'name' => '高知県',
            'kana' => 'こうちけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 40,
            'name' => '福岡県',
            'kana' => 'ふくおかけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 41,
            'name' => '佐賀県',
            'kana' => 'さがけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 42,
            'name' => '長崎県',
            'kana' => 'ながさきけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 43,
            'name' => '熊本県',
            'kana' => 'くまもとけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 44,
            'name' => '大分県',
            'kana' => 'おおいたけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 45,
            'name' => '宮崎県',
            'kana' => 'みやざきけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 46,
            'name' => '鹿児島県',
            'kana' => 'かごしまけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('prefecture')->insert([
            'id'   => 47,
            'name' => '沖縄県',
            'kana' => 'おきなわけん',
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }
}
