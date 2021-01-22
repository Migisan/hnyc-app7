<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * モデルと関連しているテーブル指定
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * ホワイトリスト
     *
     * @var array
     */
    protected $fillable = [
        'l_name', 'f_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * 差出人リレーション(従)
     *
     * @return void
     */
    public function froms(){
        return $this->hasMany('App\From', 'user_id', 'id');
    }
    
    /**
     * 宛先人リレーション(従)
     *
     * @return void
     */
    
    /**
     * 送付履歴リレーション(従)
     *
     * @return void
     */
}
