@extends('master')
@section('title')
produk Showroom Mobil
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
        <h1 class="p-3 mb-2 bg-primary text-white">Produk Showroom</h1>
        <p>Lorem ipsum dolor sit amet</p> 
    </div>
</div>
<div class="d-flex flex-wrap">
  @foreach ($cars as $car)
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://s1.cdn.autoevolution.com/images/news/gallery/top-5-cheapest-v8-cars-on-sale-in-europe-in-2016_3.jpeg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$car->model}}</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">{{$car->price}}</a>
  </div>
</div>
@endforeach
</div>
{{$cars->links()}}
@endsection
@section('script')

@endsection