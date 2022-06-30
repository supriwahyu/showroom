@extends('master')
@section('title')
Showroom Mobil
@endsection
@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
<style type="text/css">
  .post-content {
    top:25%;
    left:25%;
    position: absolute;
    color: black;
}
.thumbnail{
    position:relative;
}
.card {
  margin: 50px;
}
</style>
@endsection
@section('content')
  @if (session('alert-succes'))
  <div class="alert alert-success">
      {{ session('alert-succes') }}
  </div>
  @endif
<div class="shadow-lg p-3 mb-5 bg-white rounded">
  <img class="img-fluid" alt="Responsive image" src="https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/wp-content/uploads/2018/01/IMG_7628.jpg">
      <div class="caption post-content">
        <h1 class="bg-primary text-white">Shoroom Mobil</h1>
        <p class="text-white">Lorem ipsum dolor sit amet</p> 
    </div>
</div>
<div class="d-flex justify-content-center">
  <u>daftar dan login untuk test drive</u>
</div>
<div class="d-flex justify-content-around bg-light">
  <div style="width:25px;"></div>
  <div class="wrapper" style="width:300px;">
    Login
    <form method="POST" action="{{route('login')}}">
      @csrf
      name
    <input class="form-control" type="text" name="name">
    password
    <input class="form-control" type="password" name="password">
    <button type="submit" class="btn btn-secondary">submit</button>
  </form>
    @if (session('alert-error'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>{{ session('alert-error') }}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  @endif
</div>
<br>
<div style="width:25px;"></div>
<div class="wrapper" style="width:300px;">
  Register
    <form  method="POST" action="{{route('register')}}">
      @csrf
      name
      <input class="form-control" type="text" name="name" required>
      email
      <input class="form-control" type="email" name="email" required>
      password
      <input class="form-control" type="password" name="password" required>
      <button type="submit" class="btn btn-secondary">submit</button>
    </form>

      @if (session('alert-error-register-input'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>{{ session('alert-error-register-input') }}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  @endif
  </div>
  <div style="width:25px;"></div>
</div>
<br>
<div class="d-flex justify-content-center ml-3">
  <div class="shadow-lg p-3 mb-5 bg-white rounded">
    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
  </div>
   </div>
   <div style="width:25px;"></div>
  <div class="shadow-lg p-3 mb-5 bg-white rounded">
    <img class="img-fluid" src="https://tolleson.com/wp-content/uploads/2020/09/Lucid-Retail-1-1.jpg">
 
</div>
<div class="d-flex justify-content-between">
  <div class="img-thumbnail">
  <img class="img-fluid" src="https://archello.s3.eu-central-1.amazonaws.com/images/2020/02/18/1showrm.1582040396.6434.jpg">
  </div>
  <div class="img-thumbnail">
  <img class="img-fluid" src="http://paulcarrollphoto.com/wp-content/uploads/2013/08/slider6.jpg">
  </div>
  <div class="img-thumbnail">
  <img class="img-fluid" src="https://static.matterport.com/mp_cms/media/filer_public/d9/4a/d94a0f42-1381-49f5-995b-299780f24fec/8f90792286faf14bfdd965915fd2fd909a688eae.jpeg">
  </div>
</div>
<br>
<div class="container">
  <div class="row">
  @foreach ($cars as $car)
   <div class="col-lg-4 col-md-6">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://s1.cdn.autoevolution.com/images/news/gallery/top-5-cheapest-v8-cars-on-sale-in-europe-in-2016_3.jpeg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$car->model}}</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">{{$car->price}}</a>
  </div>
</div>
</div>
@endforeach
</div>
</div>
{{$cars->links()}}
@endsection
@section('script')
@endsection