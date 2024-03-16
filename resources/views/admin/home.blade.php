<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.3/css/bootstrap.min.css')}}">
</head>
<body>


<nav class="py-2 bg-body-tertiary border-bottom">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
            <li class="nav-item"><a href="/admin/home" class="nav-link link-body-emphasis px-2 active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Danh sách</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">About</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control form-control-dark text-bg-light" placeholder="Search..."
                   aria-label="Search" control-id="ControlID-1">
        </form>


        <div class="d-flex flex-row align-items-center justify-content-center">
            <form action="" class="me-3">
                {{\Illuminate\Support\Facades\Auth::user()->name}}
            </form>

            <form method="post" action="{{route('logout')}}">
                @csrf
                <button type="submit" class="btn btn-outline-dark me-2">Logout</button>
            </form>
        </div>
    </div>
</nav>
</body>
</html>
