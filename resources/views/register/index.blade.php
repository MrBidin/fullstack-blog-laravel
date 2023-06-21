@extends("layouts/main")

@section("container")
<main class="form-signin">
  <h1 class="h3 mb-3 fw-normal text-center">Registeration Form</h1>
  <form method="POST" action="/register" autocomplete="off" >
    @csrf
    <div class="form-floating">
      <input type="text" class="form-control @error("name") is-invalid @enderror" name="name" id="name" placeholder="insert name" value={{ old("name") }}>
      <label for="name">Name</label>
      @error("name") 
      <div id="validationServerUsernameFeedback" class="invalid-feedback">{{$message}}</div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="text" class="form-control @error("nameid") is-invalid @enderror" name="nameid" id="nameid" placeholder="insert user id" value={{ old("nameid") }} >
      <label for="nameid">User Id</label>
      @error("nameid") 
      <div id="validationServerUsernameFeedback" class="invalid-feedback">{{$message}}</div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="email" class="form-control @error("email") is-invalid @enderror" name="email" id="email" placeholder="inser email" value={{ old("email") }}>
      <label for="email">Email address</label>
      @error("email") 
      <div id="validationServerUsernameFeedback" class="invalid-feedback">{{$message}}</div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" class="form-control @error("password") is-invalid @enderror" name="password" id="password" placeholder="password">
      <label for="password">Password</label>
      @error("password") 
      <div id="validationServerUsernameFeedback" class="invalid-feedback">{{$message}}</div>
      @enderror
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
  </form>
  <p class="text-center">already have an account? <a href="/login" class="text-decoration-none">Login</a></p>
</main>
@endsection