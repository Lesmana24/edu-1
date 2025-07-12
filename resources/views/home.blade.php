@extends('layout')
@section('title','TechShop - Toko Elektronik Online Terpercaya')
@section('content')
<head><link rel="stylesheet" href="{{ asset('css/home.css') }}"></head>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Teknologi Terbaru dengan Harga Terjangkau</h1>
                    <p class="lead">Temukan berbagai produk elektronik berkualitas dengan diskon hingga 50%</p>
                    <a href="#produk" class="btn btn-light btn-lg mt-3">Belanja Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title">Kategori Populer</h2>
            <div class="row g-4">
                <div class="col-md-3 col-sm-6">
                    <div class="category-card text-center p-4">
                        <div class="mb-3">
                            <i class="bi bi-phone" style="font-size: 2.5rem; color: var(--primary);"></i>
                        </div>
                        <h5>Smartphone</h5>
                        <p class="text-muted">120 produk</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="category-card text-center p-4">
                        <div class="mb-3">
                            <i class="bi bi-laptop" style="font-size: 2.5rem; color: var(--primary);"></i>
                        </div>
                        <h5>Laptop</h5>
                        <p class="text-muted">85 produk</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="category-card text-center p-4">
                        <div class="mb-3">
                            <i class="bi bi-earbuds" style="font-size: 2.5rem; color: var(--primary);"></i>
                        </div>
                        <h5>Aksesoris</h5>
                        <p class="text-muted">210 produk</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="category-card text-center p-4">
                        <div class="mb-3">
                            <i class="bi bi-smartwatch" style="font-size: 2.5rem; color: var(--primary);"></i>
                        </div>
                        <h5>Smartwatch</h5>
                        <p class="text-muted">65 produk</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="produk" class="py-5 bg-light">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="section-title">Produk Terbaru</h2>
                <a href="#" class="btn btn-outline-primary">Lihat Semua</a>
            </div>
            <div class="row g-4">
                <!-- Product 1 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card">
                        <div class="position-relative">
                            <span class="discount-badge">-20%</span>
                            <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" class="card-img-top product-img" alt="Smartphone">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Samsung Galaxy S23 Ultra</h5>
                            <div class="rating mb-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span class="ms-1 text-muted">(142)</span>
                            </div>
                            <p class="price">Rp 14.999.000</p>
                            <p class="text-muted text-decoration-line-through">Rp 18.999.000</p>
                            <button class="btn btn-primary w-100 mt-2">
                                <i class="bi bi-cart-plus me-1"></i> Tambah ke Keranjang
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card">
                        <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" class="card-img-top product-img" alt="Laptop">
                        <div class="card-body">
                            <h5 class="card-title">MacBook Pro M2 2023</h5>
                            <div class="rating mb-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <span class="ms-1 text-muted">(89)</span>
                            </div>
                            <p class="price">Rp 25.499.000</p>
                            <button class="btn btn-primary w-100 mt-2">
                                <i class="bi bi-cart-plus me-1"></i> Tambah ke Keranjang
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card">
                        <div class="position-relative">
                            <span class="discount-badge">-15%</span>
                            <img src="https://images.unsplash.com/photo-1572569511254-d8f925fe2cbb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" class="card-img-top product-img" alt="Smartwatch">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Apple Watch Series 8</h5>
                            <div class="rating mb-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <span class="ms-1 text-muted">(67)</span>
                            </div>
                            <p class="price">Rp 7.499.000</p>
                            <p class="text-muted text-decoration-line-through">Rp 8.799.000</p>
                            <button class="btn btn-primary w-100 mt-2">
                                <i class="bi bi-cart-plus me-1"></i> Tambah ke Keranjang
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card">
                        <img src="https://images.unsplash.com/photo-1603302576837-37561b2e2302?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" class="card-img-top product-img" alt="Headphones">
                        <div class="card-body">
                            <h5 class="card-title">Sony WH-1000XM5</h5>
                            <div class="rating mb-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span class="ms-1 text-muted">(124)</span>
                            </div>
                            <p class="price">Rp 4.599.000</p>
                            <button class="btn btn-primary w-100 mt-2">
                                <i class="bi bi-cart-plus me-1"></i> Tambah ke Keranjang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Promo Banner -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center p-5 rounded-3" style="background: linear-gradient(to right, var(--accent), #ff8e8e); color: white;">
                        <h2 class="display-5 fw-bold">Diskon Akhir Tahun Hingga 70%</h2>
                        <p class="fs-5">Manfaatkan promo spesial untuk semua produk elektronik</p>
                        <p class="fs-1 mb-4">Hanya 3 Hari Lagi!</p>
                        <a href="#" class="btn btn-light btn-lg px-5">Lihat Promo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3>Berlangganan Newsletter</h3>
                    <p>Dapatkan update promo dan produk terbaru langsung ke email Anda</p>
                </div>
                <div class="col-md-6">
                    <form class="d-flex">
                        <input type="email" class="form-control form-control-lg me-2" placeholder="Masukkan email Anda">
                        <button class="btn btn-light btn-lg" type="submit">Berlangganan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection