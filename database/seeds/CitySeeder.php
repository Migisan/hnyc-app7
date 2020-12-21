<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
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
        // DB::table('city')->truncate();
        $now = new DateTime();

        /*
         * データ挿入
         */
        DB::table('city')->insert([
            'id'   => 1,
            'name' => '大阪市',
            'kana' => 'おおさかし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 2,
            'name' => '堺市',
            'kana' => 'さかいし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 3,
            'name' => '岸和田市',
            'kana' => 'きしわだし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 4,
            'name' => '豊中市',
            'kana' => 'とよなかし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 5,
            'name' => '池田市',
            'kana' => 'いけだし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 6,
            'name' => '吹田市',
            'kana' => 'すいたし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 7,
            'name' => '泉大津市',
            'kana' => 'いずみおおつし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 8,
            'name' => '高槻市',
            'kana' => 'たかつきし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 9,
            'name' => '貝塚市',
            'kana' => 'かいづかし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 10,
            'name' => '守口市',
            'kana' => 'もりぐちし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 11,
            'name' => '枚方市',
            'kana' => 'ひらかたし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 12,
            'name' => '茨木市',
            'kana' => 'いばらきし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 13,
            'name' => '八尾市',
            'kana' => 'やおし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 14,
            'name' => '八尾市',
            'kana' => 'やおし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 15,
            'name' => '泉佐野市',
            'kana' => 'いずみさのし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 16,
            'name' => '富田林市',
            'kana' => 'とんだばやしし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 17,
            'name' => '寝屋川市',
            'kana' => 'ねやがわし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 18,
            'name' => '河内長野市',
            'kana' => 'かわちながのし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 19,
            'name' => '松原市',
            'kana' => 'まつばらし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 20,
            'name' => '松原市',
            'kana' => 'まつばらし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 21,
            'name' => '大東市',
            'kana' => 'だいとうし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 22,
            'name' => '和泉市',
            'kana' => 'いずみし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 23,
            'name' => '箕面市',
            'kana' => 'みのおし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 24,
            'name' => '柏原市',
            'kana' => 'かしわらし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 25,
            'name' => '羽曳野市',
            'kana' => 'はびきのし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 26,
            'name' => '門真市',
            'kana' => 'かどまし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 27,
            'name' => '摂津市',
            'kana' => 'せっつし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 28,
            'name' => '高石市',
            'kana' => 'たかいしし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 29,
            'name' => '藤井寺市',
            'kana' => 'ふじいでらし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 30,
            'name' => '東大阪市',
            'kana' => 'ひがしおおさかし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 31,
            'name' => '泉南市',
            'kana' => 'せんなんし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 32,
            'name' => '四條畷市',
            'kana' => 'しじょうなわてし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 33,
            'name' => '交野市',
            'kana' => 'かたのし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 34,
            'name' => '大阪狭山市',
            'kana' => 'おおさかさやまし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 35,
            'name' => '阪南市',
            'kana' => 'はんなんし',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 36,
            'name' => '島本町',
            'kana' => 'しまもとちょう',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 37,
            'name' => '豊能町',
            'kana' => 'とよのちょう',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 38,
            'name' => '能勢町',
            'kana' => 'のせちょう',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 39,
            'name' => '忠岡町',
            'kana' => 'ただおかちょう',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 40,
            'name' => '熊取町',
            'kana' => 'くまとりちょう',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 41,
            'name' => '田尻町',
            'kana' => 'たじりちょう',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 42,
            'name' => '岬町',
            'kana' => 'みさきちょう',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 43,
            'name' => '太子町',
            'kana' => 'たいしちょう',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 44,
            'name' => '河南町',
            'kana' => 'かなんちょう',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 45,
            'name' => '千早赤阪村',
            'kana' => 'ちはやあかさかむら',
            'prefecture_id' => 27,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 46,
            'name' => '神戸市',
            'kana' => 'こうべし',
            'prefecture_id' => 28,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 47,
            'name' => '姫路市',
            'kana' => 'ひめじし',
            'prefecture_id' => 28,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 48,
            'name' => '尼崎市',
            'kana' => 'あまがさきし',
            'prefecture_id' => 28,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 49,
            'name' => '明石市',
            'kana' => 'あかしし',
            'prefecture_id' => 28,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 50,
            'name' => '西宮市',
            'kana' => 'にしのみやし',
            'prefecture_id' => 28,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 51,
            'name' => '洲本市',
            'kana' => 'すもとし',
            'prefecture_id' => 28,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 52,
            'name' => '芦屋市',
            'kana' => 'あしやし',
            'prefecture_id' => 28,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('city')->insert([
            'id'   => 53,
            'name' => '伊丹市',
            'kana' => 'いたみし',
            'prefecture_id' => 28,
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }
}
