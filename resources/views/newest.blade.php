<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Abati Store — Toko Virtual</title>

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Overrides -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">
        <!-- HEADER -->
        <header class="header-sticky sticky-top bg-white">
            <div class="container-xl h-100 d-flex align-items-center gap-3 px-3">
                <!-- Hamburger Mobile Toggle -->
                <button class="btn p-1 d-md-none border-0 text-dark" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#mobileMenuOffcanvas" aria-controls="mobileMenuOffcanvas">
                    <svg viewBox="0 0 24 24" width="29" height="29" fill="none" stroke="currentColor" stroke-width="2.2"
                        stroke-linecap="round">
                        <path d="M4 6H20M4 12H20M4 18H20" />
                    </svg>
                </button>

                <!-- Logo -->
                <a class="logo-img d-flex align-items-center" href="/" aria-label="Abati Store">
                    <img src="logo-abati-store-2.png" alt="Abati Store">
                </a>

                <!-- Desktop Nav -->
                <nav class="desktop-nav d-none d-md-flex align-items-center gap-4 flex-grow-1">
                    <a href="#kategori">Kategori</a>
                    <a href="#rekomendasi">Rekomendasi</a>
                    <a href="#koleksi">Koleksi</a>
                    <a href="#offline">Toko</a>
                    <a href="#seragam">Seragam</a>
                    <a href="#promo">Promo</a>
                </nav>

                <!-- Search Desktop -->
                <div class="desktop-search d-none d-md-flex align-items-center gap-2">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.7"
                        stroke-linecap="round">
                        <circle cx="11" cy="11" r="6.5"></circle>
                        <path d="M16 16L20 20"></path>
                    </svg>
                    <input placeholder="Cari baju koko, kurta...">
                </div>

                <!-- Search Toggle Mobile -->
                <button class="btn p-1 d-md-none border-0 text-dark ms-auto" id="mobileSearchToggle" type="button">
                    <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.7"
                        stroke-linecap="round">
                        <circle cx="11" cy="11" r="6.5"></circle>
                        <path d="M16 16L20 20"></path>
                    </svg>
                </button>
            </div>

            <!-- Offcanvas Menu Mobile -->
            <div class="offcanvas offcanvas-start offcanvas-mobile-menu" tabindex="-1" id="mobileMenuOffcanvas">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title fw-semibold" style="font-family: Georgia, serif;">Kategori</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body p-0 d-flex flex-column">
                    <a href="#cat-koko" class="p-3 border-bottom text-dark">Baju Koko</a>
                    <a href="#cat-kurta" class="p-3 border-bottom text-dark">Kurta</a>
                    <a href="#cat-jubah" class="p-3 border-bottom text-dark">Jubah</a>
                    <a href="#cat-sarung" class="p-3 border-bottom text-dark">Sarung</a>
                    <a href="#cat-peci" class="p-3 border-bottom text-dark">Peci</a>
                    <a href="#cat-sandal" class="p-3 border-bottom text-dark">Sandal</a>
                    <a href="#offline" class="p-3 border-bottom text-dark">Toko Abati Store</a>
                </div>
            </div>
        </header>

        <!-- Mobile Search Panel -->
        <div class="mobile-search-panel" id="mobileSearchPanel">
            <div class="mobile-search-inner d-flex align-items-center gap-2">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.7"
                    stroke-linecap="round">
                    <circle cx="11" cy="11" r="6.5"></circle>
                    <path d="M16 16L20 20"></path>
                </svg>
                <input id="mobileSearchInput" type="search" placeholder="Cari baju koko, kurta..." autocomplete="off">
            </div>
        </div>

        <!-- 1. BANNER SLIDER (Bootstrap Carousel) -->
        <div id="heroCarousel" class="carousel slide hero-carousel overflow-hidden position-relative"
            data-bs-ride="carousel">
            <div class="carousel-inner h-100">
                <div class="carousel-item active position-relative h-100">
                    <img src="https://abatistore.com/storage/products/a2lf83GncdoNeJbhy3wd5B7RqLezg5FEk8eenEfS.webp"
                        class="d-block w-100" alt="Slide 1">
                    <div class="slideText">
                        <small>ABATI STORE • BELANJA MUDAH</small>
                        <h1>Cari baju sambil rebahan.</h1>
                        <p>Semua koleksi Abati Store bisa Anda lihat dari rumah. Pilih kebutuhan, cek ukuran yang ready,
                            lalu pesan langsung lewat WhatsApp.</p>
                        <button class="btn btn-gold">Jelajahi Koleksi</button>
                    </div>
                </div>
                <div class="carousel-item position-relative h-100">
                    <img src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp"
                        class="d-block w-100" alt="Slide 2">
                    <div class="slideText">
                        <small>PROMO TERBARU</small>
                        <h1>Temukan pakaian yang pas.</h1>
                        <p>Lihat koleksi pilihan dan promo terbaru Abati Store.</p>
                        <button class="btn btn-gold">Lihat Promo</button>
                    </div>
                </div>
                <div class="carousel-item position-relative h-100">
                    <img src="https://abatistore.com/storage/products/5Qcc9Cf0ALYgv2pie5ttlqy0PcrGQD6wtkKUGjVK.webp"
                        class="d-block w-100" alt="Slide 3">
                    <div class="slideText">
                        <small>KOLEKSI TERBARU</small>
                        <h1>Rapi untuk setiap kesempatan.</h1>
                        <p>Koko, kurta, jubah dan pakaian pria pilihan untuk aktivitas Anda.</p>
                        <button class="btn btn-gold">Lihat Koleksi</button>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>

        <!-- 2. KATEGORI & UKURAN -->
        <section id="kategori">
            <div class="container-xl">
                <div class="row row-cols-4 row-cols-md-8 g-2 g-md-3">
                    <div class="col">
                        <a class="cat d-flex flex-column align-items-center justify-content-center"
                            href="katalog.html?kategori=koko">
                            <span><img src="assets/icons/koko.svg" alt=""></span>
                            <b>Baju Koko</b>
                        </a>
                    </div>
                    <div class="col">
                        <a class="cat d-flex flex-column align-items-center justify-content-center"
                            href="katalog.html?kategori=jubah">
                            <span><img src="assets/icons/jubah.svg" alt=""></span>
                            <b>Jubah</b>
                        </a>
                    </div>
                    <div class="col">
                        <a class="cat d-flex flex-column align-items-center justify-content-center"
                            href="katalog.html?kategori=jaket">
                            <span><img src="assets/icons/jaket.svg" alt=""></span>
                            <b>Jaket</b>
                        </a>
                    </div>
                    <div class="col">
                        <a class="cat d-flex flex-column align-items-center justify-content-center"
                            href="katalog.html?kategori=oversize">
                            <span><img src="assets/icons/oversize.svg" alt=""></span>
                            <b>Oversize</b>
                        </a>
                    </div>
                    <div class="col">
                        <a class="cat d-flex flex-column align-items-center justify-content-center"
                            href="katalog.html?kategori=kaos">
                            <span><img src="assets/icons/kaos.svg" alt=""></span>
                            <b>Kaos</b>
                        </a>
                    </div>
                    <div class="col">
                        <a class="cat d-flex flex-column align-items-center justify-content-center"
                            href="katalog.html?kategori=kemeja">
                            <span><img src="assets/icons/kemeja.svg" alt=""></span>
                            <b>Kemeja</b>
                        </a>
                    </div>
                    <div class="col">
                        <a class="cat d-flex flex-column align-items-center justify-content-center"
                            href="katalog.html?kategori=sarung">
                            <span><img src="assets/icons/sarung.svg" alt=""></span>
                            <b>Sarung</b>
                        </a>
                    </div>
                    <div class="col">
                        <a class="cat d-flex flex-column align-items-center justify-content-center bg-light"
                            href="katalog.html">
                            <span><img src="assets/icons/semua.svg" alt=""></span>
                            <b>Semua</b>
                        </a>
                    </div>
                </div>

                <div
                    class="size-shortcut d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
                    <div class="d-flex flex-column gap-1">
                        <strong>Cari berdasarkan ukuran</strong>
                        <small class="text-secondary">Pilih ukuran, lalu lihat semua produk yang tersedia.</small>
                    </div>
                    <div class="size-buttons">
                        <a href="katalog.html?ukuran=S">S</a>
                        <a href="katalog.html?ukuran=M">M</a>
                        <a href="katalog.html?ukuran=L">L</a>
                        <a href="katalog.html?ukuran=XL">XL</a>
                        <a href="katalog.html?ukuran=XXL">XXL</a>
                        <a href="katalog.html?ukuran=XXXL">XXXL</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. REKOMENDASI -->
        <section id="rekomendasi">
            <div class="container-xl">
                <div class="d-flex justify-content-between align-items-end mb-3">
                    <div>
                        <h2>Rekomendasi Untuk Anda</h2>
                        <p class="text-muted mb-0">Pilihan berdasarkan kebutuhan yang paling sering dicari.</p>
                    </div>
                </div>
                <div class="row recs-scroll row-cols-md-5 g-2">
                    <div class="col rec-col">
                        <article class="rec">
                            <img src="https://abatistore.com/storage/products/a2lf83GncdoNeJbhy3wd5B7RqLezg5FEk8eenEfS.webp"
                                alt="">
                            <div class="recText">
                                <b>Untuk Kantor</b>
                                <span>Tampil profesional setiap hari</span>
                                <button class="btn btn-gold py-1 px-2">Lihat Produk</button>
                            </div>
                        </article>
                    </div>
                    <div class="col rec-col">
                        <article class="rec">
                            <img src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp"
                                alt="">
                            <div class="recText">
                                <b>Outfit Harian</b>
                                <span>Nyaman sepanjang aktivitas</span>
                                <button class="btn btn-gold py-1 px-2">Lihat Produk</button>
                            </div>
                        </article>
                    </div>
                    <div class="col rec-col">
                        <article class="rec">
                            <img src="https://abatistore.com/storage/products/5Qcc9Cf0ALYgv2pie5ttlqy0PcrGQD6wtkKUGjVK.webp"
                                alt="">
                            <div class="recText">
                                <b>Outfit Jumat</b>
                                <span>Tampil terbaik di hari Jumat</span>
                                <button class="btn btn-gold py-1 px-2">Lihat Produk</button>
                            </div>
                        </article>
                    </div>
                    <div class="col rec-col">
                        <article class="rec">
                            <img src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp"
                                alt="">
                            <div class="recText">
                                <b>Untuk Pengajian</b>
                                <span>Sopan & nyaman beribadah</span>
                                <button class="btn btn-gold py-1 px-2">Lihat Produk</button>
                            </div>
                        </article>
                    </div>
                    <div class="col rec-col">
                        <article class="rec">
                            <img src="https://abatistore.com/storage/products/a2lf83GncdoNeJbhy3wd5B7RqLezg5FEk8eenEfS.webp"
                                alt="">
                            <div class="recText">
                                <b>Walima & Kondangan</b>
                                <span>Tampil percaya diri</span>
                                <button class="btn btn-gold py-1 px-2">Lihat Produk</button>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. KOLEKSI TERBARU -->
        <section id="koleksi" class="latest">
            <div class="container-xl">
                <div class="d-flex justify-content-between align-items-end mb-3">
                    <h2>Koleksi Terbaru</h2>
                    <a class="text-secondary text-decoration-none">Lihat Semua →</a>
                </div>
                <div class="row row-cols-2 row-cols-md-4 g-3">
                    <div class="col">
                        <article class="product" data-product-card>
                            <div class="photo">
                                <img src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp"
                                    alt="Koko Modern Cream">
                                <span class="discount-badge">-17%</span>
                            </div>
                            <strong class="mt-2 d-block">Koko Modern Cream</strong>
                            <div class="price d-flex align-items-baseline gap-2 mt-1">
                                <del>Rp399.000</del>
                                <b>Rp329.000</b>
                            </div>
                        </article>
                    </div>
                    <div class="col">
                        <article class="product" data-product-card>
                            <div class="photo">
                                <img src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp"
                                    alt="Koko Modern Cream">
                            </div>
                            <strong class="mt-2 d-block">Koko Modern Cream</strong>
                            <div class="price d-flex align-items-baseline gap-2 mt-1">
                                <del>Rp399.000</del>
                                <b>Rp329.000</b>
                            </div>
                        </article>
                    </div>
                    <div class="col">
                        <article class="product" data-product-card>
                            <div class="photo">
                                <img src="https://abatistore.com/storage/products/5Qcc9Cf0ALYgv2pie5ttlqy0PcrGQD6wtkKUGjVK.webp"
                                    alt="Jubah Premium">
                            </div>
                            <strong class="mt-2 d-block">Jubah Premium</strong>
                            <div class="price d-flex align-items-baseline gap-2 mt-1">
                                <del>Rp399.000</del>
                                <b>Rp329.000</b>
                            </div>
                        </article>
                    </div>
                    <div class="col">
                        <article class="product" data-product-card>
                            <div class="photo">
                                <img src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp"
                                    alt="Kurta Premium">
                            </div>
                            <strong class="mt-2 d-block">Kurta Premium</strong>
                            <div class="price d-flex align-items-baseline gap-2 mt-1">
                                <del>Rp399.000</del>
                                <b>Rp329.000</b>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. KATEGORI SHOWCASE -->
        <section class="showcase category-showcase">
            <div class="container-xl">
                <a href="katalog.html?kategori=koko" class="category-banner category-banner-clean row g-0">
                    <div class="col-md-7 category-banner-visual">
                        <img src="toko.jpeg" alt="Koleksi Baju Koko">
                    </div>
                    <div class="col-md-5 category-banner-info d-flex flex-column justify-content-center">
                        <div class="category-banner-icon">
                            <img src="assets/icons/koko.svg" alt="">
                        </div>
                        <small>KOLEKSI BAJU KOKO</small>
                        <h2>Baju Koko</h2>
                        <p>Koko modern untuk ibadah, kantor, kajian, Jumat, kondangan dan berbagai kesempatan. Pilihan
                            bahan nyaman dengan desain yang tetap rapi dan berkelas.</p>
                        <div>
                            <span class="category-banner-button">Lihat Selengkapnya <b>→</b></span>
                        </div>
                    </div>
                </a>

                <!-- PRODUK SHOWCASE (VUE) -->
                <div class="row row-cols-2 row-cols-md-3 g-3 mt-3">
                    <div class="col" v-for="product in [...featuredProducts, ...otherProducts].slice(0, 6)"
                        :key="product.id">
                        <article class="product" @click="openModal(product); trackDetailClick(product)">
                            <div class="photo">
                                <img :src="getImageUrl(product.image)" :alt="product.name">
                                <span v-if="!product.is_habis"
                                    class="discount-badge">@{{ getDiscountPercent(product) }}% OFF</span>
                                <span v-else class="discount-badge bg-dark">HABIS</span>
                            </div>
                            <strong class="mt-2 d-block">@{{ product.name }}</strong>
                            <div class="price d-flex align-items-baseline gap-2 mt-1">
                                <del>@{{ formatRupiah(product.price) }}</del>
                                <b>@{{ formatRupiah(getDiscountPrice(product)) }}</b>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <a href="katalog.html?kategori=koko" class="btn border-warning text-dark px-4 py-2">Lihat Semua Baju
                        Koko →</a>
                </div>
            </div>
        </section>

        <!-- 6. TOKO OFFLINE -->
        <section id="offline" class="offline-store">
            <div class="container-xl">
                <div class="offline-box">
                    <div class="offline-main row g-0">
                        <div class="col-md-7 offline-store-image">
                            <img src="toko.jpeg" alt="Toko Abati Store">
                        </div>
                        <div class="col-md-5 offline-overlay d-flex flex-column justify-content-center">
                            <small class="text-uppercase fw-bold">MAU BELANJA OFFLINE?</small>
                            <h2>Kunjungi Toko Abati Store</h2>
                            <p>Lihat langsung koleksi kami, rasakan bahannya, dan coba ukuran yang tersedia.</p>
                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                <a class="offline-primary"
                                    href="https://www.google.com/maps/dir/?api=1&destination=-3.9986246,122.5113538"
                                    target="_blank">📍 Lihat Lokasi</a>
                                <button class="offline-secondary" type="button" onclick="openStoreVideo()">▶ Petunjuk ke
                                    Toko</button>
                            </div>
                        </div>
                    </div>

                    <!-- GALLERY PELANGGAN -->
                    <div class="store-gallery pt-4">
                        <div
                            class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3 mb-3">
                            <div>
                                <small class="fw-bold text-secondary">KENALAN DENGAN TOKO KAMI</small>
                                <h3 class="mt-1" style="font-family: Georgia, serif;">Suasana Toko & Pelanggan Kami</h3>
                                <p class="text-muted mb-0">Kalau ingin datang langsung, berikut gambaran suasana belanja
                                    di Abati Store.</p>
                            </div>
                            <a href="https://www.google.com/maps/search/?api=1&query=Abati+Store+Kendari"
                                target="_blank" class="text-dark fw-semibold">Buka Maps →</a>
                        </div>

                        <div class="row row-cols-2 row-cols-md-4 g-2 g-md-3">
                            <div class="col">
                                <button class="gallery-item w-100" type="button"
                                    onclick="openStoreImage('assets/pelanggan/pelanggan-1.jpg', 'Pelanggan Abati Store')">
                                    <img src="assets/pelanggan/pelanggan-1.jpg" alt="Pelanggan">
                                </button>
                            </div>
                            <div class="col">
                                <button class="gallery-item w-100" type="button"
                                    onclick="openStoreImage('assets/pelanggan/pelanggan-2.jpg', 'Pelanggan Abati Store')">
                                    <img src="assets/pelanggan/pelanggan-2.jpg" alt="Pelanggan">
                                </button>
                            </div>
                            <div class="col">
                                <button class="gallery-item w-100" type="button"
                                    onclick="openStoreImage('assets/pelanggan/pelanggan-3.jpg', 'Pelanggan Abati Store')">
                                    <img src="assets/pelanggan/pelanggan-3.jpg" alt="Pelanggan">
                                </button>
                            </div>
                            <div class="col">
                                <button class="gallery-item w-100" type="button"
                                    onclick="openStoreImage('assets/pelanggan/pelanggan-4.jpg', 'Pelanggan Abati Store')">
                                    <img src="assets/pelanggan/pelanggan-4.jpg" alt="Pelanggan">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 7. SERAGAM -->
        <section id="seragam" class="uniform py-5">
            <div class="container-xl">
                <div class="uniformBox row g-0">
                    <div class="col-md-6">
                        <img src="assets/pelanggan/WhatsApp Image 2026-06-24 at 08.42.56.webp"
                            class="w-100 h-100 object-fit-cover" alt="Seragam">
                    </div>
                    <div class="col-md-6 uniformText d-flex flex-column justify-content-center">
                        <small>PESANTREN • SEKOLAH • KOMUNITAS • INSTANSI</small>
                        <h2 class="my-2">Pesan Seragam di Abati Store</h2>
                        <p>Butuh pakaian seragam untuk santri, guru, komunitas atau kebutuhan kantor? Sampaikan
                            kebutuhan Anda, kami bantu dari pemilihan model hingga proses pemesanan.</p>
                        <ul class="ps-3">
                            <li>Bisa untuk pemesanan dalam jumlah banyak</li>
                            <li>Konsultasi model dan kebutuhan</li>
                            <li>Pesan langsung melalui WhatsApp</li>
                        </ul>
                        <div>
                            <button class="btn btn-gold mt-2">Konsultasi via WhatsApp</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PROMO BANNER -->
        <section id="promo" class="py-4">
            <div class="container-xl">
                <div class="p-4 rounded-3 d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3"
                    style="background: var(--cream);">
                    <div>
                        <h2>Belanja di Abati Store</h2>
                        <p class="text-secondary mb-0" style="font-size: 12px;">Cek koleksi dari rumah, lihat ukuran
                            yang ready, lalu chat kami jika sudah menemukan yang cocok.</p>
                    </div>
                    <button class="btn btn-gold flex-shrink-0">Chat WhatsApp</button>
                </div>
            </div>
        </section>

        <!-- FLOATING WHATSAPP -->
        <a class="floating-wa" href="https://wa.me/6281234567890" target="_blank" aria-label="Chat WhatsApp">
            <span>Ada yang ingin ditanyakan?</span>✆
        </a>

        <!-- FOOTER -->
        <footer class="bg-dark text-white pt-5 pb-3">
            <div class="container-xl">
                <div class="row g-4 mb-4">
                    <div class="col-12 col-md-5">
                        <div class="fw-bold fs-3" style="font-family: Georgia, serif; letter-spacing: 3px;">
                            ABATI<small class="d-block text-warning fw-bold fs-6"
                                style="letter-spacing: 4px;">STORE</small>
                        </div>
                        <p class="text-secondary small mt-2">Toko virtual pakaian pria yang memudahkan Anda menemukan
                            baju koko dan pakaian berkualitas sesuai kebutuhan. Lihat koleksi, cek ukuran, lalu pesan
                            melalui WhatsApp.</p>
                    </div>
                    <div class="col-6 col-md-2">
                        <h4 class="fs-6 fw-bold mb-3">Belanja</h4>
                        <div class="d-flex flex-column gap-2 small text-secondary">
                            <a href="#kategori">Kebutuhan</a>
                            <a href="#koleksi">Koleksi Terbaru</a>
                            <a href="#">Baju Koko</a>
                            <a href="#">Kurta</a>
                            <a href="#">Jubah</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <h4 class="fs-6 fw-bold mb-3">Bantuan</h4>
                        <div class="d-flex flex-column gap-2 small text-secondary">
                            <a href="#">Cara Belanja</a>
                            <a href="#">Panduan Ukuran</a>
                            <a href="#">Pengiriman</a>
                            <a href="#">Pembayaran</a>
                            <a href="#seragam">Pesan Seragam</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <h4 class="fs-6 fw-bold mb-3">Abati Store Kendari</h4>
                        <div class="small text-secondary lh-lg">
                            📍 Kendari, Sulawesi Tenggara<br>
                            📱 Pesan melalui WhatsApp<br>
                            📷 @fadkhera.kendari<br>
                            🎵 @fadkhera.kendari
                        </div>
                    </div>
                </div>
                <div class="border-top border-secondary pt-3 d-flex flex-column flex-md-row justify-content-between text-secondary small"
                    style="font-size: 10px;">
                    <span>© 2026 Abati Store. All rights reserved.</span>
                    <span>Pakaian adalah Akhlak • INIMI DIA</span>
                </div>
            </div>
        </footer>
    </div>

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <script>
    // Custom Search Mobile Toggle Logic
    const mobileSearchToggle = document.getElementById('mobileSearchToggle');
    const mobileSearchPanel = document.getElementById('mobileSearchPanel');
    const mobileSearchInput = document.getElementById('mobileSearchInput');

    mobileSearchToggle.addEventListener('click', () => {
        mobileSearchPanel.classList.toggle('open');
        if (mobileSearchPanel.classList.contains('open')) {
            setTimeout(() => mobileSearchInput.focus(), 80);
        }
    });

    // Vue Instance
    const {
        createApp
    } = Vue;
    createApp({
        data() {
            return {
                featuredProducts: [],
                otherProducts: [],
            }
        },
        mounted() {
            this.fetchProducts();
        },
        methods: {
            async fetchProducts() {
                let url = "{{route('product.index')}}";
                const featured = await fetch(`${url}?is_featured=1`).then(res => res.json()).catch(
                    () => []);
                const others = await fetch(`${url}?is_featured=0`).then(res => res.json()).catch(() => []);
                this.featuredProducts = featured;
                this.otherProducts = others;
            },
            getDiscountPercent(product) {
                return 10;
            },
            getDiscountPrice(product) {
                return product.price - (product.price * 0.1);
            },
            getImageUrl(path) {
                return path ? `/storage/${path}` : 'https://via.placeholder.com/300';
            },
            formatRupiah(val) {
                return 'Rp ' + Number(val).toLocaleString('id-ID');
            }
        }
    }).mount('#app');
    </script>
</body>

</html>