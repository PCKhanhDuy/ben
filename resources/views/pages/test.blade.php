@extends('layouts.app')

@section('title', 'Test')

@section('content')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/image-compare-viewer@1.5.0/dist/image-compare-viewer.min.css" />

  <style>
    .image-compare {
      max-width: 100%;
      margin: auto;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
  </style>

  <div class="container">
    <div class="row g-4">
      <div class="col-12 col-md-4">
        <div class="image-compare">
          <img src="https://jonathancharles-int.com/catalogue/image/491314-TGO-32L_PV-1.jpg" alt="Before">
          <img src="https://jonathancharles-int.com/catalogue/image/491314-TGO-32L_PV-2.jpg" alt="After">
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="image-compare">
          <img src="https://jonathancharles-int.com/catalogue/image/491322-MSW-36L_PV-1.jpg" alt="Before">
          <img src="https://jonathancharles-int.com/catalogue/image/491322-MSW-36L_PV-2.jpg" alt="After">
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="image-compare">
          <img src="https://jonathancharles-int.com/catalogue/image/500424-DPC-24L_PV-1.jpg" alt="Before">
          <img src="https://jonathancharles-int.com/catalogue/image/500424-DPC-24L_PV-2.jpg" alt="After">
        </div>
      </div>
    </div>
  </div>
  

  <script src="https://unpkg.com/image-compare-viewer@1.5.0/dist/image-compare-viewer.min.js"></script>
  
@endsection
