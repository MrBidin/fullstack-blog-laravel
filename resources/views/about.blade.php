@extends('layouts/main')

@section('container')
  <h1>Ini adalah halaman About</h1>
  <h2><?= $name ?></h2>
  <h2>{{ $email }}</h2>
  <img class="img-thumbnail rounded-circle profile-img" src="{{ $image }}" alt="">
@endsection
