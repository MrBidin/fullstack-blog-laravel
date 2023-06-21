@extends("layouts/main")
@section("container")
<div class="d-flex mt-5">
  @foreach ($categories as $category)
      <a href="/blog?category={{ $category->slug }}">
        <div class="card text-bg-dark">
          <img src="https://source.unsplash.com/600x400?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
          <div class="card-img-overlay d-flex align-items-center justify-content-center">
            <h5 class="card-title bg-dark py-2 px-4 text-white rounded">{{ $category->name }}</h5>
          </div>
        </div>
      </a>
@endforeach
</div>
@endsection