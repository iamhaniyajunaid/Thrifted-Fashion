<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
    {{-- font awesome icons link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    {{-- swiper css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    {{-- custom css --}}
    <link rel="stylesheet" href="/assets-admin/css/style.css">

</head>

<body>
    <main>
        <div class="hero-section py-5">
            <div class="container-fluid ps-2 ps-md-5 ps-lg-5">
                <div class="row">
                    <div class="col-lg-5 col-md-6 text-start">
                        <div class="hero-text">
                            <h4 class="fw-bold mb-2 hero-tag-line">PRE-LOVED FASHION, GREATER
                                IMPACT</h4>
                            <h1 class="hero-heading display-1 mb-3">Style That<br>Gives Back</h1>
                            <p class="fs-5 w-75 mb-4 hero-para">Shop pre-used, high quality clothing and be part of a
                                more sustainable future.Good fashion never really goes out of style.</p>
                            <a href="#"><button class="btn text-light rounded-5 px-5 py-3 hero-btn">Shop Now
                                    &rarr;</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex w-75 w-md-50 w-lg-50 d-flex justify-content-center align-items-center">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn close ms-5" data-bs-dismiss="alert"
                        aria-label="Close">&times;</button>
                </div>
            @endif
        </div>
        <section class="cat-section">
            <div class="cat-header">
                <div class="cat-heading">
                    <span class="cat-subtitle">
                        SHOP BY CATEGORY
                    </span>
                    <h2 class="cat-title">
                        Find Your Style
                    </h2>
                </div>
                <a href="" class="view-all-link">View All &rarr;</a>
            </div>
            <div class="row g-3 justify-content-center text-center">
                <div class="col-6 col-md-3">
                    <a href="" class="category-item">
                        <div class="category-circle mx-auto">
                            <img src="{{ asset('assets-admin/images/cat-women.png') }}" alt="women">
                        </div>
                        <p class="cat-name">Women</p>
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="" class="category-item">
                        <div class="category-circle mx-auto">
                            <img src="{{ asset('assets-admin/images/cat-men.png') }}" alt="men">
                        </div>
                        <p class="cat-name">Men</p>
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="" class="category-item">
                        <div class="category-circle mx-auto">
                            <img src="{{ asset('assets-admin/images/cat-ethnic.png') }}" alt="ethnic">
                        </div>
                        <p class="cat-name">Ethnic</p>
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="" class="category-item">
                        <div class="category-circle mx-auto">
                            <img src="{{ asset('assets-admin/images/cat-casual.png') }}" alt="casuals">
                        </div>
                        <p class="cat-name">Casuals</p>
                    </a>
                </div>
            </div>
        </section>
        <section class="cat-section">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="cat-title">
                        Featured Products
                    </h2>
                    <p class="cat-subtitle mb-3">HandPicked Pieces, loved by many</p>
                </div>
                <div class="slider-arrows">
                    <button class="swiper-prev-btn nav-btn">&lsaquo;</button>
                    <button class="swiper-next-btn nav-btn">&rsaquo;</button>
                </div>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    {{-- card 1 --}}
                    @foreach ($products as $product)
                        <div class="swiper-slide">
                            <div>
                                <div class="product-card">
                                    <div class="img-box">
                                        <img src="{{ asset('uploads/products/' . $product->image) }}" alt="product image">
                                        <button class="wishlist-btn">&#9825;</button>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="product-name">{{ $product->name }}</h6>
                                        <p class="product-meta">{{ $product->category }} &bull;{{ $product->brand }}</p>
                                        <div class="price-line">
                                            <span class="price">Rs.{{ number_format($product->price) }}</span>
                                            @if ($product->discount)
                                                <span
                                                    class="old-price">Rs.{{ number_format($product->discount) }}</span>
                                            @endif
                                        </div>
                                        <div class="rating"><span class="star">&#9733;</span>4.8 <span class="count">
                                                (12)
                                            </span></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="deal-banner container rounded-3 overflow-hidden text-white p-4 p-md-5 mb-4 mt-2">
            <div class="row align-items-center">
                <div class="col-12 col-sm-8 col-md-6">
                    <div class="banner-content">
                        <span class="sub-title d-block mb-2">TODAY'S DEALS</span>
                        <h2 class="fw-normal mb-2">Up to 50% Off</h2>
                        <p class="mb-4">Grab your favourite styles at unbeatable prices.</p>
                        <a href="#" class="banner-btn rounded-5 text-decoration-none px-5 py-3">Shop Today
                            &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
        <section class="features-section py-4 py-md-5">
            <div class="container-fluid px-3 px-md-4">
                <div class="row g-4 align-items-stretch">
                    {{-- main heading --}}
                    <div class="col-12 col-lg-3 feature-col d-flex justify-content-center align-items-center">
                        <div>
                            <span class="sub-title d-block mb-1">WHY SHOP WITH US</span>
                            <h2 class="main-heading m-0">More Than Just Fashion</h2>
                        </div>
                    </div>
                    {{-- feature item 1 --}}
                    <div class="col-12 col-sm-6 col-lg-2 feature-col">
                        <div class="feature-item">
                            <div class="icon-box mb-2">
                                <i class="fa-solid fa-leaf"></i>
                                <h5 class="feature-title mb-1">Sustainable Choice</h5>
                                <p class="feature-desc m-0">Reduce waste, support a greener planet.</p>
                            </div>
                        </div>
                    </div>
                    {{-- feature item 2 --}}
                    <div class="col-12 col-sm-6 col-lg-2 feature-col">
                        <div class="feature-item">
                            <div class="icon-box mb-2">
                                <i class="fa-solid fa-shield-halved"></i>
                                <h5 class="feature-title mb-1">Quality Checked</h5>
                                <p class="feature-desc m-0">Every item is carefully inspected.</p>
                            </div>
                        </div>
                    </div>
                    {{-- feature item 3 --}}
                    <div class="col-12 col-sm-6 col-lg-2 feature-col">
                        <div class="feature-item">
                            <div class="icon-box mb-2">
                                <i class="fa-solid fa-truck"></i>
                                <h5 class="feature-title mb-1">Affordable Fashion</h5>
                                <p class="feature-desc m-0">Great style,better pieces.</p>
                            </div>
                        </div>
                    </div>
                    {{-- feature item 4 --}}
                    <div class="col-12 col-sm-6 col-lg-2 feature-col">
                        <div class="feature-item">
                            <div class="icon-box mb-2">
                                <i class="fa-regular fa-heart"></i>
                                <h5 class="feature-title mb-1">Support Reuse</h5>
                                <p class="feature-desc m-0">Give clothes a swcond life.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-section py-5 mb-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 col-md-6 offset-md-6 offset-lg-6">
                        <div class="about-banner-content">
                            <span class="sub-title d-block mb-1">OUR STORY</span>
                            <h2 class="main-heading mb-2">Rethinking Fashion</h2>
                            <p class="feature-desc m-0 my-4">We believe hign-quality fashion shouldn't cost the earth.
                                Our curated collection Brings you handpicked, pre-loved garments that combine timeless
                                style,sustainability, and unbeatable value without compromising on quality.</p>
                            <a href="#"><button class="btn text-light rounded-5 px-5 py-3 hero-btn">Discover
                                    More
                                    &rarr;</button></a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="cat-section">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="cat-title">
                        Customers Reviews
                    </h2>
                    <p class="cat-subtitle mb-3">What our pre-loved community says</p>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#addReviewModal"
                        class="btn text-light fw-normal rounded-5 px-4 py-2 mb-3 hero-btn">Write a Review</button>
                </div>
                <div class="d-flex align-items-center gap-3">

                    <div class="slider-arrows">
                        <button class="swiper-prev-btn nav-btn">&lsaquo;</button>
                        <button class="swiper-next-btn nav-btn">&rsaquo;</button>
                    </div>
                </div>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    {{-- card 1 --}}
                    @foreach ($reviews as $review)
                        <div class="swiper-slide">
                            <div>
                                <div class="product-card p-3">
                                    <div class="card-body">
                                        <h6 class="product-name fw-bold">{{ $review->user_name }}</h6>
                                        <div class="rating my-2">
                                            <span class="star text-warning ">&#9733;</span>
                                            <span class="fw-bold">{{ $review->rating }}.0</span>
                                        </div>
                                        <p class="product-meta text-muted fst-italic">{{ $review->comment }}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>


        <!-- Modal Body -->
        <div class="modal fade" id="addReviewModal" tabindex="-1" data-bs-backdrop="static"
            data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">
                            Write a Review </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form action="{{ route('reviews.store') }}" method="POST">
                        @csrf
                        <div class="modal-body text-start">
                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">Your Name</label>
                                <input type="text" name="user_name" class="form-control"
                                    placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3">
                                <label for="rating" class="form-label fw-semibold">Rating</label>
                                <select name="rating" class="form-select text-warning" required>
                                    <option value="5" class="text-warning" selected>5 &#9733; &#9733; &#9733;
                                        &#9733; &#9733;</option>
                                    <option value="4" class="text-warning">4 &#9733; &#9733; &#9733; &#9733;
                                        &#9734;</option>
                                    <option value="3" class="text-warning">3 &#9733; &#9733; &#9733; &#9734;
                                        &#9734;</option>
                                    <option value="2" class="text-warning">2 &#9733; &#9733; &#9734; &#9734;
                                        &#9734;</option>
                                    <option value="1" class="text-warning">1 &#9733; &#9734; &#9734; &#9734;
                                        &#9734;</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="comment" class="form-label fw-semibold">Your Review</label>
                                <textarea name="comment" class="form-control" rows="3" placeholder="Write your feedback here..." required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <button type="submit" class="btn hero-btn fw-normal rounded-2 text-light fs-6">Submit
                                Review</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    {{-- swiper js --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script src="/assets-admin/js/main.js"></script>

</body>

</html>
