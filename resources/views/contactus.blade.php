@extends('master')
@section('title')
Contack Us Showroom Mobil
@endsection
@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
<style type="text/css">
  .post-content {
    top:50%;
    left:50%;
    position: absolute;
    color: black;
}
.thumbnail{
    position:relative;
}
</style>
@endsection
@section('content')
<div class="shadow-lg p-3 mb-5 bg-white rounded">
  <img class="img-fluid" alt="Responsive image" src="https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/wp-content/uploads/2018/01/IMG_7628.jpg">
      <div class="caption post-content">
        <h1 class="p-3 mb-2 bg-primary text-white">Contact Us</h1>
        <p>Lorem ipsum dolor sit amet</p> 
    </div>
</div>
<br>  
<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <h1>showroom mobil</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium id cumque est dolores voluptatibus.</p>
    <div class="det"><i class="fa fa-map-marker"></i> 102 New Road, New City</div>
    <div class="det"><i class="fa fa-phone"></i> 001 2045 509</div>
    <div class="det"><i class="fa fa-globe"></i> www.showroom-mobil.com</div>
  </div>
</div>
@endsection
@section('script')

@endsection