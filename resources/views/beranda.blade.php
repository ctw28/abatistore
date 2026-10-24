@extends('layouts')

@section('title', 'Beranda — Abati Store')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/newweb/04-slider.css') }}">
<link rel="stylesheet" href="{{ asset('css/newweb/05-sections.css') }}">
<link rel="stylesheet" href="{{ asset('css/newweb/06-offline.css') }}">
@endpush

@section('content')
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
    <div class="slide"><img src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp">
        <div class="slideText"><small>PROMO TERBARU</small>
            <h1>Temukan pakaian yang pas.</h1>
            <p>Lihat koleksi pilihan dan promo terbaru Abati Store.</p><button>Lihat Promo</button>
        </div>
    </div>
    <div class="slide"><img src="https://abatistore.com/storage/products/5Qcc9Cf0ALYgv2pie5ttlqy0PcrGQD6wtkKUGjVK.webp">
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

            <a class="cat cat-icon" href="{{ route('katalog', ['kategori' => 'Koko']) }}">
                <span><img src="assets/icons/koko.svg" alt=""></span>
                <b>Baju Koko</b>
            </a>

            <a class="cat cat-icon" href="{{ route('katalog', ['kategori' => 'Celana']) }}">
                <span><img src="assets/icons/celana.svg" alt=""></span>
                <b>Celana</b>
            </a>
            <a class="cat cat-icon" href="{{ route('katalog', ['kategori' => 'Jacket']) }}">
                <span><img src="assets/icons/jaket.svg" alt=""></span>
                <b>Jaket</b>
            </a>

            <a class="cat cat-icon" href="{{ route('katalog', ['kategori' => 'Oversize']) }}">
                <span><img src="assets/icons/oversize.svg" alt=""></span>
                <b>Oversize</b>
            </a>

            <a class="cat cat-icon" href="{{ route('katalog', ['kategori' => 'Kaos']) }}">
                <span><img src="assets/icons/kaos.svg" alt=""></span>
                <b>Kaos</b>
                <a class="cat cat-icon" href="{{ route('katalog', ['kategori' => 'Jubah']) }}">
                    <span><img src="assets/icons/jubah.svg" alt=""></span>
                    <b>Jubah</b>
                </a>


            </a>

            <a class="cat cat-icon" href="{{ route('katalog', ['kategori' => 'Kemeja']) }}">
                <span><img src="assets/icons/kemeja.svg" alt=""></span>
                <b>Kemeja</b>
            </a>


            <a class="cat cat-icon all-category" href="{{ route('katalog') }}">
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
                <a href="{{ route('katalog', ['ukuran' => 'S']) }}">S</a>
                <a href="{{ route('katalog', ['ukuran' => 'M']) }}">M</a>
                <a href="{{ route('katalog', ['ukuran' => 'L']) }}">L</a>
                <a href="{{ route('katalog', ['ukuran' => 'XL']) }}">XL</a>
                <a href="{{ route('katalog', ['ukuran' => 'XXL']) }}">XXL</a>
                <a href="{{ route('katalog', ['ukuran' => 'XXXL']) }}">XXXL</a>
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
        </div>

        <div class="recs">

            <!-- UNTUK KANTOR -->
            <article class="rec">
                <img src="{{asset('assets/kantor.jpeg')}}" alt="Koleksi pakaian untuk kantor">

                <div class="recText">
                    <b>Kantor</b>
                    <span>Tampil profesional setiap hari</span>

                    <a href="{{ route('katalog', ['rekomendasi' => 18]) }}" class="recButton">
                        Lihat Rekomendasi
                    </a>
                </div>
            </article>

            <!-- FORMAL -->
            <article class="rec">
                <img src="{{asset('assets/formal.jpeg')}}" alt="Koleksi outfit harian">

                <div class="recText">
                    <b>Formal</b>
                    <span>Tampil fresh di acara formal</span>

                    <a href="{{ route('katalog', ['rekomendasi' => 21]) }}" class="recButton">
                        Lihat Rekomendasi
                    </a>
                </div>
            </article>

            <!-- OUTFIT HARIAN -->
            <article class="rec">
                <img src="{{asset('assets/harian.jpeg')}}" alt="Koleksi outfit harian">

                <div class="recText">
                    <b>Outfit Harian</b>
                    <span>Tampil terbaik setiap hari</span>

                    <a href="{{ route('katalog', ['rekomendasi' => 20]) }}" class="recButton">
                        Lihat Produk
                    </a>
                </div>
            </article>

            <!-- UNTUK JUMATAN -->
            <article class="rec">
                <img src="{{asset('assets/jumatan.jpeg')}}" alt="Koleksi pakaian untuk jumatan">

                <div class="recText">
                    <b>Jumatan</b>
                    <span>Tampilkan yang terbaik</span>

                    <a href="{{ route('katalog', ['rekomendasi' => 22]) }}" class="recButton">
                        Lihat Produk
                    </a>
                </div>
            </article>

            <!-- WALIMAH DAN KONDANGAN -->
            <article class="rec">
                <img src="{{asset('assets/kondangan.jpeg')}}" alt="Koleksi pakaian untuk walimah dan kondangan">

                <div class="recText">
                    <b>Acara Keluarga</b>
                    <span>Tampil percaya diri di acara keluarga</span>

                    <a href="{{ route('katalog', ['rekomendasi' => 19]) }}" class="recButton">
                        Lihat Produk
                    </a>
                </div>
            </article>

        </div>
    </div>
