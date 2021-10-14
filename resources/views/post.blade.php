@extends('layouts.main')

@section('container')
  <article class="mb-5">
    <h1>{{ $post["title"] }}</h1>
    <br>
    <p>{{ $post["body"] }}</p>
  </article>

  <a href="/posts">Back to Posts</a>
@endsection