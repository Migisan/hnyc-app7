<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class From extends Model
{
    use SoftDeletes;
    /**
     * モデルと関連しているテーブル指定
     *
     * @var string
     */
    protected $table = 'from';

    /**
     * 論理削除カラム
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * ホワイトリスト
     *
     * @var array
     */
    protected $fillable = [
        'l_name', 'f_name', 'prefecture_id', 'city_id', 'address_etc', 'postal_code', 'user_id'
    ];

    /**
     * 都道府県リレーション(主)
     *
     * @return void
     */
    public function prefecture(){
        return $this->belongsTo('App\Prefecture', 'prefecture_id', 'id');
    }
    
    /**
     * 市町村リレーション(主)
     *
     * @return void
     */
    public function city(){
        return $this->belongsTo('App\City', 'city_id', 'id');
    }
    
    /**
     * ユーザーリレーション(主)
     *
     * @return void
     */
    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

}
