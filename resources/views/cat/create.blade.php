<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cat Create</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    {{-- <link rel="stylesheet" href="http://laravel_s.com/css/style.css"> --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('cats.index')}}">Cats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dogs.index')}}">Dogs</a>
                </li>
            </ul>
        </div>
    </nav>
<form action="{{route('cats.store')}}" method="post">
    @csrf
    <div class="container mt-3">
        <h2>Cat Create</h2>
        <p>Lorem ipsum dolor sit amet.</p>
        <div class="row my-3">
            <div class="col"><h3>name</h3></div>
        </div>
        <div class="row my-3">
            <div class="col">
                <input type="text" name="" id="" class="form-control">
            </div>
        </div>
        <div class="row my-3">
            <div class="col"><h3>mobile</h3></div>
        </div>
        <div class="row my-3">
            <div class="col">
                <input type="text" name="" id="" class="form-control">
            </div>
        </div>
        <div class="row my-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">送出</button>
            </div>
        </div>
    </div>
</form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {

        });
    </script>
</body>

</html>
