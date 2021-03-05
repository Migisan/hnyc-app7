<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Destination extends Model
{
    use SoftDeletes;
    /**
     * モデルと関連しているテーブル指定
     *
     * @var string
     */
    protected $table = 'destination';

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
        'l_name', 'f_name', 'prefecture_id', 'city_id', 'address_etc', 'postal_code', 'user_id', 'favorite'
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

    /**
     * 姓検索(部分一致)
     * @param $query
     * @param $param
     * @return void
     */
    public function scopeSearchLastName($query, $param){
        return $query->where('l_name', 'LIKE', '%' . $param . '%');
    }
    
    /**
     * 名検索(部分一致)
     * @param $query
     * @param $param
     * @return void
     */
    public function scopeSearchFirstName($query, $param){
        return $query->where('f_name', 'LIKE', '%' . $param . '%');
    }
    
    /**
     * 都道府県検索
     * @param $query
     * @param $param
     * @return void
     */
    public function scopeSearchPrefecture($query, $param){
        return $query->where('prefecture_id', $param);
    }

    /**
     * 市町村検索
     * @param $query
     * @param $param
     * @return void
     */
    public function scopeSearchCity($query, $param){
        return $query->where('city_id', $param);
    }
    
    /**
     * 番地等検索(部分一致)
     * @param $query
     * @param $param
     * @return void
     */
    public function scopeSearchAddressEtc($query, $param){
        return $query->where('address_etc', 'LIKE', '%' . $param . '%');
    }

    /**
     * 郵便番号検索(完全一致)
     * @param $query
     * @param $param
     * @return void
     */
    public function scopeSearchPostalCode($query, $param){
        return $query->where('postal_code', $param);
    }

    /**
     * お気に入り検索
     * @param $query
     * @param $param
     * @return void
     */
    public function scopeSearchFavorite($query, $param){
        return $query->where('favorite', $param);
    }

}
