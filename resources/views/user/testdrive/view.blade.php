<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="justify-content-center">
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Harga Mobil</th>
      <th scope="col">Ukuran Mobil</th>
      <th scope="col">Model</th>
    </tr>
  </thead>
  <thead>
    <tr>
      <th scope="col">{{$cars->name}}</th>
      <th scope="col">{{$cars->price}}</th>
      <th scope="col">{{$cars->size}}</th>
      <th scope="col">{{$cars->model}}</th>
    </tr>
  </thead>
</div>
</body>
</html>