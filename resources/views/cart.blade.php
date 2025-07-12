@extends('layout')
@section('title', 'Keranjang Belanja - TechShop')
@section('content')
<head><link rel="stylesheet" href="{{ asset('css/cart.css') }}"></head>
    <!-- Cart Header -->
    <div class="cart-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1><i class="bi bi-cart3 me-3"></i>Keranjang Belanja</h1>
                    <p class="lead mb-0">Kelola produk yang ingin Anda beli</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-md-end">
                            <li class="breadcrumb-item"><a href="#" class="text-white">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-white">Produk</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Keranjang</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart Content -->
    <div class="container mb-5">
        <div class="row">
            <!-- Product List -->
            <div class="col-lg-8">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4>3 Produk di Keranjang</h4>
                    <a href="#" class="btn btn-outline-primary">
                        <i class="bi bi-arrow-left me-1"></i> Lanjutkan Belanja
                    </a>
                </div>

                <!-- Cart Items -->
                <div class="product-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-2 col-4">
                                <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" class="product-img" alt="Smartphone">
                            </div>
                            <div class="col-md-5 col-8">
                                <h5 class="mb-1">Samsung Galaxy S23 Ultra</h5>
                                <p class="text-muted mb-1">Warna: Phantom Black</p>
                                <p class="price mb-0">Rp 14.999.000</p>
                                <span class="discount-badge">Diskon 20%</span>
                            </div>
                            <div class="col-md-3 col-8 mt-3 mt-md-0">
                                <div class="d-flex align-items-center">
                                    <div class="quantity-btn minus">-</div>
                                    <input type="text" class="quantity-input mx-2" value="1">
                                    <div class="quantity-btn plus">+</div>
                                </div>
                            </div>
                            <div class="col-md-2 col-4 text-md-end mt-3 mt-md-0">
                                <h5 class="price mb-0">Rp 14.999.000</h5>
                                <div class="remove-btn mt-2">
                                    <i class="bi bi-trash"></i> Hapus
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-2 col-4">
                                <img src="https://images.unsplash.com/photo-1572569511254-d8f925fe2cbb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" class="product-img" alt="Smartwatch">
                            </div>
                            <div class="col-md-5 col-8">
                                <h5 class="mb-1">Apple Watch Series 8</h5>
                                <p class="text-muted mb-1">Ukuran: 45mm, GPS+Cellular</p>
                                <p class="price mb-0">Rp 7.499.000</p>
                                <span class="discount-badge">Diskon 15%</span>
                            </div>
                            <div class="col-md-3 col-8 mt-3 mt-md-0">
                                <div class="d-flex align-items-center">
                                    <div class="quantity-btn minus">-</div>
                                    <input type="text" class="quantity-input mx-2" value="1">
                                    <div class="quantity-btn plus">+</div>
                                </div>
                            </div>
                            <div class="col-md-2 col-4 text-md-end mt-3 mt-md-0">
                                <h5 class="price mb-0">Rp 7.499.000</h5>
                                <div class="remove-btn mt-2">
                                    <i class="bi bi-trash"></i> Hapus
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-2 col-4">
                                <img src="https://images.unsplash.com/photo-1603302576837-37561b2e2302?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" class="product-img" alt="Headphones">
                            </div>
                            <div class="col-md-5 col-8">
                                <h5 class="mb-1">Sony WH-1000XM5</h5>
                                <p class="text-muted mb-1">Warna: Black</p>
                                <p class="price mb-0">Rp 4.599.000</p>
                                <span class="text-success">Gratis Kabel Data</span>
                            </div>
                            <div class="col-md-3 col-8 mt-3 mt-md-0">
                                <div class="d-flex align-items-center">
                                    <div class="quantity-btn minus">-</div>
                                    <input type="text" class="quantity-input mx-2" value="1">
                                    <div class="quantity-btn plus">+</div>
                                </div>
                            </div>
                            <div class="col-md-2 col-4 text-md-end mt-3 mt-md-0">
                                <h5 class="price mb-0">Rp 4.599.000</h5>
                                <div class="remove-btn mt-2">
                                    <i class="bi bi-trash"></i> Hapus
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Promo Code -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Kode Promo</h5>
                        <div class="input-group">
                            <input type="text" class="form-control promo-input" placeholder="Masukkan kode promo">
                            <button class="btn btn-primary promo-btn" type="button">Terapkan</button>
                        </div>
                        <div class="mt-2">
                            <span class="badge bg-light text-dark me-1">TECH10</span>
                            <span class="badge bg-light text-dark me-1">DISKON20</span>
                            <span class="badge bg-light text-dark">NEWMEMBER</span>
                        </div>
                    </div>
                </div>

                <!-- Shipping Options -->
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Metode Pengiriman</h5>
                        
                        <div class="shipping-option selected">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="shipping" id="shipping1" checked>
                                <label class="form-check-label w-100" for="shipping1">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6 class="mb-1">Reguler</h6>
                                            <p class="mb-0 text-muted">Estimasi 3-5 hari kerja</p>
                                        </div>
                                        <div class="text-end">
                                            <p class="mb-0">Rp 15.000</p>
                                            <small class="text-muted">Gratis ongkir min. Rp 500.000</small>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        
                        <div class="shipping-option">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="shipping" id="shipping2">
                                <label class="form-check-label w-100" for="shipping2">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6 class="mb-1">Express</h6>
                                            <p class="mb-0 text-muted">Estimasi 1-2 hari kerja</p>
                                        </div>
                                        <div>
                                            <p class="mb-0">Rp 30.000</p>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        
                        <div class="shipping-option">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="shipping" id="shipping3">
                                <label class="form-check-label w-100" for="shipping3">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6 class="mb-1">Same Day Delivery</h6>
                                            <p class="mb-0 text-muted">Diterima hari ini</p>
                                        </div>
                                        <div>
                                            <p class="mb-0">Rp 50.000</p>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                <div class="summary-card" style="top: 20px;">
                    <h4 class="mb-4">Ringkasan Belanja</h4>
                    
                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal Produk (3)</span>
                        <span>Rp 27.097.000</span>
                    </div>
                    
                    <div class="d-flex justify-content-between mb-2">
                        <span>Diskon Produk</span>
                        <span class="text-success">- Rp 3.500.000</span>
                    </div>
                    
                    <div class="d-flex justify-content-between mb-2">
                        <span>Biaya Pengiriman</span>
                        <span>Rp 15.000</span>
                    </div>
                    
                    <div class="d-flex justify-content-between mb-3">
                        <span>Biaya Layanan</span>
                        <span>Rp 2.000</span>
                    </div>
                    
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <span>Voucher</span>
                            <span class="badge bg-success ms-2">TECH10</span>
                        </div>
                        <span class="text-success">- Rp 200.000</span>
                    </div>
                    
                    <hr>
                    
                    <div class="d-flex justify-content-between mb-4">
                        <h5>Total Tagihan</h5>
                        <h4 class="text-primary">Rp 23.412.000</h4>
                    </div>
                    
                    <button class="btn btn-primary w-100 btn-lg py-3">
                        <i class="bi bi-credit-card me-2"></i> Lanjut ke Pembayaran
                    </button>
                    
                    <div class="mt-3 text-center">
                        <small class="text-muted">Dengan melanjutkan, Anda menyetujui <a href="#">Syarat & Ketentuan</a></small>
                    </div>
                    
                    <hr class="my-4">
                    
                    <h6 class="mb-3">Metode Pembayaran</h6>
                    <div class="d-flex flex-wrap">
                        <img src="https://via.placeholder.com/40x25/fff?text=VISA" class="me-2 mb-2" alt="Visa">
                        <img src="https://via.placeholder.com/40x25/fff?text=MC" class="me-2 mb-2" alt="MasterCard">
                        <img src="https://via.placeholder.com/40x25/fff?text=PP" class="me-2 mb-2" alt="PayPal">
                        <img src="https://via.placeholder.com/40x25/fff?text=GPAY" class="me-2 mb-2" alt="Google Pay">
                        <img src="https://via.placeholder.com/40x25/fff?text=OVO" class="me-2 mb-2" alt="OVO">
                        <img src="https://via.placeholder.com/40x25/fff?text=GOPAY" class="me-2 mb-2" alt="GoPay">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection