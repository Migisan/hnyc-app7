<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * モデルと関連しているテーブル指定
     *
     * @var string
     */
    protected $table = 'city';

    /*
     * 都道府県リレーション(主)
     */
    public function prefecture(){
        return $this->belongsTo('App\Prefecture', 'prefecture_id', 'id');
    }

    /*
     * 差出人リレーション(従)
     */

    /*
     * 宛先人リレーション(従)
     */

}
