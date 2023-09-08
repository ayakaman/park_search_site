@extends('layout')

{{-- メインコンテンツ --}}
@section('contets')
      <h1>New Park Post</h1>
            <form action="/park_search/register" method="post">
                @csrf
                公園名:<input name="name"><br>
                住所:<input name="address" type="text"><br>
                画像:<input id="image" name="image" type=”file”><br>
                遊具の種類:<br>
                    <label><input name="play" type="checkbox" value="1">滑り台</label> /
                    <label><input name="play" type="checkbox" value="2">ブランコ</label> /
                    <label><input name="play" type="checkbox" value="3">鉄棒</label> /
                    <label><input name="play" type="checkbox" value="4">雲梯（うんてい）</label><br>
                    <label><input name="play" type="checkbox" value="5">はん登棒（はんとうぼう）</label> /
                    <label><input name="play" type="checkbox" value="6">スイング遊具</label> /
                    <label><input name="play" type="checkbox" value="7">シーソー</label><br>
                    <label><input name="play" type="checkbox" value="8">砂場</label> /
                    <label><input name="play" type="checkbox" value="9">ジャングルジム</label> /
                    <label><input name="play" type="checkbox" value="10">その他</label><br>
                <button>entry</button>
            </form>

@endsection