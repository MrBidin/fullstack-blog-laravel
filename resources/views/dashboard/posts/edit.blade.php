@extends("dashboard.layouts.main")
@section("container")

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Update Post</h1>
</div> 
<div class="col-lg-8">
  <form action="/dashboard/posts/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
    @method("put")
    @csrf
    <div class="form-group">
      <label for="title">Title</label> 
      <input type="text" name="title" class="form-control @error("title")  is-invalid @enderror" id="title" placeholder="Enter title here" value={{ $post->title  }}>
      @error("title")
      {{ $message }}
      @enderror
    </div>
    <div class="form-group">
      <label for="slug">Slug</label>
      <input type="text" name="slug" class="form-control @error("slug")  is-invalid @enderror" id="slug" placeholder="Enter slug here" value={{ old("slug", $post->slug) }}>
      @error("slug")
      {{ $message }}
      @enderror
    </div>
    <div class="form-group">
      <label for="category">Category</label>
      <select class="form-select" id="category" name="category_id">
        @foreach($categories as $category)
        @if( old("category_id", $post->category_id) == $category->id )
          <option value={{ $category->id }} selected>{{ $category->name }}</option>
        @else
          <option value={{ $category->id }}>{{ $category->name }}</option>
        @endif
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="image" class="form-label">Post Image</label>
      <input type="hidden" name="oldImage" value={{ $post->image }} >
      @if($post->image)
      <img src="{{ asset("storage/" . $post->image) }}" alt="" class="img-preview img-fluid mb-3 col-sm-5 d-block">
      @else
        <img src="" alt="" class="img-preview img-fluid mb-3 col-sm-5">
      @endif
      <input class="form-control @error("image") is-invalid @enderror" type="file" id="image" name="image" onchange="showPrevImage()">
      @error("image")
      {{ $message }}
      @enderror
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <input id="body" type="hidden" name="body" value={{ old("body", $post->body) }}>
      <trix-editor input="body" ></trix-editor>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Update post</button>
    <a class="btn btn-primary mt-3" href="/dashboard/posts">cancel</a>
  </form>
</div>
<script>
  const title = document.getElementById("title");
  const slug = document.getElementById("slug");
  title.addEventListener("change", () => {
    fetch(`/dashboard/posts/checkSlug?title=${title.value}`)
    .then(response => response.json()).then(data => slug.value = data.slug);
  });

  document.addEventListener("trix-file-accept", (e) => {
    e.preventDefault()
  });

  function showPrevImage(){
    const image = document.getElementById("image");
    const prevImage  = document.querySelector(".img-preview");

    prevImage.style.display = "block";

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
      prevImage.src = oFREvent.target.result;
    }

  }
</script>
@endsection