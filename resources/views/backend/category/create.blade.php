<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <!-- Content Area Atas -->
  <!-- Membuat container -->
  <div class="container">
    <!-- Membuat row header -->
    <div class="row">
      <div class="col text-center">
        <h3>Laravel CRUD - Belajar</h3>
      </div>
    </div>
    <!-- Akhir row header -->

    <!-- Membuat row content -->
    <div class="row">
      <!-- Membuat component card border 1, shadow rounded -->
      <div class="card border-1 shadow-sm rounded">
        <!-- Body component card -->
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h4>En</h4>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-floating mt-3">
                  <input  type="text" 
                          name="name" 
                          class="form-control" 
                          placeholder="Name Product" 
                          value="{{old('name')}}">
                      <label for="floatingPassword">Name</label>

                      @error('name')
                        <div class='alert alert-danger mt-2'>
                          {{ $message }}
                        </div>
                      @enderror
                </div>
                <div class="form-floating mt-3">
                  <input  type="text" 
                          name="description" 
                          class="form-control @error('description') is-invalid @enderror" 
                          placeholder="Description" 
                          value="{{old('description')}}">
                      <label for="floatingPassword">Description</label>

                      @error('description')
                        <div class='alert alert-danger mt-2'>
                          {{ $message }}
                        </div>
                      @enderror
                </div>
                <div class="mt-3">
                  <select name="category" class="form-select @error('description') is-invalid @enderror" aria-label="Default select example" id="">
                    @foreach($listCategory as $key=>$val)
                    <option value={{$key}}>
                      {{ $val }}
                    </option>
                    @endforeach
                  </select>

                  @error('category')
                    <div class='alert alert-danger mt-2'>
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                  <div class="row mt-3">
                    <div class="col">
                      <button type="submit" class="btn btn-md btn-primary me-3">SAVE</button>
                      <button type="reset" class="btn btn-md btn-warning">RESET</button>
                  </div>
                  <div class="col text-end">
                    <a href="{{ route('category.index')}}" class="btn btn-md btn-success mb-3">BACK</a>
                  </div>          
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Akhir card body --> 
      </div>
      <!-- Akhir card -->
    </div>
    <!-- Akhir row content -->

    <!-- Membuat row footer -->
    <div class="row">
      <div class="col text-center">
        <p>&copy; 2024 Laravel CRUD</p>
      </div>
    </div>
    <!-- Akhir row footer -->
  </div>
  <!-- Content Area Bawah -->

  <!-- Mengakses JavaScript library -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
