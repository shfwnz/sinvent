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
        <div class="row">
            <div class="col text-center">
                <h3>Laravel CRUD - Belajar</h3>
            </div>
        </div>
        <!-- Akhir row header -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4>Show Category</h4>
                    </div>
                    <div class="row">
                        <div class="col">
                            <table class="table table-striped table-hover">
                                <tr>
                                    <td>ID</td>
                                    <td>&nbsp;</td>
                                    <td>{{ $category[0]->id }}</td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>&nbsp;</td>
                                    <td>{{ $category[0]->name }}</td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>&nbsp;</td>
                                    <td>{{ $category[0]->description }}</td>
                                </tr>
                                <tr>
                                    <td>Category</td>
                                    <td>&nbsp;</td>
                                    <td>{{ $category[0]->category }}</td>
                                </tr>
                                <tr>
                                    <td>Information</td>
                                    <td>&nbsp;</td>
                                    <td>{{ $category[0]->information }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-end">
                            <a href="{{ route('category.index') }}" class="btn btn-md btn-dark mb-3">BACK</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>