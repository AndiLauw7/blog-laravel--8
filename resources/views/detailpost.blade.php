
@extends('layouts.main')


@section('container')

<article class="mt-5">
    <h2>{{ $post["tittle"] }}</h2>
    <h5>{{ $post["author"] }}</h5>
    <p>{{ $post["body"] }}</p>
</article>
    <a href="/post">Back to posts</a>
@endsection