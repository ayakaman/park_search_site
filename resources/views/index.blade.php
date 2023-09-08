<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>公園検索サイト</title>
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body>

        <main class='toplogin'>
          <div class='img'></div>
          <div class='login'>
              <h1>Login</h1>
              <div class="error">
               @if ($errors->any())
                   <div>
                   @foreach ($errors->all() as $error)
                       {{ $error }}<br>
                   @endforeach
                   </div>
               @endif
               </div>
              <form action="/login" method="post">
                  @csrf
                  <input class='email' name="email" placeholder="email" value="{{ old('email') }}"><br>
                  <input class='pass'  name="password" type="password" placeholder="password"><br>
                  <button class='btn bgleft'><span> L o g i n </span></button><br>
                  <br>
                  <button class='btn bgleft'><span>Loginしないで使う</span></button>
              </form>
          </div>
        </main>
    </body>
</html>