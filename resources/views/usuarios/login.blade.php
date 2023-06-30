<div style="border:1px solid peru; ">
    <h1>Faz o L </h1>
    @if (session('erro'))
    <div>{{session('erro')}} </div>
    @endif


<form action="{{url()->current()}}" method="POST">
    @csrf
    <input type="text" name="name">
    <br>
    <input type="password" name="password">
    <br>
    <input type="submit" value="login">
</form>
</div>
