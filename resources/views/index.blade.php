@extends('layout')

{{-- メインコンテンツ --}}
@section('contets')
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
                  <button class='btn bgleft'><span>  L o g i n  </span></button>
              </form>
          </div>
        </main>
@endsection