</section>

<section id="koleksi" class="latest">
    <div class="wrap">
        <div class="sectionHead">
            <div>
                <h2>New Arrival</h2>
                <p>Produk baru di ABATI STORE.</p>
            </div>

            <!-- <a href="{{ route('katalog') }}" class="see">
                Lihat Semua →
            </a> -->
        </div>

        <div class="products">
            <p v-if="productsLoading" class="collection-loading">
                Memuat koleksi...
            </p>



            <article v-for="product in bestSellerProducts" :key="'best-' + product.id" class="product" data-product-card
                style="cursor: pointer;" @click="goToProductDetail(product.id)">
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



            <p v-if="!productsLoading && bestSellerProducts.length === 0" class="collection-empty">
                Belum ada produk Best Seller.
            </p>
        </div>
    </div>
</section>

<!-- =========================================================
     KATEGORI BAJU KOKO
     ========================================================= -->
<section id="cat-koko" class="showcase category-showcase">
    <div class="wrap">

        <a href="{{route('katalog',['kategori'=>'koko'])}}" class="category-banner category-banner-clean">

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
                style="cursor: pointer;" @click="goToProductDetail(product.id)">
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
            <a href="{{route('katalog',['kategori'=>'koko'])}}" class="more-button">
                Lihat Semua Baju Koko →
            </a>
        </div>

    </div>
</section>



<section class="essential-section">
    <div class="essential-wrap">

        <!-- Header -->
        <div class="essential-header">
            <div class="essential-heading">
                <span class="essential-eyebrow">KOLEKSI ESENSIAL</span>
                <h2>Pilihan Terbaik untuk<br class="desktop-only"> Setiap Aktivitas</h2>
                <p>
                    Tampil kasual, tetap rapi dan percaya diri.
                    Temukan pilihan pakaian untuk melengkapi gaya harian Anda.
                </p>
            </div>
        </div>

        <!-- Kartu kategori -->
        <div class="essential-grid">

            <!-- Kaos -->
            <a href="{{ route('katalog', ['kategori' => 'Kaos']) }}" class="essential-card">
                <img src="https://abatistore.com/storage/products/S0N4UKre09fzdMMWXTZHp5JLZPo10Jnrz28xkQXB.webp"
                    alt="Koleksi Kaos Abati Store" loading="lazy">

                <div class="essential-overlay">
                    <div class="essential-card-label">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="m16 4 5 3-3 5-3-2v10H9V10l-3 2-3-5 5-3a5 5 0 0 0 8 0Z" />
                        </svg>
                        <span>Kaos</span>
                    </div>
                    <span class="essential-arrow" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </span>
                </div>
            </a>

            <!-- Jaket -->
            <a href="{{ route('katalog', ['kategori' => 'Jacket']) }}" class="essential-card">
                <img src="https://abatistore.com/storage/products/TvOpprsGKXK27OfozNosbpcldlTRC563PSqnzqTO.webp"
                    alt="Koleksi Jaket Abati Store" loading="lazy">

                <div class="essential-overlay">
                    <div class="essential-card-label">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="m16 4 5 3-3 5-3-2v10H9V10l-3 2-3-5 5-3a5 5 0 0 0 8 0Z" />
                            <path d="M12 5v15M10 9h4" />
                        </svg>
                        <span>Jaket</span>
                    </div>
                    <span class="essential-arrow" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </span>
                </div>
            </a>

            <!-- Oversize -->
            <a href="{{ route('katalog', ['kategori' => 'Oversize']) }}" class="essential-card">
                <img src="https://abatistore.com/storage/products/x2HcWyDYMwm6g4KkwG0Z6SOBLtRgzkW3yhhjKbsc.webp"
                    alt="Koleksi Oversize Abati Store" loading="lazy">

                <div class="essential-overlay">
                    <div class="essential-card-label">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="m16 4 5 3-3 5-3-2v10H9V10l-3 2-3-5 5-3a5 5 0 0 0 8 0Z" />
                        </svg>
                        <span>Oversize</span>
                    </div>
                    <span class="essential-arrow" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </span>
                </div>
            </a>

            <!-- Kemeja -->
            <a href="{{ route('katalog', ['kategori' => 'Kemeja']) }}" class="essential-card">
                <img src="https://abatistore.com/storage/products/Q51npArOY3u9el0OVleQzPZLxD3wMUsHBvA84HHx.webp"
                    alt="Koleksi Kemeja Abati Store" loading="lazy">

                <div class="essential-overlay">
                    <div class="essential-card-label">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="m8 4 4 3 4-3 5 3-3 5-3-2v10H9V10l-3 2-3-5 5-3Z" />
                            <path d="m9 4 3 3 3-3M12 8v12" />
                        </svg>
                        <span>Kemeja</span>
                    </div>
                    <span class="essential-arrow" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </span>
                </div>
            </a>

        </div>

        <!-- CTA -->
        <div class="essential-footer">
            <a href="{{ route('katalog')}}" class="essential-button">
                Lihat Semua Koleksi
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                    stroke-linejoin="round" aria-hidden="true">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
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
                            href="https://www.tiktok.com/@fadkhera.kendari/video/7608130662645681416" target="_blank"
                            rel="noopener">
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
                </ul><a :href=" getWhatsappLinkSeragam()" class="uniform">Konsultasi via WhatsApp</a>
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
                <a class="promo-wa"
                    href="https://wa.me/6281234567890?text={{ urlencode('Assalamu’alaikum, saya konsultasi kebutuhan pakaian saya di abati store, apa ada rekomendasi?.') }}"
                    target="_blank" rel="noopener">
                    Chat WhatsApp Sekarang
                </a>

                <a class="promo-catalog" href="{{route('katalog')}}" target="_blank" rel="noopener">
                    Lihat Koleksi Sekarang
                </a>
            </div>
        </div>
    </div>
