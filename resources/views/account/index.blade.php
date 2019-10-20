<h1>
    Добро пожаловать {{\Auth::user()->email}}
</h1>
<br>
<a href="{{route('logout')}}">Выйти</a>