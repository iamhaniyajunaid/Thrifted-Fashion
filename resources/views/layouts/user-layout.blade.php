<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
         <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="/assets-admin/css/style.css">

    </head>

    <body>
        <header>
            <!-- place navbar here -->
              <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container-fluid mx-2 mx-lg-5">
            <a class="navbar-brand d-inline-flex align-items-center gap-2 text-decoration-none" href="index.php">
                <img src="{{asset('assets-admin/images/logo.png')}}" alt="thrift fashion Logo" class="brand-logo " width="100%">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav  align-items-lg-center">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Separated link</a></li>
    </ul>
  </li>
                   
                    <li class="nav-item">
                        <a class="nav-link " href="reviews.php">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/user-panel/contact">Contact us</a>
                    </li>
                    
                </ul>

                <div class="d-flex align-items-lg-center gap-2  mt-3 mt-lg-0">
            
                        <!-- <div class="dropdown">
                            <button class="btn btn-nav-solid dropdown-toggle d-flex align-items-center gap-2" 
                                    type="button" 
                                    id="userMenu" 
                                    data-bs-toggle="dropdown" 
                                    aria-expanded="false">
                                <i class="fa-solid fa-circle-user"></i>
                                <span></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end shadow border-0" aria-labelledby="userMenu">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center " href="">
                                        <i class="fa-solid fa-gauge"></i> Dashboard
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item text-danger d-flex align-items-center " href="signout.php">
                                        <i class="fa-solid fa-right-from-bracket"></i> Sign Out
                                    </a>
                                </li>
                            </ul>
                        </div> -->
                   <a href="" class="btn-nav-solid">
                <i class="fas fa-search"></i>
                   </a>
                   <a href="" class="btn-nav-solid"><i class="fas fa-heart"></i></a>
                   <a href="" class="btn-nav-solid"><i  class="fas fa-shopping-cart"></i></a>
                        <a href="/login" class="btn btn-nav-outline">LOGIN</a>
                </div>
            </div>
        </div>
    </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <!-- place footer here -->
             <footer class="custom-footer pt-5 pb-3">
    <!-- footer -->
    <div class="container">
        <div class="row g-4 pb-4 border-bottom border-secondary border-opacity-25">
            
            <div class="col-md-4">
                <a class="d-inline-flex align-items-center gap-2 text-decoration-none mb-3" href="index.php">
                    <img src="{{asset('assets-admin/images/logo.png')}}" alt="Thrift fashion Logo" class="brand-logo">
                </a>
                <p class="text-muted small mb-3">
                Discover unique thrifted fashion, sustainable styles, and quality pre-loved clothing that make every outfit effortlessly stylish and eco-friendly
                </p>
            </div>
            <!-- page links -->
            <div class="col-md-2 col-6 ms-auto">
                <h6 class="text-white fw-bold mb-3">Quick Links</h6>
                <ul class="list-unstyled small mb-0">
                    <li class="mb-2"><a href="index.php" class="text-muted text-decoration-none">Home</a></li>
                    <li class="mb-2"><a href="index.php" class="text-muted text-decoration-none">About</a></li>
                    <li class="mb-2"><a href="reviews.php" class="text-muted text-decoration-none">Testimonals</a></li>
                    <li class="mb-2"><a href="/login" class="text-muted text-decoration-none">Login / </a><a href="/register" class="text-muted text-decoration-none">Register</a></li>
                </ul>
            </div>
           
<!-- contact info -->
            <div class="col-md-3">
                <h6 class="text-white fw-bold mb-3">Contact Info</h6>
                <ul class="list-unstyled text-muted small mb-3">
                    <li class="mb-2"><i class="fa-solid fa-location-dot me-2 "></i>Karachi, Pakistan</li>
                    <li class="mb-2"><i class="fa-solid fa-envelope me-2 "></i>info@thriftfashion.com</li>
                </ul>
                <div class="d-flex gap-3 fs-5">
                    <a href="https://www.facebook.com" class="text-muted"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.linkedin.com" class="text-muted"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://github.com" class="text-muted"><i class="fa-brands fa-github"></i></a>
                </div>
            </div>

        </div>
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center pt-3 small text-muted">
            <p class="mb-1 mb-sm-0">&copy;  Thrift Fashion. All rights reserved.</p>
            <div>
                <a href="privacy-policy.php" class="text-muted text-decoration-none me-3">Privacy Policy</a>
                <a href="termsofservice.php" class="text-muted text-decoration-none">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>