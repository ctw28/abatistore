<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Abati Store — Toko Virtual</title>
    <link rel="stylesheet" href="{{asset('css/newweb/01-base.css')}}">
    <link rel="stylesheet" href="{{asset('css/newweb/02-header.css')}}">
    <link rel="stylesheet" href="{{asset('css/newweb/03-menu.css')}}">
    <link rel="stylesheet" href="{{asset('css/newweb/04-slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/newweb/05-sections.css')}}">
    <link rel="stylesheet" href="{{asset('css/newweb/06-offline.css')}}">
    <link rel="stylesheet" href="{{asset('css/newweb/07-footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/newweb/08-responsive.css')}}">
</head>

<body>
    <div id="app">
        <header>
            <div class="wrap head">
                <button class="menu" aria-label="Buka menu kategori" type="button">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M4 6H20M4 12H20M4 18H20" />
                    </svg>
                </button>
                <a class="logo-img" href="/" aria-label="Abati Store">
                    <img src="logo-abati-store.png" alt="Abati Store">
                </a>
                <nav class="desktop-nav">
                    <a href="#kategori">Kategori</a><a href="#rekomendasi">Rekomendasi</a><a
                        href="#koleksi">Koleksi</a><a href="#offline">Toko</a><a href="#seragam">Seragam</a><a
                        href="#promo">Promo</a>
                </nav>
                <div class="search desktop-search">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <circle cx="11" cy="11" r="6.5"></circle>
                        <path d="M16 16L20 20"></path>
                    </svg>
                    <input placeholder="Cari baju koko, kurta...">
                </div>
                <button class="mobile-search-toggle" type="button" aria-label="Buka pencarian" aria-expanded="false">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <circle cx="11" cy="11" r="6.5"></circle>
                        <path d="M16 16L20 20"></path>
                    </svg>
                </button>
            </div>
            <div class="mobile-menu" id="mobileMenu">
                <!-- Header menu -->
                <div class="mobile-menu-head">
                    <a href="/" class="mobile-menu-logo" aria-label="Abati Store">
                        <img src="logo-abati-store.png" alt="Abati Store">
                    </a>

                    <button class="close-menu" type="button" aria-label="Tutup menu">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M6 6L18 18M18 6L6 18" />
                        </svg>
                    </button>
                </div>

                <!-- Kategori -->
                <div class="mobile-menu-section">
                    <h3>Kategori</h3>

                    <nav class="mobile-menu-categories" aria-label="Kategori produk">
                        <a href="katalog.html?kategori=koko">
                            <span class="menu-category-icon">
                                <img src="assets/icons/koko.svg" alt="">
                            </span>
                            <span class="menu-category-name">Baju Koko</span>
                            <span class="menu-arrow">›</span>
                        </a>

                        <a href="katalog.html?kategori=kurta">
                            <span class="menu-category-icon">
                                <img src="assets/icons/koko.svg" alt="">
                            </span>
                            <span class="menu-category-name">Kurta</span>
                            <span class="menu-arrow">›</span>
                        </a>

                        <a href="katalog.html?kategori=jubah">
                            <span class="menu-category-icon">
                                <img src="assets/icons/jubah.svg" alt="">
                            </span>
                            <span class="menu-category-name">Jubah</span>
                            <span class="menu-arrow">›</span>
                        </a>

                        <a href="katalog.html?kategori=sarung">
                            <span class="menu-category-icon">
                                <img src="assets/icons/sarung.svg" alt="">
                            </span>
                            <span class="menu-category-name">Sarung</span>
                            <span class="menu-arrow">›</span>
                        </a>

                        <a href="katalog.html?kategori=peci">
                            <span class="menu-category-icon menu-symbol">◠</span>
                            <span class="menu-category-name">Peci</span>
                            <span class="menu-arrow">›</span>
                        </a>

                        <a href="katalog.html?kategori=sandal">
                            <span class="menu-category-icon menu-symbol">♧</span>
                            <span class="menu-category-name">Sandal</span>
                            <span class="menu-arrow">›</span>
                        </a>
                    </nav>

                    <a href="katalog.html" class="mobile-menu-all">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <rect x="4" y="4" width="6" height="6" rx="1" />
                            <rect x="14" y="4" width="6" height="6" rx="1" />
                            <rect x="4" y="14" width="6" height="6" rx="1" />
                            <rect x="14" y="14" width="6" height="6" rx="1" />
                        </svg>
                        <span>Lihat Semua Koleksi</span>
                        <span class="menu-arrow">›</span>
                    </a>
                </div>

                <!-- Toko dan kontak -->
                <div class="mobile-menu-links">
                    <a href="#offline" class="mobile-menu-link">
                        <span class="menu-link-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M3 10L12 3L21 10V21H3Z" />
                                <path d="M9 21V14H15V21" />
                            </svg>
                        </span>

                        <span class="menu-link-content">
                            <strong>Toko Abati Store</strong>
                            <small>Alamat dan lokasi toko</small>
                        </span>

                        <span class="menu-arrow">›</span>
                    </a>

                    <a href="https://wa.me/6281234567890" class="mobile-menu-link" target="_blank" rel="noopener">
                        <span class="menu-link-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M20 11.5A8.5 8.5 0 0 1 7.4 19L3 20.5L4.5 16.3A8.5 8.5 0 1 1 20 11.5Z" />
                                <path d="M8 8.5C8.5 11 10 12.5 12.5 14L14 12.8L16 14L15.5 16C11 16.5 7 12.5 7.5 8Z" />
                            </svg>
                        </span>

                        <span class="menu-link-content">
                            <strong>Hubungi Kami</strong>
                            <small>Konsultasi produk melalui WhatsApp</small>
                        </span>

                        <span class="menu-arrow">›</span>
                    </a>
                </div>

                <!-- Media sosial -->
                <div class="mobile-menu-social">
                    <p>Ikuti media sosial Abati Store</p>

                    <div class="mobile-menu-social-icons">
                        <a href="https://www.instagram.com/fadkhera.kendari/" target="_blank" rel="noopener"
                            aria-label="Instagram Abati Store">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <rect x="3" y="3" width="18" height="18" rx="5" />
                                <circle cx="12" cy="12" r="4" />
                                <circle cx="17.5" cy="6.5" r=".8" fill="currentColor" stroke="none" />
                            </svg>
                        </a>

                        <a href="https://www.tiktok.com/@fadkhera.kendari" target="_blank" rel="noopener"
                            aria-label="TikTok Abati Store">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M14 3V15.5A4.5 4.5 0 1 1 10 11V14.5A1.5 1.5 0 1 0 11 16V3H14C14 6 16 8 19 8V11C17 11 15 10 14 9Z" />
                            </svg>
                        </a>

                        <!-- Ganti href dengan URL halaman Facebook resmi -->
                        <a href="URL_FACEBOOK_KAMU" target="_blank" rel="noopener" aria-label="Facebook Abati Store">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M14 21V13H17L17.5 9.5H14V7.5C14 6.5 14.5 6 15.8 6H17.5V3.1C16.7 3 15.8 3 14.8 3C11.8 3 10 4.8 10 7.8V9.5H7V13H10V21Z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="menu-backdrop"></div>
        </header>

        <div class="mobile-search-panel" aria-hidden="true">
            <div class="mobile-search-inner">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <circle cx="11" cy="11" r="6.5"></circle>
                    <path d="M16 16L20 20"></path>
                </svg>
                <input id="mobileSearchInput" type="search" placeholder="Cari baju koko, kurta..." autocomplete="off">
            </div>
        </div>

        <!-- 1. BANNER SLIDER -->
        <div class="slider">
            <div class="slide on"><img
                    src="https://abatistore.com/storage/products/a2lf83GncdoNeJbhy3wd5B7RqLezg5FEk8eenEfS.webp">
                <div class="slideText"><small>ABATI STORE • BELANJA MUDAH</small>
                    <h1>Cari baju sambil rebahan.</h1>
                    <p>Semua koleksi Abati Store bisa Anda lihat dari rumah. Pilih kebutuhan, cek ukuran yang ready,
                        lalu
                        pesan langsung lewat WhatsApp.</p><button>Jelajahi Koleksi</button>
                </div>
            </div>
            <div class="slide"><img
                    src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp">
                <div class="slideText"><small>PROMO TERBARU</small>
                    <h1>Temukan pakaian yang pas.</h1>
                    <p>Lihat koleksi pilihan dan promo terbaru Abati Store.</p><button>Lihat Promo</button>
                </div>
            </div>
            <div class="slide"><img
                    src="https://abatistore.com/storage/products/5Qcc9Cf0ALYgv2pie5ttlqy0PcrGQD6wtkKUGjVK.webp">
                <div class="slideText"><small>KOLEKSI TERBARU</small>
                    <h1>Rapi untuk setiap kesempatan.</h1>
                    <p>Koko, kurta, jubah dan pakaian pria pilihan untuk aktivitas Anda.</p><button>Lihat
                        Koleksi</button>
                </div>
            </div>
            <button class="arrow prev">‹</button><button class="arrow next">›</button>
            <div class="dots"><button class="dot on"></button><button class="dot"></button><button class="dot"></button>
            </div>
        </div>


        <!-- =========================================================
     KATEGORI + CARI BERDASARKAN UKURAN
     ========================================================= -->
        <section id="kategori">
            <div class="wrap">

                <div class="categories">

                    <a class="cat cat-icon" href="katalog.html?kategori=koko">
                        <span><img src="assets/icons/koko.svg" alt=""></span>
                        <b>Baju Koko</b>
                    </a>

                    <a class="cat cat-icon" href="katalog.html?kategori=jubah">
                        <span><img src="assets/icons/jubah.svg" alt=""></span>
                        <b>Jubah</b>
                    </a>

                    <a class="cat cat-icon" href="katalog.html?kategori=jaket">
                        <span><img src="assets/icons/jaket.svg" alt=""></span>
                        <b>Jaket</b>
                    </a>

                    <a class="cat cat-icon" href="katalog.html?kategori=oversize">
                        <span><img src="assets/icons/oversize.svg" alt=""></span>
                        <b>Oversize</b>
                    </a>

                    <a class="cat cat-icon" href="katalog.html?kategori=kaos">
                        <span><img src="assets/icons/kaos.svg" alt=""></span>
                        <b>Kaos</b>
                    </a>

                    <a class="cat cat-icon" href="katalog.html?kategori=kemeja">
                        <span><img src="assets/icons/kemeja.svg" alt=""></span>
                        <b>Kemeja</b>
                    </a>

                    <a class="cat cat-icon" href="katalog.html?kategori=sarung">
                        <span><img src="assets/icons/sarung.svg" alt=""></span>
                        <b>Sarung</b>
                    </a>

                    <a class="cat cat-icon all-category" href="katalog.html">
                        <span><img src="assets/icons/semua.svg" alt=""></span>
                        <b>Semua</b>
                    </a>

                </div>

                <div class="size-shortcut">
                    <div>
                        <strong>Cari berdasarkan ukuran</strong>
                        <small>Pilih ukuran, lalu lihat semua produk yang tersedia.</small>
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
            <div class="wrap">
                <div class="sectionHead">
                    <div>
                        <h2>Rekomendasi Untuk Anda</h2>
                        <p>Pilihan berdasarkan kebutuhan yang paling sering dicari.</p>
                    </div>
                    <!-- <a class="see">Lihat Semua →</a> -->
                </div>
                <div class="recs">
                    <article class="rec"><img
                            src="https://abatistore.com/storage/products/a2lf83GncdoNeJbhy3wd5B7RqLezg5FEk8eenEfS.webp">
                        <div class="recText"><b>Untuk Kantor</b><span>Tampil profesional setiap hari</span><button>Lihat
                                Produk</button></div>
                    </article>
                    <article class="rec"><img
                            src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp">
                        <div class="recText"><b>Outfit Harian</b><span>Nyaman sepanjang aktivitas</span><button>Lihat
                                Produk</button></div>
                    </article>
                    <article class="rec"><img
                            src="https://abatistore.com/storage/products/5Qcc9Cf0ALYgv2pie5ttlqy0PcrGQD6wtkKUGjVK.webp">
                        <div class="recText"><b>Outfit Jumat</b><span>Tampil terbaik di hari Jumat</span><button>Lihat
                                Produk</button></div>
                    </article>
                    <article class="rec"><img
                            src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp">
                        <div class="recText"><b>Untuk Pengajian</b><span>Sopan & nyaman beribadah</span><button>Lihat
                                Produk</button></div>
                    </article>
                    <article class="rec"><img
                            src="https://abatistore.com/storage/products/a2lf83GncdoNeJbhy3wd5B7RqLezg5FEk8eenEfS.webp">
                        <div class="recText"><b>Walima & Kondangan</b><span>Tampil percaya diri</span><button>Lihat
                                Produk</button></div>
                    </article>
                </div>
            </div>
        </section>

        <!-- 4. KOLEKSI TERBARU / BEST SELLER -->
        <section id="koleksi" class="latest">
            <div class="wrap">
                <div class="sectionHead">
                    <div>
                        <h2>Koleksi Terbaru</h2>
                        <!-- <p>Harga coret dan ukuran ready langsung terlihat.</p> -->
                    </div><a class="see">Lihat Semua →</a>
                </div>
                <div class="products">
                    <article class="product" data-product-card>
                        <div class="photo">
                            <img src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp"
                                alt="Koko Modern Cream">

                            <span class="discount-badge">-17%</span>
                        </div>

                        <strong>Koko Modern Cream</strong>

                        <div class="price">
                            <del>Rp399.000</del>
                            <b>Rp329.000</b>
                        </div>
                    </article>

                    <article class="product" data-product-card>
                        <div class="photo"><img
                                src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp"
                                alt="Koko Modern Cream"></div>
                        <strong>Koko Modern Cream</strong>

                        <div class="price"><del>Rp399.000</del><b>Rp329.000</b></div>


                    </article>

                    <article class="product" data-product-card>
                        <div class="photo"><img
                                src="https://abatistore.com/storage/products/5Qcc9Cf0ALYgv2pie5ttlqy0PcrGQD6wtkKUGjVK.webp"
                                alt="Jubah Premium"></div>
                        <strong>Jubah Premium</strong>

                        <div class="price"><del>Rp399.000</del><b>Rp329.000</b></div>


                    </article>

                    <article class="product" data-product-card>
                        <div class="photo"><img
                                src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp"
                                alt="Kurta Premium"></div>
                        <strong>Kurta Premium</strong>

                        <div class="price"><del>Rp399.000</del><b>Rp329.000</b></div>


                    </article>
                </div>
            </div>
        </section>


        <!-- =========================================================
     KATEGORI BAJU KOKO
     ========================================================= -->
        <section id="cat-koko" class="showcase category-showcase">
            <div class="wrap">

                <a href="katalog.html?kategori=koko" class="category-banner category-banner-clean">

                    <div class="category-banner-visual">
                        <img src="toko.jpeg" alt="Koleksi Baju Koko">
                    </div>

                    <div class="category-banner-info">
                        <div class="category-banner-icon">
                            <img src="assets/icons/koko.svg" alt="">
                        </div>

                        <small>KOLEKSI BAJU KOKO</small>
                        <h2>Baju Koko</h2>

                        <p>
                            Koko modern untuk ibadah, kantor, kajian,
                            Jumat, kondangan dan berbagai kesempatan.
                            Pilihan bahan nyaman dengan desain yang
                            tetap rapi dan berkelas.
                        </p>

                        <span class="category-banner-button">
                            Lihat Koleksi Baju Koko <b>→</b>
                        </span>
                    </div>
                </a>

                <div class="showProducts">
                    <article class="product" data-product-card v-for="product in kokoProducts" :key="product.id"
                        @click="openModal(product); trackDetailClick(product)" style="cursor:pointer;">
                        <div class="photo">
                            <img :src="getImageUrl(product.image)" :alt="product.name" loading="lazy">

                            <span class="discount-badge">
                                @{{ getDiscountPercent(product) }}% OFF
                            </span>
                        </div>

                        <strong>@{{ product.name }}</strong>

                        <div class="price">
                            <del>@{{ formatRupiah(product.price) }}</del>
                            <b>@{{ formatRupiah(getDiscountPrice(product)) }}</b>
                        </div>
                    </article>
                </div>

                <div class="more">
                    <a href="katalog.html?kategori=koko">
                        Lihat Semua Baju Koko →
                    </a>
                </div>

            </div>
        </section>


        <!-- =========================================================
     KATEGORI JUBAH
     ========================================================= -->
        <section id="cat-jubah" class="showcase category-showcase">
            <div class="wrap">

                <a href="katalog.html?kategori=jubah" class="category-banner category-banner-clean">

                    <div class="category-banner-visual">
                        <img src="toko.jpeg" alt="Koleksi Jubah">
                    </div>

                    <div class="category-banner-info">
                        <div class="category-banner-icon">
                            <img src="assets/icons/jubah.svg" alt="">
                        </div>

                        <small>KOLEKSI JUBAH</small>
                        <h2>Jubah</h2>

                        <p>
                            Jubah dengan potongan yang nyaman dan tampilan
                            rapi untuk ibadah, kajian, kegiatan keagamaan
                            maupun aktivitas sehari-hari.
                        </p>

                        <span class="category-banner-button">
                            Lihat Koleksi Jubah <b>→</b>
                        </span>
                    </div>
                </a>

                <div class="showProducts">
                    <article class="product" data-product-card v-for="product in jubahProducts" :key="product.id"
                        @click="openModal(product); trackDetailClick(product)" style="cursor:pointer;">
                        <div class="photo">
                            <img :src="getImageUrl(product.image)" :alt="product.name" loading="lazy">

                            <span class="discount-badge">
                                @{{ getDiscountPercent(product) }}% OFF
                            </span>
                        </div>

                        <strong>@{{ product.name }}</strong>

                        <div class="price">
                            <del>@{{ formatRupiah(product.price) }}</del>
                            <b>@{{ formatRupiah(getDiscountPrice(product)) }}</b>
                        </div>
                    </article>
                </div>

                <div class="more">
                    <a href="katalog.html?kategori=jubah">
                        Lihat Semua Jubah →
                    </a>
                </div>

            </div>
        </section>


        <!-- 8. BELANJA OFFLINE -->
        <!-- ========================================================= -->
        <section id="offline" class="offline-store">
            <div class="wrap">

                <!-- FOTO TOKO + INFORMASI -->
                <div class="offline-box">

                    <div class="offline-main">
                        <div class="offline-store-image">
                            <img src="toko.jpeg" alt="Toko Abati Store">
                        </div>

                        <div class="offline-overlay">
                            <small>MAU BELANJA OFFLINE?</small>

                            <h2>Kunjungi Toko Abati Store</h2>

                            <p>
                                Lihat langsung koleksi kami, rasakan bahannya,
                                dan coba ukuran yang tersedia.
                            </p>

                            <div class="offline-actions">

                                <a class="offline-primary"
                                    href="https://www.google.com/maps/dir/?api=1&destination=-3.9986246,122.5113538"
                                    target="_blank" rel="noopener">
                                    📍 Lihat Lokasi
                                </a>

                                <a class="offline-secondary"
                                    href="https://www.tiktok.com/@fadkhera.kendari/video/7608130662645681416"
                                    target="_blank" rel="noopener">
                                    ▶ Lihat Video Lokasi
                                </a>

                            </div>
                        </div>
                    </div>


                    <!-- SUASANA TOKO & PELANGGAN -->
                    <div class="store-gallery">
                        <div class="gallery-grid">
                            <!-- FOTO PELANGGAN 1 -->
                            <button class="gallery-item" type="button"
                                onclick="openStoreImage('toko1.jpeg','Pelanggan Abati Store')">
                                <img src="toko4.jpeg" alt="Pelanggan Abati Store">
                            </button>


                            <!-- FOTO PELANGGAN 2 -->
                            <button class="gallery-item" type="button"
                                onclick="openStoreImage('toko2.jpeg','Pelanggan Abati Store')">
                                <img src="toko2.jpeg" alt="Pelanggan Abati Store">
                            </button>

                            <!-- FOTO PELANGGAN 3 -->
                            <button class="gallery-item" type="button"
                                onclick="openStoreImage('toko3.jpeg','Pelanggan Abati Store')">
                                <img src="toko3.jpeg" alt="Pelanggan Abati Store">

                            </button>

                            <!-- FOTO PELANGGAN 4 -->
                            <button class="gallery-item" type="button"
                                onclick="openStoreImage('toko4.jpeg','Pelanggan Abati Store')">
                                <img src="toko4.jpeg" alt="Pelanggan Abati Store">s
                            </button>
                            <!-- FOTO PELANGGAN 5 -->
                            <button class="gallery-item" type="button"
                                onclick="openStoreImage('toko3.jpeg','Pelanggan Abati Store')">
                                <img src="toko3.jpeg" alt="Pelanggan Abati Store">

                            </button>

                            <!-- FOTO PELANGGAN 6 -->
                            <button class="gallery-item" type="button"
                                onclick="openStoreImage('toko4.jpeg','Pelanggan Abati Store')">
                                <img src="toko4.jpeg" alt="Pelanggan Abati Store">s
                            </button>

                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- =========================================================
     KATEGORI KAOS
     ========================================================= -->
        <section id="cat-kaos" class="showcase category-showcase">
            <div class="wrap">

                <a href="katalog.html?kategori=kaos" class="category-banner category-banner-clean">

                    <div class="category-banner-visual">
                        <img src="toko.jpeg" alt="Koleksi Kaos">
                    </div>

                    <div class="category-banner-info">
                        <div class="category-banner-icon">
                            <img src="assets/icons/kaos.svg" alt="">
                        </div>

                        <small>KOLEKSI KAOS</small>
                        <h2>Kaos</h2>

                        <p>
                            Pilihan kaos untuk aktivitas sehari-hari
                            dengan gaya simpel, nyaman, dan mudah
                            dipadukan dengan berbagai outfit.
                        </p>

                        <span class="category-banner-button">
                            Lihat Koleksi Kaos <b>→</b>
                        </span>
                    </div>
                </a>

                <div class="showProducts">
                    <article class="product" data-product-card v-for="product in kaosProducts" :key="product.id"
                        @click="openModal(product); trackDetailClick(product)" style="cursor:pointer;">
                        <div class="photo">
                            <img :src="getImageUrl(product.image)" :alt="product.name" loading="lazy">

                            <span class="discount-badge">
                                @{{ getDiscountPercent(product) }}% OFF
                            </span>
                        </div>

                        <strong>@{{ product.name }}</strong>

                        <div class="price">
                            <del>@{{ formatRupiah(product.price) }}</del>
                            <b>@{{ formatRupiah(getDiscountPrice(product)) }}</b>
                        </div>
                    </article>
                </div>

                <div class="more">
                    <a href="katalog.html?kategori=kaos">
                        Lihat Semua Kaos →
                    </a>
                </div>

            </div>
        </section>


        <!-- 9. SERAGAM -->

        <section id="seragam" class="uniform">
            <div class="wrap">
                <div class="uniformBox">
                    <div class="uniformImg"><img src="assets/pelanggan/WhatsApp Image 2026-06-24 at 08.42.56.webp">
                    </div>
                    <div class="uniformText"><small>PESANTREN • SEKOLAH • KOMUNITAS • INSTANSI</small>
                        <h2>Pesan Seragam di Abati Store</h2>
                        <p>Butuh pakaian seragam untuk santri, guru, komunitas atau kebutuhan kantor? Sampaikan
                            kebutuhan
                            Anda, kami bantu dari pemilihan model hingga proses pemesanan.</p>
                        <ul>
                            <li>Bisa untuk pemesanan dalam jumlah banyak</li>
                            <li>Konsultasi model dan kebutuhan</li>
                            <li>Pesan langsung melalui WhatsApp</li>
                        </ul><button>Konsultasi via WhatsApp</button>
                    </div>
                </div>
            </div>
        </section>


        <section id="promo">
            <div class="wrap">
                <div class="promo-box">
                    <div class="promo-text">
                        <h2>Belanja Dari Rumah Sekarang!</h2>
                        <p>
                            Cek koleksi dari rumah, lihat ukuran yang ready,
                            lalu chat kami jika sudah menemukan yang cocok.
                        </p>
                    </div>

                    <div class="promo-actions">
                        <a class="promo-wa" href="https://wa.me/6281234567890" target="_blank" rel="noopener">
                            Chat WhatsApp Sekarang
                        </a>

                        <a class="promo-catalog" href="katalog.html">
                            Lihat Koleksi Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <a class="floating-wa" href="https://wa.me/6285241800852" target="_blank" aria-label="Chat WhatsApp"><span>Ada
                yang
                ingin ditanyakan?</span>✆</a>
        <footer>
            <div class="wrap footerGrid">
                <div>
                    <div class="footerLogo">ABATI<small>STORE</small></div>
                    <p>Toko virtual pakaian pria yang memudahkan Anda menemukan baju koko dan pakaian berkualitas sesuai
                        kebutuhan. Lihat koleksi, cek ukuran, lalu pesan melalui WhatsApp.</p>
                </div>
                <div>
                    <h4>Belanja</h4>
                    <div class="links"><a href="#kategori">Kebutuhan</a><a href="#koleksi">Koleksi Terbaru</a><a
                            href="#">Baju Koko</a><a href="#">Kurta</a><a href="#">Jubah</a></div>
                </div>
                <div>
                    <h4>Bantuan</h4>
                    <div class="links"><a href="#">Cara Belanja</a><a href="#">Panduan Ukuran</a><a
                            href="#">Pengiriman</a><a href="#">Pembayaran</a><a href="#seragam">Pesan Seragam</a></div>
                </div>
                <div>
                    <h4>Abati Store Kendari</h4>
                    <div class="contact">📍 Kendari, Sulawesi Tenggara<br>📱 Pesan melalui WhatsApp<br>📷
                        @fadkhera.kendari<br>🎵 @fadkhera.kendari</div>
                </div>
            </div>
            <div class="wrap bottom"><span>© 2026 Abati Store. All rights reserved.</span><span>Pakaian adalah Akhlak •
                    INIMI DIA</span></div>
    </div>
    </footer>

    <!-- =========================================================
     JAVASCRIPT
     Abati Store Homepage
     ========================================================= -->

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <script>
        /* =========================================================
   1. HOMEPAGE UI
   Slider + Menu Mobile + Search Mobile
   ========================================================= */

        function initHomepageUI() {

            /* ---------------------------------------------------------
               SLIDER
               --------------------------------------------------------- */

            const slider = document.querySelector('.slider');

            if (slider) {

                const slides = [...slider.querySelectorAll('.slide')];
                const dots = [...slider.querySelectorAll('.dot')];
                const nextButton = slider.querySelector('.next');
                const prevButton = slider.querySelector('.prev');

                let currentSlide = 0;
                let sliderTimer = null;

                function showSlide(index) {

                    if (!slides.length) return;

                    currentSlide =
                        (index + slides.length) % slides.length;

                    slides.forEach((slide, index) => {
                        slide.classList.toggle(
                            'on',
                            index === currentSlide
                        );
                    });

                    dots.forEach((dot, index) => {
                        dot.classList.toggle(
                            'on',
                            index === currentSlide
                        );
                    });
                }


                function startSlider() {

                    clearInterval(sliderTimer);

                    if (slides.length <= 1) return;

                    sliderTimer = setInterval(() => {
                        showSlide(currentSlide + 1);
                    }, 5000);
                }


                nextButton?.addEventListener('click', () => {

                    showSlide(currentSlide + 1);
                    startSlider();

                });


                prevButton?.addEventListener('click', () => {

                    showSlide(currentSlide - 1);
                    startSlider();

                });


                dots.forEach((dot, index) => {

                    dot.addEventListener('click', () => {

                        showSlide(index);
                        startSlider();

                    });

                });


                showSlide(0);
                startSlider();


                /*
                 * Hentikan autoplay ketika mouse berada
                 * di atas slider.
                 */
                slider.addEventListener('mouseenter', () => {
                    clearInterval(sliderTimer);
                });


                slider.addEventListener('mouseleave', () => {
                    startSlider();
                });


                /*
                 * Support swipe sederhana untuk HP.
                 */
                let touchStartX = 0;

                slider.addEventListener('touchstart', event => {

                    touchStartX =
                        event.touches[0].clientX;

                }, {
                    passive: true
                });


                slider.addEventListener('touchend', event => {

                    const touchEndX =
                        event.changedTouches[0].clientX;

                    const distance =
                        touchEndX - touchStartX;

                    if (Math.abs(distance) < 50) return;

                    if (distance < 0) {
                        showSlide(currentSlide + 1);
                    } else {
                        showSlide(currentSlide - 1);
                    }

                    startSlider();

                }, {
                    passive: true
                });
            }


            /* ---------------------------------------------------------
               MENU MOBILE
               --------------------------------------------------------- */

            /* =====================================================
   MENU MOBILE — ABATI STORE
   ===================================================== */

            const menuButton = document.querySelector('.menu');
            const mobileMenu = document.querySelector('.mobile-menu');
            const menuBackdrop = document.querySelector('.menu-backdrop');
            const closeMenuButton = document.querySelector('.close-menu');

            function openMobileMenu() {
                if (!mobileMenu || !menuBackdrop) return;

                mobileMenu.classList.add('open');
                menuBackdrop.classList.add('open');

                document.body.classList.add('menu-open');
                document.body.style.overflow = 'hidden';

                menuButton?.setAttribute('aria-expanded', 'true');
                closeMenuButton?.focus();
            }

            function closeMobileMenu() {
                if (!mobileMenu || !menuBackdrop) return;

                mobileMenu.classList.remove('open');
                menuBackdrop.classList.remove('open');

                document.body.classList.remove('menu-open');
                document.body.style.overflow = '';

                menuButton?.setAttribute('aria-expanded', 'false');
            }

            menuButton?.addEventListener('click', openMobileMenu);
            closeMenuButton?.addEventListener('click', closeMobileMenu);
            menuBackdrop?.addEventListener('click', closeMobileMenu);

            mobileMenu?.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', closeMobileMenu);
            });

            document.addEventListener('keydown', event => {
                if (event.key === 'Escape') {
                    closeMobileMenu();
                }
            });


            /* ---------------------------------------------------------
               SEARCH MOBILE
               --------------------------------------------------------- */

            const searchButton =
                document.querySelector('.mobile-search-toggle');

            const searchPanel =
                document.querySelector('.mobile-search-panel');

            const searchInput =
                document.querySelector('#mobileSearchInput');


            function setMobileSearch(open) {

                if (!searchPanel) return;

                searchPanel.classList.toggle(
                    'open',
                    open
                );

                searchPanel.setAttribute(
                    'aria-hidden',
                    String(!open)
                );

                searchButton?.setAttribute(
                    'aria-expanded',
                    String(open)
                );


                if (open) {

                    setTimeout(() => {
                        searchInput?.focus();
                    }, 100);

                }

            }


            searchButton?.addEventListener(
                'click',
                () => {

                    const isOpen =
                        searchPanel?.classList.contains('open');

                    setMobileSearch(!isOpen);

                }
            );


            document.addEventListener(
                'click',
                event => {

                    if (!searchPanel?.classList.contains('open')) {
                        return;
                    }

                    const clickedInsidePanel =
                        searchPanel.contains(event.target);

                    const clickedButton =
                        searchButton?.contains(event.target);

                    if (
                        !clickedInsidePanel &&
                        !clickedButton
                    ) {
                        setMobileSearch(false);
                    }

                }
            );


            /* ---------------------------------------------------------
               ESCAPE
               --------------------------------------------------------- */

            document.addEventListener(
                'keydown',
                event => {

                    if (event.key !== 'Escape') return;

                    closeMobileMenu();
                    setMobileSearch(false);

                }
            );
        }


        /* =========================================================
           2. VUE APP
           ========================================================= */

        const {
            createApp
        } = Vue;


        createApp({

            /* ---------------------------------------------------------
               DATA
               --------------------------------------------------------- */

            data() {

                return {

                    featuredProducts: [],
                    otherProducts: [],
                    categories: [],
                    selectedProduct: {},
                    selectedCategory: null,
                    visibleCount: 500,
                    activeImageIndex: 0,
                    slideInterval: null,
                    stockFilter: 'available',
                    kokoProducts: [],
                    jubahProducts: [],
                    kaosProducts: [],
                };
            },


            /* ---------------------------------------------------------
            MOUNTED
            --------------------------------------------------------- */

            mounted() {

                // this.fetchHomepageProducts();
                this.fetchProducts();
                /*
                 * PENTING:
                 * UI seperti slider/menu/search diinisialisasi
                 * SETELAH Vue selesai melakukan mount.
                 *
                 * Ini yang memperbaiki masalah slider sebelumnya.
                 */
                this.$nextTick(() => {
                    initHomepageUI();
                });

            },


            /* =========================================================
               COMPUTED
               ========================================================= */

            computed: {
                /* -----------------------------------------------------
                   SEMUA PRODUK
                   ----------------------------------------------------- */
                allProducts() {

                    return [
                        ...this.featuredProducts,
                        ...this.otherProducts
                    ];

                },


                /* -----------------------------------------------------
                   PRODUK KOKO
                   ----------------------------------------------------- */



                /* -----------------------------------------------------
                   PRODUK JUBAH
                   ----------------------------------------------------- */

                jubahProducts() {

                    return this.allProducts
                        .filter(product =>
                            product.category &&
                            product.category.name &&
                            product.category.name.toLowerCase() === 'jubah'
                        )
                        .slice(0, 6);

                },


                /* -----------------------------------------------------
                   PRODUK JAKET
                   ----------------------------------------------------- */

                jaketProducts() {

                    return this.allProducts
                        .filter(product =>
                            product.category &&
                            product.category.name &&
                            product.category.name.toLowerCase() === 'jaket'
                        )
                        .slice(0, 6);

                },


                /* -----------------------------------------------------
                   PRODUK OVERSIZE
                   ----------------------------------------------------- */

                oversizeProducts() {

                    return this.allProducts
                        .filter(product =>
                            product.category &&
                            product.category.name &&
                            product.category.name.toLowerCase() === 'oversize'
                        )
                        .slice(0, 6);

                },


                /* -----------------------------------------------------
                   PRODUK KAOS
                   ----------------------------------------------------- */

                kaosProducts() {

                    return this.allProducts
                        .filter(product =>
                            product.category &&
                            product.category.name &&
                            product.category.name.toLowerCase() === 'kaos'
                        )
                        .slice(0, 6);

                },


                /* -----------------------------------------------------
                   PRODUK KEMEJA
                   ----------------------------------------------------- */

                kemejaProducts() {

                    return this.allProducts
                        .filter(product =>
                            product.category &&
                            product.category.name &&
                            product.category.name.toLowerCase() === 'kemeja'
                        )
                        .slice(0, 6);

                },


                /* -----------------------------------------------------
                   PRODUK SARUNG
                   ----------------------------------------------------- */

                sarungProducts() {

                    return this.allProducts
                        .filter(product =>
                            product.category &&
                            product.category.name &&
                            product.category.name.toLowerCase() === 'sarung'
                        )
                        .slice(0, 6);

                },


                /* -----------------------------------------------------
                   UKURAN PRODUK DETAIL
                   ----------------------------------------------------- */

                availableSizes() {

                    return this.selectedProduct?.stocks
                        ?.filter(item => item.stock > 0) ?? [];

                },


                /* -----------------------------------------------------
                   FILTER KATALOG / MODAL
                   ----------------------------------------------------- */

                filteredProducts() {

                    let products = [
                        ...this.featuredProducts,
                        ...this.otherProducts
                    ];


                    /* Produk habis */

                    if (this.stockFilter === 'out') {

                        return products.filter(
                            product => product.is_habis
                        );

                    }


                    /* Filter kategori */

                    if (this.selectedCategory) {

                        products = products.filter(
                            product =>
                            product.category &&
                            product.category.id ===
                            this.selectedCategory
                        );

                    }


                    /* Hanya produk tersedia */

                    products = products.filter(
                        product => !product.is_habis
                    );


                    return products;

                },


                visibleProducts() {

                    return this.filteredProducts.slice(
                        0,
                        this.visibleCount
                    );

                },


                /* -----------------------------------------------------
                   GAMBAR PRODUK DETAIL
                   ----------------------------------------------------- */

                allImages() {

                    if (!this.selectedProduct) {
                        return [];
                    }


                    const mainImage =
                        this.selectedProduct.image ? [this.selectedProduct.image] : [];


                    const otherImages =
                        this.selectedProduct.images
                        ?.map(image => image.image) || [];


                    return [
                        ...mainImage,
                        ...otherImages
                    ];

                },


                activeImage() {

                    return (
                        this.allImages[
                            this.activeImageIndex
                        ] || ''
                    );

                }

            },


            /* =========================================================
               METHODS
               ========================================================= */

            methods: {

                /* -----------------------------------------------------
                   DISKON
                   ----------------------------------------------------- */

                getDiscountPercent(product) {

                    const category =
                        product.category?.name
                        ?.toLowerCase() || '';


                    if (
                        category === 'koko' ||
                        category === 'kurta' ||
                        category === 'celana' ||
                        category === 'jacket'
                    ) {

                        return 10;

                    }


                    return 5;

                },


                getDiscountPrice(product) {

                    const discount =
                        this.getDiscountPercent(product);

                    const price =
                        Number(product.price) || 0;


                    return price -
                        (price * discount / 100);

                },


                /* -----------------------------------------------------
                   FILTER
                   ----------------------------------------------------- */

                changeStock(type) {

                    this.stockFilter = type;

                    this.selectedCategory = null;

                },


                changeCategory(categoryId) {

                    this.stockFilter = 'available';

                    this.selectedCategory =
                        categoryId;

                    this.visibleCount = 500;

                },


                loadMore() {

                    this.visibleCount += 500;

                },


                /* -----------------------------------------------------
                   IMAGE
                   ----------------------------------------------------- */

                getImageUrl(path) {

                    if (!path) {
                        return '/assets/no-image.png';
                    }

                    return `/storage/${path}`;

                },


                getFile(path) {

                    return path || '';

                },


                /* -----------------------------------------------------
                   FORMAT RUPIAH
                   ----------------------------------------------------- */

                formatRupiah(value) {

                    const number =
                        Number(value);

                    if (isNaN(number)) {
                        return value;
                    }


                    return 'Rp ' +
                        number.toLocaleString('id-ID');

                },


                /* =====================================================
                   PRODUCT MODAL
                   ===================================================== */

                openModal(product) {

                    this.selectedProduct = product;

                    this.activeImageIndex = 0;

                    this.startProductSlide();


                    const modalElement =
                        document.getElementById(
                            'productModal'
                        );


                    if (!modalElement) return;


                    const modal =
                        new bootstrap.Modal(
                            modalElement
                        );


                    modal.show();

                },


                nextImage() {

                    if (this.allImages.length <= 1) {
                        return;
                    }


                    this.activeImageIndex =
                        (
                            this.activeImageIndex + 1
                        ) %
                        this.allImages.length;

                },


                prevImage() {

                    if (this.allImages.length <= 1) {
                        return;
                    }


                    this.activeImageIndex =
                        (
                            this.activeImageIndex -
                            1 +
                            this.allImages.length
                        ) %
                        this.allImages.length;

                },


                startProductSlide() {

                    this.stopProductSlide();


                    if (this.allImages.length <= 1) {
                        return;
                    }


                    this.slideInterval =
                        setInterval(() => {

                            this.nextImage();

                        }, 5000);

                },


                stopProductSlide() {

                    if (this.slideInterval) {

                        clearInterval(
                            this.slideInterval
                        );

                        this.slideInterval = null;

                    }

                },


                /* =====================================================
                   FETCH PRODUCTS
                   ===================================================== */
                async fetchProducts() {
                    const url = "{{ route('product.index') }}";

                    // GANTI dengan ID kategori yang benar di database
                    const CATEGORY_IDS = {
                        koko: 1,
                        jubah: 10,
                        kaos: 5,
                    };

                    try {
                        const fetchCategory = async (categoryId) => {
                            const params = new URLSearchParams({
                                category_id: categoryId,
                                is_habis: 0,
                                limit: 6,
                            });

                            const response = await fetch(`${url}?${params}`);

                            if (!response.ok) {
                                throw new Error(`Gagal mengambil produk: ${response.status}`);
                            }

                            const data = await response.json();

                            // Mendukung API yang mengembalikan array langsung
                            // maupun array di dalam properti data.
                            const products = Array.isArray(data) ? data : data.data;

                            if (!Array.isArray(products)) {
                                throw new Error('Format respons API produk tidak sesuai.');
                            }

                            return products.filter(product =>
                                Number(product.is_habis) === 0
                            ).slice(0, 6);
                        };

                        const [koko, jubah, kaos] = await Promise.all([
                            fetchCategory(CATEGORY_IDS.koko),
                            fetchCategory(CATEGORY_IDS.jubah),
                            fetchCategory(CATEGORY_IDS.kaos),
                        ]);

                        this.kokoProducts = koko;
                        this.jubahProducts = jubah;
                        this.kaosProducts = kaos;

                    } catch (error) {
                        console.error('Gagal memuat produk homepage:', error);

                        this.kokoProducts = [];
                        this.jubahProducts = [];
                        this.kaosProducts = [];
                    }
                },


                /* =====================================================
                   WHATSAPP
                   ===================================================== */

                getWhatsappLink(productName) {

                    const phoneNumber =
                        '6285241800852';


                    const message =
                        `Bismillah kak, saya mau pesan ${productName}. Masih ready?`;


                    return `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;

                },


                getWhatsappLinkSeragam() {

                    const phoneNumber =
                        '6285241800852';


                    const message =
                        'Bismillah, saya ingin seragam untuk keluarga / komunitas. Bagaimana caranya?';


                    return `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;

                },


                /* =====================================================
                   FACEBOOK PIXEL
                   ===================================================== */

                trackWhatsAppClick(product) {

                    if (
                        typeof fbq === 'function'
                    ) {

                        fbq(
                            'track',
                            'InitiateCheckout', {
                                content_ids: [product.id],
                                content_name: product.name,
                                value: product.price,
                                currency: 'IDR'
                            }
                        );

                    }

                },


                trackShopeeClick(product) {

                    if (
                        typeof fbq === 'function'
                    ) {

                        fbq(
                            'trackCustom',
                            'ShopeeClick', {
                                content_ids: [product.id],
                                content_name: product.name,
                                value: product.price,
                                currency: 'IDR'
                            }
                        );

                    }

                },


                trackDetailClick(product) {

                    if (
                        typeof fbq === 'function'
                    ) {

                        fbq(
                            'trackCustom',
                            'DetailClick', {
                                content_ids: [product.id],
                                content_name: product.name,
                                value: product.price,
                                currency: 'IDR'
                            }
                        );

                    }

                },


                trackSeragamClick() {

                    if (
                        typeof fbq === 'function'
                    ) {

                        fbq(
                            'trackCustom',
                            'SeragamClick'
                        );

                    }

                },


                trackSeragamClickWA() {

                    if (
                        typeof fbq === 'function'
                    ) {

                        fbq(
                            'trackCustom',
                            'SeragamClickWA'
                        );

                    }

                },


                trackClickWaAdmin() {

                    if (
                        typeof fbq === 'function'
                    ) {

                        fbq(
                            'trackCustom',
                            'WaAdminClick'
                        );

                    }

                },


                trackClickIg() {

                    if (
                        typeof fbq === 'function'
                    ) {

                        fbq(
                            'trackCustom',
                            'IgClick'
                        );

                    }

                },


                trackClickTiktok() {

                    if (
                        typeof fbq === 'function'
                    ) {

                        fbq(
                            'trackCustom',
                            'TiktokClick'
                        );

                    }

                }

            },


            /* =========================================================
               BEFORE UNMOUNT
               ========================================================= */

            beforeUnmount() {

                this.stopProductSlide();

            }

        }).mount('#app');
    </script>
</body>

</html>