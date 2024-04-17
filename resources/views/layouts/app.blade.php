<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyMovie| @yield('tittle')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <div class="container d-flex align-items-center ">
                <img src="img/logo.svg" alt="movieicon " style="height: 50px;">
                <a class="navbar-brand text-light fs-4" href="/admin">MyMovie</a>
                <div class="d-flex justify-content-between col-5 align-items-center">
                    <button class="btn btn-danger " style="width: 130px;" type="submit"><a href="/admin/add" class="nav-link text-light">Add Movie</a></button>
                    <button class="btn btn-danger " style="width: 130px;" type="submit"><a href="" class="nav-link text-light"></a>Delete</button>
                    <button class="btn btn-danger " style="width: 130px;" type="submit"><a href="" class="nav-link text-light"></a>Update</button>
                </div>
                
            </div>
          
            <div class="d-flex mx-3 ">
                <!-- <button class="btn btn-success me-2" type="submit"><a href="" class="nav-link text-light"></a>Regist</button> -->
                <button class="btn btn-danger " style="width: 130px;" type="submit"><a href="" class="nav-link text-light"></a>Log-out</button>
            </div>
        </div>
      </nav>
      {{-- End Navbar --}}

      @yield('content')


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>