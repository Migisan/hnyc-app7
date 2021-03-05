<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;
use Illuminate\Support\Facades\Auth;


class DestinationController extends Controller
{
    /**
     * 宛先人管理画面の表示
     *
     * @return view
     */
    public function index(){
        return view('destination.index');
    }

    /**
     * 宛先人一覧
     *
     * @return json
     */
    public function json(){
        return Destination::where('user_id', Auth::id())->with('prefecture', 'city')->get()->toJson();
    }

    /**
     * 宛先人登録処理
     *
     * @param Request $request
     * @return redirect
     */
    public function create(Request $request){
        // DB
        $destination = new Destination;
        $input = $request->all();
        $user = Auth::id();
        $input['user_id'] = $user;
        
        // 保存
        $destination->fill($input)->save();

        // json
        return response()->json([
            'result' => "success",
            'request' => $request
        ]);
    }

    /**
     * 更新フォームセット
     *
     * @param $id
     * @return json
     */
    public function set_update($id){
        return Destination::where('id', $id)->where('user_id', Auth::id())->first()->toJson();
    }

    /**
     * 宛先人更新
     *
     * @param Request $request
     * @param $id
     * @return json
     */
    public function update(Request $request, $id){
        // DB
        $destination = Destination::find($id);
        $input = $request->all();
        $user = Auth::id();
        $input['user_id'] = $user;
        
        // 保存
        $destination->fill($input)->save();

        // json
        return response()->json([
            'result' => "success",
            'request' => $request
        ]);
    }

    /**
     * 宛先人検索
     *
     * @param Request $request
     * @return json
     */
    public function search(Request $request){
        $params = $request->all();
        $destination = Destination::where('user_id', Auth::id());
        
        if($request->l_name){
            $destination->searchLastName($request->l_name);
        }
        if($request->f_name){
            $destination->searchFirstName($request->f_name);
        }
        if($request->prefecture_id){
            $destination->searchPrefecture($request->prefecture_id);
        }
        if($request->city_id){
            $destination->searchCity($request->city_id);
        }
        if($request->address_etc){
            $destination->searchAddressEtc($request->address_etc);
        }
        if($request->postal_code){
            $destination->searchPostalCode($request->postal_code);
        }
        if($request->favorite){
            $destination->searchFavorite($request->favorite);
        }

        return $destination->with('prefecture', 'city')->get()->toJson();
    }

    /**
     * 宛先人削除
     *
     * @param $id
     * @return json
     */
    public function delete($id){
        // 論理削除
        Destination::find($id)->delete();

        // json
        return response()->json([
            'result' => "success"
        ]);
    }

}
