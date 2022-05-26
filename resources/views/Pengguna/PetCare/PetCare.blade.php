<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aurora Petshop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="Zay/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Zay/assets/css/templatemo.css">
    <link rel="stylesheet" href="Zay/assets/css/custom.css">
    

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="Zay/assets/css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body style="background-color: #F9F9F9">
    <!-- Start Top Nav -->
    {{-- @include('Layout.Pengguna-Layout.TopNav') --}}
    <!-- Close Top Nav -->

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container d-flex justify-content-between align-items-center">
    
            <a class="navbar-brand text-success logo h1 align-self-center" href="/beranda">
                Aurora
            </a>
    
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/shop">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/petcare">PetCare</a>
                        </li>
                    </ul>
                </div>
                
                <div class="navbar align-self-center d-flex">
    
                    <!-- Search Handphone View -->
                    {{-- <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div> --}}
    
                    <!-- Ikon Search -->
                    {{-- <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a> --}}
    
                    @if (Auth::guest())
                        <button type="button"  class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Masuk
                        </button>
                    @else
                        <div>
                            <a class="nav-icon position-relative text-decoration-none" href="/cart" role="button" aria-expanded="false">
                                <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                                <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-white text-dark"></span>
                            </a>
                        </div>
                        <div class="dropdown">
                            <a class="nav-icon position-relative text-decoration-none" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-fw fa-user text-dark mr-3"></i>
                                {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}
                            </a>
                        
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            {{-- <li><a class="dropdown-item" href="#">Profil</a></li> --}}
                            <li><a class="dropdown-item" href="{{ route('postlogout_user') }}">Logout</a></li>
                            </ul>
                        </div>
                    @endif
      
                    <!-- Modal Login -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Masuk</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('postlogin_user') }}" method="post">
    
                                        {{ csrf_field() }}
                        
                                        <div class="form-group mb-3">
                                          <label for="email" class="sr-only">Email</label>
                                          <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                                        </div>
                                        <div class="form-group mb-3">
                                          <label for="password" class="sr-only">Password</label>
                                          <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                                        </div>
                                        <div class="d-grid mx-auto">
                                            <button class="btn btn-outline-success" type="submit">Submit</button>
                                        </div>
                                        <div class="d-grid mx-auto">
                                            <p class="fs-6">Belum Punya Akun? <a href="/register" class="fs-6">Daftar Disini</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal Search Bar -->
    {{-- <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div> --}}

    <section class="container">

        <h4>Data Pesanan</h4>

        <!-- Start Tabel 1 -->
        <form action="{{ url('/add-order-petcare') }}" method="POST">

            {{ csrf_field() }}
            
            {{-- <div class="col-12 col-md-12">
                <div class="d-grid mx-auto">
                    <button class="btn btn-outline-success" type="submit">Lanjutkan</button>
                </div>
            </div> --}}

            <!-- LOOPING KANDANG -->
            @foreach ($dtCage as $item)
                <div class="col-12 col-md-12 mt-3">
                    <div class="card border-light shadow" style="background-color: #FAFCFC">
                        <a href="{{ url('detail-petcare', $item->id) }}">
                        <img src="{{ asset('img-Product/'. $item->gambar) }}" class="rounded img-fluid">
                            <div class="card-body">
                                <div class="row">
                                    <h2 class="h5 col-9 text-left mt-1 mb-2">Kandang {{ $item->no_kandang }}</h2>
                                </div>
                                
                                <p class="fs-6 text-left mt-1">Ukuran {{ ($item->size->size) }}</p>

                                <p class="fs-6 text-left mt-1">Rp {{ $item->size->harga }}</p>

                                <p class="fs-6 text-end mt-1">Status {{ $item->status->status }}</p>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </form>
        <!-- End Tabel 1 -->
    </section>
  
    <!-- Start Style -->
    <style>
        a{
            text-decoration: none;
            color: black
        }
        a:hover{
            color: black
        }
        .accordion-button:not(.collapsed) {
            color: black;
            background-color: white;
            border-color: #F2F2F2;
        }
    </style>
    <!-- End Style -->

    <!-- Start Footer -->
    @include('Layout.Pengguna-Layout.Footer')
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="https://kit.fontawesome.com/1c164f6dc6.js" crossorigin="anonymous"></script>
    <script src="Zay/assets/js/jquery-1.11.0.min.js"></script>
    <script src="Zay/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="Zay/assets/js/bootstrap.bundle.min.js"></script>
    <script src="Zay/assets/js/templatemo.js"></script>
    <script src="Zay/assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>