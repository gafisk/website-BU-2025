@extends('main.layouts.main')

@section('header')
<img src="{{ asset('main/assets/img/hero-bg.jpg') }}" alt="" data-aos="fade-in" class="w-100" style="object-fit: cover; max-height: 400px;">

<div class="container text-center py-5" data-aos="fade-up" data-aos-delay="100">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <h2>Halaman Berita</h2>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="container py-5">
  <div class="row gy-4">
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-success">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-success">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-success">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection