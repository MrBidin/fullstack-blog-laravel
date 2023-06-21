@extends("layouts/main")

@section("container")
<main class="form-signin">
  <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
  @if(session()->has("success"))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session("success") }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif
  @if(session()->has("loginError"))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session("loginError") }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif
  <form method="POST" action="/login" autocomplete="off">
    <div class="form-floating">
      @csrf
      <input type="email" name="email" class="form-control @error("email")is-invalid @enderror" id="email" placeholder="name@example.com">
      <label for="email">Email address</label>
      @error("email")
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password"  name="password" class="form-control" id="password" placeholder="Password">
      <label for="password">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
  </form>
  <p class="text-center">don't have an account? <a href="/register" class="text-decoration-none">register here!</a></p>
</main>
@endsection