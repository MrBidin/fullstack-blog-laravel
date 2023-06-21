@extends("layouts/main")
@section("container")
<h1 class="mb-4 text-center">{{ $pageName }}</h1>
<div class="row justify-content-center">
  <div class="col-6">
    <form action="" method="GET">
      <div class="input-group mb-3">
        @if(request("category"))
          <input type="text" hidden name="category" value={{ request("category") }}>
        @endif
        <input type="text" class="form-control" name="search" placeholder="search..." value={{ request("search") }}>
        <div class="input-group-append">
          <button class="btn btn-danger" type="submit">Button</button>
        </div>
      </div>
    </form>
  </div>
</div>
@if($posts->count())
<div class="card mb-3">
    <div class="position-absolute bg-dark py-2 px-3" style="background-color: rgba(0,0,0,0.7)"><a class="text-decoration-none text-white" href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></div>
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h5 class="card-title">{{ $posts[0]->title }}</h5>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <p>{{ $posts[0]->user->name }}</p>
      <p class="card-text"><small class="text-body-secondary">Last updated {{ $posts[0]->updated_at->diffForHumans() }}</small></p>
        <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary btn-lg">view</a>
    </div>
  </div>

    <div class="row">
      @foreach($posts->skip(1) as $post)
      <div class="col-4 mb-3">
          <div class="card">
            <div class="position-absolute bg-dark text-white py-2 px-3" style="background-color: rgba(0,0,0,0.7)"><a class="text-decoration-none text-white" href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></div>
            <img src="https://source.unsplash.com/400x400?{{ $post->category->name }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p class="card-text">{{ $post->excerpt }}</p>
              <p>created by: <b>{{ $post->user->name }}</b></p>
              <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
            </div>
          </div>
      </div>
        {{-- <div class="col-4">
          <article class="mb-3" style="border-bottom: 2px rgb(187, 181, 181) solid">
            <h2><a href="/posts/{{ $post["slug"] }}" class="text-decoration-none">{{ $post["title"] }}</a></h2>
            <h4>Author: <a href="/authors/{{ $post->user->nameid }}" class="text-decoration-none">{{ $post->user->name }}</a> | Category: <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h4>
            <p>{{ $post["excerpt"] }}</p>
            <a href="/posts/{{ $post["slug"] }}" class="text-decoration-none">read more...</a>
          </article>
      </div> --}}
      @endforeach
    </div>
    <div class="d-flex justify-content-end">
      {{ $posts->links() }}
    </div>

@else
  <h3>There is no post</h3>
@endif
@endsection