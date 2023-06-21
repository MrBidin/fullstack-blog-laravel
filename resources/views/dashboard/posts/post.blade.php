@extends("dashboard.layouts.main")
@section("container")
<div class="row mt-3">
  <div class="col-8">
    <div class="card">
      @if($post->image)
        <div style="max-width:400px; overflow:hidden">
          <img src="{{ asset("storage/" . $post->image ) }}" class="card-img-top" alt="{{ $post->category->name }}">
        </div>
      @else
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
      @endif
      <div class="card-body">
        <h4 class="card-title">{{ $post->title }}</h4>
        <a href="/dashboard/posts"><span class="btn btn-success">back to all post</span></a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>edit</a>
        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
          @csrf
          @method("delete")
            <button onClick="return confirm('are you sure?')" class="btn btn-danger border-0">
              <span data-feather="trash-2"></span>delete
            </button>
        </form>
        <p class="card-text">{!! $post->body !!}</p>
        <p class="card-text"><small class="text-body-secondary">Last updated {{ $post->updated_at->diffForHumans() }}</small></p>
      </div>
    </div>
  </div>
</div>
@endsection