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

    <header>
        <div class="wrap head">
            <button class="menu" aria-label="Buka menu kategori" type="button">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M4 6H20M4 12H20M4 18H20" />
                </svg>
            </button>
            <a class="logo-img" href="/" aria-label="Abati Store">
                <img src="https://abatistore.com/logo-abati-store.png" alt="Abati Store">
            </a>
            <nav class="desktop-nav">
                <a href="#kategori">Kategori</a><a href="#rekomendasi">Rekomendasi</a><a href="#koleksi">Koleksi</a><a
                    href="#offline">Toko</a><a href="#seragam">Seragam</a><a href="#promo">Promo</a>
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
        <div class="mobile-menu">
            <div class="mobile-menu-head"><strong>Kategori</strong><button class="close-menu">×</button></div>
            <a href="#cat-koko">Baju Koko</a><a href="#cat-kurta">Kurta</a><a href="#cat-jubah">Jubah</a>
            <a href="#cat-sarung">Sarung</a><a href="#cat-peci">Peci</a><a href="#cat-sandal">Sandal</a><a
                href="#offline">Toko Abati Store</a>
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
                <p>Semua koleksi Abati Store bisa Anda lihat dari rumah. Pilih kebutuhan, cek ukuran yang ready, lalu
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
                <p>Koko, kurta, jubah dan pakaian pria pilihan untuk aktivitas Anda.</p><button>Lihat Koleksi</button>
            </div>
        </div>
        <button class="arrow prev">‹</button><button class="arrow next">›</button>
        <div class="dots"><button class="dot on"></button><button class="dot"></button><button class="dot"></button>
        </div>
    </div>

    <!-- 2. KATEGORI -->
    <section id="kategori">
        <div class="wrap">
            <div class="categories">
                <a class="cat" href="#cat-koko"><img
                        src="https://abatistore.com/storage/products/a2lf83GncdoNeJbhy3wd5B7RqLezg5FEk8eenEfS.webp"><b>Baju
                        Koko</b></a>
                <a class="cat" href="#cat-kurta"><img
                        src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp"><b>Kurta</b></a>
                <a class="cat" href="#cat-jubah"><img
                        src="https://abatistore.com/storage/products/5Qcc9Cf0ALYgv2pie5ttlqy0PcrGQD6wtkKUGjVK.webp"><b>Jubah</b></a>
                <a class="cat" href="#cat-sarung"><img
                        src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp"><b>Sarung</b></a>
                <a class="cat" href="#cat-peci"><img
                        src="https://abatistore.com/storage/products/a2lf83GncdoNeJbhy3wd5B7RqLezg5FEk8eenEfS.webp"><b>Peci</b></a>
                <a class="cat" href="#cat-sandal"><img
                        src="https://abatistore.com/storage/products/5Qcc9Cf0ALYgv2pie5ttlqy0PcrGQD6wtkKUGjVK.webp"><b>Sandal</b></a>
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
                </div><a class="see">Lihat Semua →</a>
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

    <!-- 5-7. KATEGORI PRODUK -->
    <section class="showcase">
        <div class="wrap">
            <div class="banner"><img
                    src="https://abatistore.com/storage/products/a2lf83GncdoNeJbhy3wd5B7RqLezg5FEk8eenEfS.webp">
                <div class="bannerText"><small>KOLEKSI BAJU KOKO</small>
                    <h2>Baju Koko</h2>
                    <p>Koko modern untuk ibadah, kantor, kajian, Jumat, kondangan dan berbagai kesempatan. Pilihan bahan
                        nyaman dengan desain yang tetap rapi dan berkelas.</p><a href="kategori.html">Lihat Selengkapnya
                        →</a>
                </div>
            </div>
            <div class="showProducts">
                <article class="product" data-product-card>
                    <div class="photo"><img
                            src="https://abatistore.com/storage/products/a2lf83GncdoNeJbhy3wd5B7RqLezg5FEk8eenEfS.webp"
                            alt="Koko Navy"></div>
                    <strong>Koko Navy</strong>

                    <div class="price"><del>Rp399.000</del><b>Rp329.000</b></div>


                </article>

                <article class="product" data-product-card>
                    <div class="photo"><img
                            src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp"
                            alt="Koko Cream"></div>
                    <strong>Koko Cream</strong>

                    <div class="price"><del>Rp399.000</del><b>Rp329.000</b></div>


                </article>

                <article class="product" data-product-card>
                    <div class="photo"><img
                            src="https://abatistore.com/storage/products/5Qcc9Cf0ALYgv2pie5ttlqy0PcrGQD6wtkKUGjVK.webp"
                            alt="Koko Putih"></div>
                    <strong>Koko Putih</strong>

                    <div class="price"><del>Rp399.000</del><b>Rp329.000</b></div>


                </article>

                <article class="product" data-product-card>
                    <div class="photo"><img
                            src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp"
                            alt="Koko Dark Grey"></div>
                    <strong>Koko Dark Grey</strong>

                    <div class="price"><del>Rp399.000</del><b>Rp329.000</b></div>


                </article>

                <article class="product" data-product-card>
                    <div class="photo"><img
                            src="https://abatistore.com/storage/products/a2lf83GncdoNeJbhy3wd5B7RqLezg5FEk8eenEfS.webp"
                            alt="Koko Black"></div>
                    <strong>Koko Black</strong>

                    <div class="price"><del>Rp399.000</del><b>Rp329.000</b></div>


                </article>

                <article class="product" data-product-card>
                    <div class="photo"><img
                            src="https://abatistore.com/storage/products/5Qcc9Cf0ALYgv2pie5ttlqy0PcrGQD6wtkKUGjVK.webp"
                            alt="Koko Grey"></div>
                    <strong>Koko Grey</strong>

                    <div class="price"><del>Rp399.000</del><b>Rp329.000</b></div>


                </article>
            </div>
            <div class="more"><a href="#">Lihat Semua Baju Koko →</a></div>
        </div>
    </section>

    <section class="showcase">
        <div class="wrap">
            <div class="banner"><img
                    src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp">
                <div class="bannerText"><small>KOLEKSI KURTA</small>
                    <h2>Kurta</h2>
                    <p>Kurta pilihan untuk Anda yang menginginkan pakaian sederhana, nyaman dan tetap terlihat berkelas
                        untuk aktivitas harian maupun ibadah.</p><a href="kategori.html">Lihat Selengkapnya →</a>
                </div>
            </div>
            <div class="showProducts">
                <article class="product" data-product-card>
                    <div class="photo"><img
                            src="https://abatistore.com/storage/products/a2lf83GncdoNeJbhy3wd5B7RqLezg5FEk8eenEfS.webp"
                            alt="Kurta Cream"></div>
                    <strong>Kurta Cream</strong>

                    <div class="price"><del>Rp399.000</del><b>Rp329.000</b></div>


                </article>

                <article class="product" data-product-card>
                    <div class="photo"><img
                            src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp"
                            alt="Kurta Navy"></div>
                    <strong>Kurta Navy</strong>

                    <div class="price"><del>Rp399.000</del><b>Rp329.000</b></div>


                </article>

                <article class="product" data-product-card>
                    <div class="photo"><img
                            src="https://abatistore.com/storage/products/5Qcc9Cf0ALYgv2pie5ttlqy0PcrGQD6wtkKUGjVK.webp"
                            alt="Kurta White"></div>
                    <strong>Kurta White</strong>

                    <div class="price"><del>Rp399.000</del><b>Rp329.000</b></div>


                </article>

                <article class="product" data-product-card>
                    <div class="photo"><img
                            src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp"
                            alt="Kurta Grey"></div>
                    <strong>Kurta Grey</strong>

                    <div class="price"><del>Rp399.000</del><b>Rp329.000</b></div>


                </article>

                <article class="product" data-product-card>
                    <div class="photo"><img
                            src="https://abatistore.com/storage/products/a2lf83GncdoNeJbhy3wd5B7RqLezg5FEk8eenEfS.webp"
                            alt="Kurta Black"></div>
                    <strong>Kurta Black</strong>

                    <div class="price"><del>Rp399.000</del><b>Rp329.000</b></div>


                </article>

                <article class="product" data-product-card>
                    <div class="photo"><img
                            src="https://abatistore.com/storage/products/5Qcc9Cf0ALYgv2pie5ttlqy0PcrGQD6wtkKUGjVK.webp"
                            alt="Kurta Olive"></div>
                    <strong>Kurta Olive</strong>

                    <div class="price"><del>Rp399.000</del><b>Rp329.000</b></div>


                </article>
            </div>
            <div class="more"><a href="#">Lihat Semua Kurta →</a></div>
        </div>
    </section>

    <section class="showcase">
        <div class="wrap">
            <div class="banner"><img
                    src="https://abatistore.com/storage/products/5Qcc9Cf0ALYgv2pie5ttlqy0PcrGQD6wtkKUGjVK.webp">
                <div class="bannerText"><small>KOLEKSI JUBAH</small>
                    <h2>Jubah</h2>
                    <p>Jubah yang nyaman untuk ibadah, kajian dan berbagai kegiatan. Pilih model yang sesuai dengan gaya
                        dan kebutuhan Anda.</p><a href="kategori.html">Lihat Selengkapnya →</a>
                </div>
            </div>
            <div class="showProducts">
                <article class="product" data-product-card>
                    <div class="photo"><img
                            src="https://abatistore.com/storage/products/a2lf83GncdoNeJbhy3wd5B7RqLezg5FEk8eenEfS.webp"
                            alt="Jubah Premium Grey"></div>
                    <strong>Jubah Premium Grey</strong>

                    <div class="price"><del>Rp399.000</del><b>Rp329.000</b></div>


                </article>

                <article class="product" data-product-card>
                    <div class="photo"><img
                            src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp"
                            alt="Jubah Premium Navy"></div>
                    <strong>Jubah Premium Navy</strong>

                    <div class="price"><del>Rp399.000</del><b>Rp329.000</b></div>


                </article>

                <article class="product" data-product-card>
                    <div class="photo"><img
                            src="https://abatistore.com/storage/products/5Qcc9Cf0ALYgv2pie5ttlqy0PcrGQD6wtkKUGjVK.webp"
                            alt="Jubah Premium Cream"></div>
                    <strong>Jubah Premium Cream</strong>

                    <div class="price"><del>Rp399.000</del><b>Rp329.000</b></div>


                </article>

                <article class="product" data-product-card>
                    <div class="photo"><img
                            src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp"
                            alt="Jubah Black"></div>
                    <strong>Jubah Black</strong>

                    <div class="price"><del>Rp399.000</del><b>Rp329.000</b></div>


                </article>

                <article class="product" data-product-card>
                    <div class="photo"><img
                            src="https://abatistore.com/storage/products/a2lf83GncdoNeJbhy3wd5B7RqLezg5FEk8eenEfS.webp"
                            alt="Jubah White"></div>
                    <strong>Jubah White</strong>

                    <div class="price"><del>Rp399.000</del><b>Rp329.000</b></div>


                </article>

                <article class="product" data-product-card>
                    <div class="photo"><img
                            src="https://abatistore.com/storage/products/5Qcc9Cf0ALYgv2pie5ttlqy0PcrGQD6wtkKUGjVK.webp"
                            alt="Jubah Daily"></div>
                    <strong>Jubah Daily</strong>

                    <div class="price"><del>Rp399.000</del><b>Rp329.000</b></div>


                </article>
            </div>
            <div class="more"><a href="#">Lihat Semua Jubah →</a></div>
        </div>
    </section>


    <!-- 8. BELANJA OFFLINE -->
    <section id="offline" class="offline-store">
        <div class="wrap">
            <div class="offline-box">
                <div class="offline-main">
                    <!-- Ganti dengan foto toko asli -->
                    <img src="assets/toko-depan.jpg" alt="Toko Abati Store">
                    <div class="offline-overlay">
                        <small>MAU BELANJA OFFLINE?</small>
                        <h2>Kunjungi Toko Abati Store</h2>
                        <p>Lihat langsung koleksi kami, rasakan bahannya, dan coba ukuran yang tersedia.</p>
                        <div class="offline-actions">
                            <a class="offline-primary"
                                href="https://www.google.com/maps/search/?api=1&query=Abati+Store+Kendari"
                                target="_blank">📍 Lihat Lokasi</a>
                            <button class="offline-secondary" type="button" onclick="openStoreVideo()">▶ Petunjuk ke
                                Toko</button>
                        </div>
                    </div>
                </div>

                <div class="store-gallery">
                    <div class="offline-heading">
                        <div>
                            <h3>Kenalan dengan toko kami</h3>
                            <p>Kalau ingin datang langsung, berikut gambaran toko Abati Store.</p>
                        </div>
                        <a href="https://www.google.com/maps/search/?api=1&query=Abati+Store+Kendari"
                            target="_blank">Buka Maps →</a>
                    </div>

                    <div class="gallery-grid">
                        <!-- Ganti 3 file berikut dengan foto asli toko -->
                        <button class="gallery-item" type="button"
                            onclick="openStoreImage('assets/toko-depan.jpg','Bagian depan Abati Store')">
                            <img src="assets/toko-depan.jpg" alt="Bagian depan Abati Store">
                            <span>Depan Toko</span>
                        </button>
                        <button class="gallery-item" type="button"
                            onclick="openStoreImage('assets/toko-interior.jpg','Interior Abati Store')">
                            <img src="assets/toko-interior.jpg" alt="Interior Abati Store">
                            <span>Interior Toko</span>
                        </button>
                        <button class="gallery-item" type="button"
                            onclick="openStoreImage('assets/toko-koleksi.jpg','Koleksi Abati Store')">
                            <img src="assets/toko-koleksi.jpg" alt="Koleksi Abati Store">
                            <span>Koleksi Kami</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Gallery -->
    <div class="store-modal" id="storeImageModal" onclick="closeStoreImage(event)">
        <button class="modal-close" type="button" onclick="closeStoreImage()">×</button>
        <div class="modal-content image-modal-content" onclick="event.stopPropagation()">
            <img id="storeModalImage" src="" alt="">
            <p id="storeModalCaption"></p>
        </div>
    </div>

    <!-- Modal Video -->
    <div class="store-modal" id="storeVideoModal" onclick="closeStoreVideo(event)">
        <button class="modal-close" type="button" onclick="closeStoreVideo()">×</button>
        <div class="modal-content video-modal-content" onclick="event.stopPropagation()">
            <!-- Ganti file video ini dengan video petunjuk asli -->
            <video id="storeGuideVideo" controls playsinline preload="metadata">
                <source src="assets/petunjuk-ke-toko.mp4" type="video/mp4">
                Browser Anda tidak mendukung video.
            </video>
            <p>Petunjuk menuju Toko Abati Store</p>
        </div>
    </div>

    <!-- 9. SERAGAM -->

    <section id="seragam" class="uniform">
        <div class="wrap">
            <div class="uniformBox">
                <div class="uniformImg"><img
                        src="https://abatistore.com/storage/products/a2lf83GncdoNeJbhy3wd5B7RqLezg5FEk8eenEfS.webp">
                </div>
                <div class="uniformText"><small>PESANTREN • SEKOLAH • KOMUNITAS • INSTANSI</small>
                    <h2>Pesan Seragam di Abati Store</h2>
                    <p>Butuh pakaian seragam untuk santri, guru, komunitas atau kebutuhan kantor? Sampaikan kebutuhan
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
            <div
                style="background:var(--cream);border-radius:14px;padding:25px;display:flex;align-items:center;justify-content:space-between;gap:20px">
                <div>
                    <h2>Belanja di Abati Store</h2>
                    <p style="color:#777;font-size:12px">Cek koleksi dari rumah, lihat ukuran yang ready, lalu chat kami
                        jika sudah menemukan yang cocok.</p>
                </div><button class="wa">Chat WhatsApp</button>
            </div>
        </div>
    </section>

    <a class="floating-wa" href="https://wa.me/6281234567890" target="_blank" aria-label="Chat WhatsApp"><span>Ada yang
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
    </footer>

    <script>
    const slides = [...document.querySelectorAll('.slide')],
        dots = [...document.querySelectorAll('.dot')];
    let i = 0,
        t;

    function show(n) {
        i = (n + slides.length) % slides.length;
        slides.forEach((s, k) => s.classList.toggle('on', k === i));
        dots.forEach((d, k) => d.classList.toggle('on', k === i))
    }

    function restart() {
        clearInterval(t);
        t = setInterval(() => show(i + 1), 5000)
    }
    document.querySelector('.next').onclick = () => {
        show(i + 1);
        restart()
    };
    document.querySelector('.prev').onclick = () => {
        show(i - 1);
        restart()
    };
    dots.forEach((d, k) => d.onclick = () => {
        show(k);
        restart()
    });
    restart();
    </script>

    <script>
    const menuBtn = document.querySelector('.menu'),
        mobileMenu = document.querySelector('.mobile-menu'),
        backdrop = document.querySelector('.menu-backdrop'),
        closeMenu = document.querySelector('.close-menu');

    function openMenu() {
        mobileMenu.classList.add('open');
        backdrop.classList.add('open');
        document.body.style.overflow = 'hidden'
    }

    function closeMobileMenu() {
        mobileMenu.classList.remove('open');
        backdrop.classList.remove('open');
        document.body.style.overflow = ''
    }
    menuBtn.addEventListener('click', openMenu);
    closeMenu.addEventListener('click', closeMobileMenu);
    backdrop.addEventListener('click', closeMobileMenu);
    document.querySelectorAll('.mobile-menu a').forEach(a => a.addEventListener('click', closeMobileMenu));

    document.querySelectorAll('[data-product-card]').forEach(card => {
        const name = card.querySelector('strong')?.textContent.trim() || 'produk';
        const slug = name.toLowerCase().replace(/[^a-z0-9\s-]/g, '').trim().replace(/\s+/g, '-');
        card.addEventListener('click', () => location.href = 'detail.html?produk=' + encodeURIComponent(slug));
    });
    </script>


    <script>
    function openStoreImage(src, caption) {
        document.getElementById('storeModalImage').src = src;
        document.getElementById('storeModalImage').alt = caption;
        document.getElementById('storeModalCaption').textContent = caption;
        document.getElementById('storeImageModal').classList.add('open');
        document.body.style.overflow = 'hidden';
    }

    function closeStoreImage(e) {
        if (e && e.target && !e.target.classList.contains('store-modal') && e.target.id !== 'storeImageModal') return;
        document.getElementById('storeImageModal').classList.remove('open');
        document.getElementById('storeModalImage').src = '';
        document.body.style.overflow = '';
    }

    function openStoreVideo() {
        const modal = document.getElementById('storeVideoModal');
        const video = document.getElementById('storeGuideVideo');
        modal.classList.add('open');
        document.body.style.overflow = 'hidden';
        video.currentTime = 0;
        video.play().catch(() => {});
    }

    function closeStoreVideo(e) {
        if (e && e.target && !e.target.classList.contains('store-modal') && e.target.id !== 'storeVideoModal') return;
        const modal = document.getElementById('storeVideoModal');
        const video = document.getElementById('storeGuideVideo');
        video.pause();
        modal.classList.remove('open');
        document.body.style.overflow = '';
    }
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') {
            closeStoreImage();
            closeStoreVideo();
        }
    });
    </script>


    <script>
    const mobileSearchToggle = document.querySelector('.mobile-search-toggle');
    const mobileSearchPanel = document.querySelector('.mobile-search-panel');
    const mobileSearchInput = document.querySelector('#mobileSearchInput');

    function toggleMobileSearch(force) {
        const open = typeof force === 'boolean' ? force : !mobileSearchPanel.classList.contains('open');
        mobileSearchPanel.classList.toggle('open', open);
        mobileSearchPanel.setAttribute('aria-hidden', String(!open));
        mobileSearchToggle.setAttribute('aria-expanded', String(open));
        if (open) setTimeout(() => mobileSearchInput.focus(), 80);
    }
    mobileSearchToggle.addEventListener('click', () => toggleMobileSearch());
    document.addEventListener('click', e => {
        if (mobileSearchPanel.classList.contains('open') && !mobileSearchPanel.contains(e.target) && !
            mobileSearchToggle.contains(e.target)) toggleMobileSearch(false);
    });
    </script>
</body>

</html>