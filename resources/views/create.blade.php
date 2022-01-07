@extends('layouts.app')


@section('content')
<center>
<div class="container-fluid">
<h2>création d'un post dans la base de donnee</h2>
<form method="POST" action="#">
    <input type="text" name="title" class="border-gray-600 border-2">
    <input type="textarea">
    <button type="submit">creer le post</button>
</form>
</div>
</center>
@endsection