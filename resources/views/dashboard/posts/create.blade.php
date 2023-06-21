@extends("dashboard.layouts.main")
@section("container")
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create A Post</h1>
</div> 
<div class="col-lg-8 mb-4">
  <form action="/dashboard/posts/" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" class="form-control @error("title")  is-invalid @enderror" id="title" placeholder="Enter title here" value={{ old("title") }}>
      @error("title")
      {{ $message }}
      @enderror
    </div>
    <div class="form-group">
      <label for="slug">Slug</label>
      <input type="text" name="slug" class="form-control @error("slug")  is-invalid @enderror" id="slug" placeholder="Enter slug here" value={{ old("slug") }}>
      @error("slug")
      {{ $message }}
      @enderror
    </div>
    <div class="form-group">
      <label for="category">Category</label>
      <select class="form-select" id="category" name="category_id">
        @foreach($categories as $category)
        @if( old("category_id") == $category->id )
          <option value={{ $category->id }} selected>{{ $category->name }}</option>
        @else
          <option value={{ $category->id }}>{{ $category->name }}</option>
        @endif
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="image" class="form-label">Post Image</label>
      <img src="" alt="" class="img-preview img-fluid mb-3 col-sm-5">
      <input class="form-control @error("image") is-invalid @enderror" type="file" id="image" name="image" onchange="showPrevImage()">
      @error("image")
      {{ $message }}
      @enderror
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <input id="body" type="hidden" name="body" class="@error("body") is-invalid @enderror">
      <trix-editor input="body"></trix-editor>
      @error("body")
      {{ $message }}
      @enderror
    </div>
    <button type="submit" class="btn btn-primary mt-3">Create post</button>
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