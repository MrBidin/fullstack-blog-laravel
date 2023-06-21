@extends("layouts/main")
@section("container")
  <div class="row mt-3 justify-content-center">
    <div class="col-8">
      <div class="card">
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title">{{ $post->title }}</h4>
          <h5>created by: <a href="/authors/{{ $post->user->nameid }}" class="text-decoration-none">{{ $post->user->name }}</a> | category: <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
          <p class="card-text">{!! $post->body !!}</p>
          <p class="card-text"><small class="text-body-secondary">Last updated {{ $post->updated_at->diffForHumans() }}</small></p>
        </div>
      </div>
    </div>
  </div>
@endsection