</section>


<a class="floating-wa"
    href="https://wa.me/6281234567890?text={{ urlencode('Assalamu’alaikum, saya konsultasi kebutuhan pakaian saya di abati store, apa ada rekomendasi?.') }}"
    target="_blank" aria-label="Chat WhatsApp"><span>Ada yang
        ingin ditanyakan?</span>✆</a>
@endsection

@push('scripts')
<script>
    // Inisialisasi Slider Khusus Beranda
    function initSliderUI() {
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

    }

    const {
        createApp
    } = Vue;

    createApp({
        data() {
            return {
                kokoProducts: [],
                jubahProducts: [],
                kaosProducts: [],
                bestSellerProducts: [],
                productsLoading: false
            };
        },
        mounted() {
            this.fetchProducts();
            this.$nextTick(() => {
                // initNavUI(); // <-- Hapus baris ini karena sudah otomatis aktif dari layout utama
                initSliderUI(); // Biarkan slider tetap berjalan
            });
        },
        methods: {


            /* -----------------------------------------------------
               DISKON
               ----------------------------------------------------- */

            goToProductDetail(id) {
                const template = @json(route('produk.detail', ['id' => '__ID__']));
                window.location.href = template.replace('__ID__', id);
            },

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


            productDetailUrl(id) {
                const template = @json(route('produk.detail', ['id' => '__ID__']));
                return template.replace('__ID__', id);
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

                // Ambil produk sesuai filter dari Laravel
                const fetchProducts = async (params) => {
                    const query = new URLSearchParams(params);

                    const response = await fetch(`${url}?${query}`, {
                        headers: {
                            Accept: 'application/json'
                        }
                    });

                    if (!response.ok) {
                        throw new Error(`HTTP ${response.status}`);
                    }

                    const products = await response.json();

                    return Array.isArray(products) ? products : [];
                };

                this.productsLoading = true;

                try {
                    // Empat request dengan filter masing-masing
                    const results = await Promise.allSettled([
                        // Koko: stok tersedia, kategori 1, maksimal 6
                        fetchProducts({
                            status: 'ada',
                            category_id: 1,
                            limit: 6
                        }),

                        // Jubah: stok tersedia, kategori 10, maksimal 6
                        fetchProducts({
                            status: 'ada',
                            category_id: 10,
                            limit: 6
                        }),

                        // Kaos: stok tersedia, kategori 5, maksimal 6
                        fetchProducts({
                            status: 'ada',
                            category_id: 5,
                            limit: 6
                        }),

                        // Best Seller: stok tersedia, collection ID 38, maksimal 4
                        fetchProducts({
                            status: 'ada',
                            collection: 17,
                            limit: 4
                        })
                    ]);

                    const [koko, jubah, kaos, bestSeller] = results;

                    this.kokoProducts =
                        koko.status === 'fulfilled' ? koko.value : [];

                    this.jubahProducts =
                        jubah.status === 'fulfilled' ? jubah.value : [];

                    this.kaosProducts =
                        kaos.status === 'fulfilled' ? kaos.value : [];

                    this.bestSellerProducts =
                        bestSeller.status === 'fulfilled' ? bestSeller.value : [];

                    // Catat error per request
                    results.forEach((result, index) => {
                        if (result.status === 'rejected') {
                            console.error(
                                `Request produk ke-${index + 1} gagal:`,
                                result.reason
                            );
                        }
                    });

                    console.log('Koko:', this.kokoProducts);
                    console.log('Jubah:', this.jubahProducts);
                    console.log('Kaos:', this.kaosProducts);
                    console.log('Best Seller:', this.bestSellerProducts);

                } finally {
                    this.productsLoading = false;
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

@endpush