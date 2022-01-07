@extends('layouts.app')


@section('content')
<center>
<div class="container-fluid">
<h2>création d'un post dans la base de donnee</h2>
<form method="POST" action="{{route('store.create')}}">
    @csrf
    <input type="text" name="title" class="border-gray-500 border-2">
    <textarea name="content" cols="20" rows="10" class="border-gray-500 border-2"> </textarea>
    <button type="submit" class ="bg-green-500">creer le post</button>
</form>
</div>
</center>
@endsection