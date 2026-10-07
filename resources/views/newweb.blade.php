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
                    <img src="logo-abati-store-2.png" alt="Abati Store">
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

        <section class="showcase category-showcase">

            <div class="wrap">

                <a href="katalog.html?kategori=koko" class="category-banner category-banner-clean">

                    <!-- AREA FOTO -->
                    <div class="category-banner-visual">

                        <img src="toko.jpeg" alt="Koleksi Baju Koko">

                    </div>


                    <!-- AREA INFORMASI -->
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
                            Lihat Selengkapnya
                            <b>→</b>
                        </span>

                    </div>

                </a>


                <!-- =================================================
             PRODUK KOKO
             ================================================= -->

                <div class="showProducts">

                    <article class="product" data-product-card v-for="product in [...featuredProducts, ...otherProducts]
            
            .slice(0, 6)" :key="product.id" @click="openModal(product); trackDetailClick(product)"
                        style="cursor:pointer;">

                        <!-- FOTO -->
                        <div class="photo">

                            <img :src="getImageUrl(product.image)" :alt="product.name">

                            <!-- BADGE -->
                            <span v-if="!product.is_habis" class="discount-badge">
                                @{{ getDiscountPercent(product) }}% OFF
                            </span>

                            <!-- HABIS -->
                            <span v-else class="discount-badge" style="background:#222;">
                                HABIS
                            </span>

                            <!-- OVERLAY HABIS -->
                            <div v-if="product.is_habis" class="product-habis">
                                HABIS
                            </div>

                        </div>


                        <!-- NAMA -->
                        <strong>
                            @{{ product.name }}
                        </strong>


                        <!-- HARGA -->
                        <div class="price">

                            <del>
                                @{{ formatRupiah(product.price) }}
                            </del>

                            <b>
                                @{{ formatRupiah(getDiscountPrice(product)) }}
                            </b>

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
        KATEGORI PRODUK - BAJU KOKO
        ========================================================= -->
        <!-- PRODUK KOKO -->



        <!-- 8. BELANJA OFFLINE -->
        <!-- =========================================================
     8. BELANJA OFFLINE
     ========================================================= -->
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

                        <div class="offline-heading">
                            <div>
                                <small>KENALAN DENGAN TOKO KAMI</small>

                                <h3>Suasana Toko & Pelanggan Kami</h3>

                                <p>
                                    Kalau ingin datang langsung, berikut gambaran
                                    suasana belanja di Abati Store.
                                </p>
                            </div>

                            <a href="https://www.google.com/maps/search/?api=1&query=Abati+Store+Kendari"
                                target="_blank">
                                Buka Maps →
                            </a>
                        </div>


                        <div class="gallery-grid">

                            <!-- FOTO PELANGGAN 1 -->
                            <button class="gallery-item" type="button" onclick="openStoreImage(
                                'assets/pelanggan/pelanggan-1.jpg',
                                'Pelanggan Abati Store'
                            )">

                                <img src="assets/pelanggan/pelanggan-1.jpg" alt="Pelanggan Abati Store">

                            </button>


                            <!-- FOTO PELANGGAN 2 -->
                            <button class="gallery-item" type="button" onclick="openStoreImage(
                                'assets/pelanggan/pelanggan-2.jpg',
                                'Pelanggan Abati Store'
                            )">

                                <img src="assets/pelanggan/pelanggan-2.jpg" alt="Pelanggan Abati Store">

                            </button>


                            <!-- FOTO PELANGGAN 3 -->
                            <button class="gallery-item" type="button" onclick="openStoreImage(
                                'assets/pelanggan/pelanggan-3.jpg',
                                'Pelanggan Abati Store'
                            )">

                                <img src="assets/pelanggan/pelanggan-3.jpg" alt="Pelanggan Abati Store">

                            </button>


                            <!-- FOTO PELANGGAN 4 -->
                            <button class="gallery-item" type="button" onclick="openStoreImage(
                                'assets/pelanggan/pelanggan-4.jpg',
                                'Pelanggan Abati Store'
                            )">

                                <img src="assets/pelanggan/pelanggan-4.jpg" alt="Pelanggan Abati Store">

                            </button>

                        </div>

                    </div>

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
                <div
                    style="background:var(--cream);border-radius:14px;padding:25px;display:flex;align-items:center;justify-content:space-between;gap:20px">
                    <div>
                        <h2>Belanja di Abati Store</h2>
                        <p style="color:#777;font-size:12px">Cek koleksi dari rumah, lihat ukuran yang ready, lalu chat
                            kami
                            jika sudah menemukan yang cocok.</p>
                    </div><button class="wa">Chat WhatsApp</button>
                </div>
            </div>
        </section>

        <a class="floating-wa" href="https://wa.me/6281234567890" target="_blank" aria-label="Chat WhatsApp"><span>Ada
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

        const menuButton =
            document.querySelector('.menu');

        const mobileMenu =
            document.querySelector('.mobile-menu');

        const menuBackdrop =
            document.querySelector('.menu-backdrop');

        const closeMenuButton =
            document.querySelector('.close-menu');


        function openMobileMenu() {

            if (!mobileMenu || !menuBackdrop) return;

            mobileMenu.classList.add('open');
            menuBackdrop.classList.add('open');

            document.body.style.overflow = 'hidden';
        }


        function closeMobileMenu() {

            if (!mobileMenu || !menuBackdrop) return;

            mobileMenu.classList.remove('open');
            menuBackdrop.classList.remove('open');

            document.body.style.overflow = '';
        }


        menuButton?.addEventListener(
            'click',
            openMobileMenu
        );


        closeMenuButton?.addEventListener(
            'click',
            closeMobileMenu
        );


        menuBackdrop?.addEventListener(
            'click',
            closeMobileMenu
        );


        mobileMenu?.querySelectorAll('a').forEach(link => {

            link.addEventListener(
                'click',
                closeMobileMenu
            );

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

            };

        },


        /* ---------------------------------------------------------
           MOUNTED
           --------------------------------------------------------- */

        mounted() {

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

            kokoProducts() {

                return this.allProducts
                    .filter(product =>
                        product.category &&
                        product.category.name &&
                        product.category.name.toLowerCase() === 'koko'
                    )
                    .slice(0, 6);

            },


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

                try {

                    const url =
                        "{{ route('product.index') }}";


                    const [
                        featuredResponse,
                        otherResponse
                    ] = await Promise.all([

                        fetch(
                            `${url}?is_featured=1`
                        ),

                        fetch(
                            `${url}?is_featured=0`
                        )

                    ]);


                    if (
                        !featuredResponse.ok ||
                        !otherResponse.ok
                    ) {

                        throw new Error(
                            'Gagal mengambil data produk.'
                        );

                    }


                    const [
                        featured,
                        others
                    ] = await Promise.all([

                        featuredResponse.json(),
                        otherResponse.json()

                    ]);


                    this.featuredProducts =
                        Array.isArray(featured) ?
                        featured : [];


                    this.otherProducts =
                        Array.isArray(others) ?
                        others : [];


                    /* ---------------------------------------------
                       KATEGORI UNIK
                       --------------------------------------------- */

                    const uniqueCategories = {};


                    [
                        ...this.featuredProducts,
                        ...this.otherProducts
                    ].forEach(product => {

                        if (
                            product.category &&
                            product.category.id
                        ) {

                            uniqueCategories[
                                product.category.id
                            ] = product.category;

                        }

                    });


                    this.categories =
                        Object.values(
                            uniqueCategories
                        );


                } catch (error) {

                    console.error(
                        'Gagal mengambil produk:',
                        error
                    );

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