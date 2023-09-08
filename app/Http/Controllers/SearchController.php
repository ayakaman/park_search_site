<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Park as ParkModel;
use App\Models\Image as ImageModel;
use App\Http\Requests\ParkRegisterPostRequest;
use Illuminate\Support\Facades\Auth;


class SearchController extends Controller
{
    /**
     * トップページ表示
     *
     * @return \Illuminate\View\View
     */
    public function top()
    {
        return view('/park_search/top');
    }

     /**
     * 検索画面を表示
     *
     * @return \Illuminate\View\View
     */
    public function entry()
    {
        return view('/park_search/entry');
    }

     public function register(ParkRegisterPostRequest $request)
     {
         // validate済みのデータの取得
        $datum = $request->validated();

        $datum['user_id'] = Auth::id();

        // 画像ファイルの保存場所指定
        if(request('image')){
            $filename=request()->file('image')->getClientOriginalName();
            $inputs['image']=request('image')->storeAs('public/images', $filename);
        }

        // postを保存
        $post->create($inputs);


        // テーブルへのINSERT
        try {
            $r = ParkModel::create($datum);
        } catch(\Throwable $e) {
            echo $e->getMessage();
            exit;
        }

        return redirect('/');

     }


}