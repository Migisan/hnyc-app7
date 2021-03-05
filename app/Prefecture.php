<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    /**
     * モデルと関連しているテーブル指定
     *
     * @var string
     */
    protected $table = 'prefecture';

    /**
     * 市町村リレーション(従)
     *
     * @return void
     */
    public function citys(){
        return $this->hasMany('App\City', 'prefecture_id', 'id');
    }
    
    /**
     * 差出人リレーション(従)
     *
     * @return void
     */
    public function froms(){
        return $this->hasMany('App\From', 'prefecture_id', 'id');
    }
    
    /**
     * 宛先人リレーション(従)
     *
     * @return void
     */
    public function destinations(){
        return $this->hasMany('App\Destination', 'prefecture_id', 'id');
    }
}
