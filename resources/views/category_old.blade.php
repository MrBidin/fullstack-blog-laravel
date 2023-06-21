@extends("layouts/main")
@section("container")
<h1>{{ $sortedBy }}</h1>
@foreach ($posts as $post)
    <article>
      <h1><a href="/posts/{{ $post["slug"] }}" class="text-decoration-none">{{ $post["title"] }}</a></h1>
      <p>{{ $post["excerpt"] }}</p>
    </article>
@endforeach
<h3><a href="/blog" class="text-decoration-none">Back to Blog</a></h3>
@endsection