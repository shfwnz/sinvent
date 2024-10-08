<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <!-- Membuat row header -->
        <div class="row mt-3 mb-4">
            <div class="col text-center">
                <h3>Laravel CRUD - Belajar</h3>
            </div>
        </div>
        <!-- Akhir row header -->
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col">
                <h4>Edit Category</h4>
            </div>
            <form action="{{ route('category.update', $category->id) }}"
                    method="POST"
                    enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-floating mt-3">
                  <input  type="text" 
                          name="name" 
                          class="form-control" 
                          placeholder="Name Product" 
                          value="{{old('name'),$category->name}}">
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
                          value="{{old('description'),$category->description}}">
                      <label for="floatingPassword">Description</label>

                      @error('description')
                        <div class='alert alert-danger mt-2'>
                          {{ $message }}
                        </div>
                      @enderror
                </div>

                <div class="mt-3">
                  <select name="category" class="form-select  @error('description') is-invalid @enderror" aria-label="default select example">
                    @foreach($listCategory as $key=>$val)
                      @if($key == $category->$category)
                        <option selected value={{$key}}->{{$val}}</option>
                      @else
                        <option value={{$key}}>{{$val}}</option>
                      @endif
                    @endforeach
                  </select>
                  
                  @error('category')
                    <div class='alert alert-danger mt-2'>
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="row">
                  <div class="col text-end my-3">
                    <button type="submit" class="btn btn-md btn-primary me-3">UPDATE</button>
                    <a href="{{ route('category.index') }}" type="button" class="btn btn-secondary">BATAL</a>
                  </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>