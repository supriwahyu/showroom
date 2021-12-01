       
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <body>        
            <div class="d-flex justify-content-center">
                <form action="{{ route('testdrivelist.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body pad">
                        <div class="form-group">
                          <label class="form-label">name</label>
                          <input type="text" name="name" class="form-control" placeholder="" required/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">price</label>
                            <input type="text" name="price" class="form-control" placeholder="" required/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">size</label>
                            <input type="text" name="size" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">model</label>
                            <input type="text" name="model" class="form-control" placeholder="" required/>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary w-100">Simpan mobil</button>
                    </div>
                </form>
            </div>
        </body>