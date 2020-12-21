<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class From extends Model
{
    /**
     * モデルと関連しているテーブル指定
     *
     * @var string
     */
    protected $table = 'from';

    /*
     * 都道府県リレーション(主)
     */
    public function prefecture(){
        return $this->belongsTo('App\Prefecture', 'prefecture_id', 'id');
    }

    /*
     * 市町村リレーション(主)
     */
    public function city(){
        return $this->belongsTo('App\City', 'city_id', 'id');
    }

    /*
     * ユーザーリレーション(主)
     */
    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

}
