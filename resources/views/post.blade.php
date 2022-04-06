

@extends('layouts.main')

@section('container')

@foreach ( $posts as $post )

<h2 class="mt-5"><a href="/post/{{$post["slug"]}}">{{ $post["tittle"] }}</a></h2>

<h6>{{ $post["author"] }}</h6>

<p>{{ $post["body"] }}</p>

@endforeach
    

@endsection
   
