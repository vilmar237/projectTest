
@extends('layouts.app')

@section('content')
      @if($posts->count()>0)

        @foreach($posts as $post)
         <center> <h3><a href="{{route('post.show',['id' =>$post->id]) }}">  {{ $post->title }}</a></h3></center>
        @endforeach
      @else
        <span>Aucun element à afficher</span>
      @endif
@endsection
