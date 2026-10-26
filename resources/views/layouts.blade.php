<!doctype html>
<html lang="id">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Abati Store')</title>
    <meta name="description"
        content="@yield('meta_description', 'Temukan pakaian pria berkualitas di Abati Store Kendari.')">

    <!-- Open Graph: Pratinjau link WhatsApp dan media sosial -->
    @stack('meta')

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('logo/1/favicon.ico') }}" sizes="any">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('logo/favicon-32x32.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('logo/apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('logo/site.webmanifest') }}">

    <!-- CSS Global -->
    <link rel="stylesheet" href="{{ asset('css/newweb/01-base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newweb/02-header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newweb/03-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newweb/07-footer.css') }}">

    <!-- CSS Tambahan Per Halaman -->
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('css/newweb/08-responsive.css') }}">
</head>


<body>
    <div id="app">
        <!-- ================= HEADER & MOBILE MENU (SAMA DI SEMUA HALAMAN) ================= -->
        <header>
            <div class="wrap head">
                <button class="menu" aria-label="Buka menu kategori" type="button">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M4 6H20M4 12H20M4 18H20" />
                    </svg>
                </button>
                <a class="logo-img" href="{{route('beranda')}}" aria-label="Abati Store">
                    <img src="{{ asset('logo-abati-store.png') }}" alt="Abati Store">
                </a>
                <nav class="desktop-nav">
                    <a href="{{ route('beranda') }}">Beranda</a>
                    <a href="{{ route('katalog') }}">Katalog</a>
                    <button type="button" data-open-modal="sizeModal">
                        Panduan Ukuran
                    </button>
                    <button type="button" data-open-modal="shippingModal">
                        Cek Ongkir Lokal
                    </button>
                    <a href="https://wa.me/6285241800852?text={{ urlencode('Assalamu’alaikum kak, saya ingin bertanya tentang pemesanan seragam. Bagaimana caranya?') }}"
                        target="_blank" rel="noopener">
                        Pesan Seragam
                    </a>
                </nav>
                <div class="search desktop-search">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <circle cx="11" cy="11" r="6.5"></circle>
                        <path d="M16 16L20 20"></path>
                    </svg>
                    <input placeholder="Cari baju koko, kurta..." aria-label="Cari produk">
                </div>
                <button class="mobile-search-toggle" type="button" aria-label="Buka pencarian" aria-expanded="false">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <circle cx="11" cy="11" r="6.5"></circle>
                        <path d="M16 16L20 20"></path>
                    </svg>
                </button>
            </div>

            <!-- DRAWER MENU MOBILE -->
            <div class="mobile-menu" id="mobileMenu">
                <div class="mobile-menu-head">
                    <a href="{{route('beranda')}}" class="mobile-menu-logo" aria-label="Abati Store">
                        <img src="{{ asset('logo-abati-store.png') }}" alt="Abati Store">
                    </a>
                    <button class="close-menu" type="button" aria-label="Tutup menu">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M6 6L18 18M18 6L6 18" />
                        </svg>
                    </button>
                </div>

                <!-- Kategori Mobile -->
                <div class="mobile-menu-section">
                    <!-- Toko & Kontak -->
                    <div class="mobile-menu-links">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=-3.9986246,122.5113538"
                            class="mobile-menu-link">
                            <span class="menu-link-icon">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M3 10L12 3L21 10V21H3Z" />
                                    <path d="M9 21V14H15V21" />
                                </svg>
                            </span>
                            <span class="menu-link-content">
                                <strong>Toko dan Pelanggan</strong>
                                <small>Alamat, lokasi toko, Foto toko dan Pelanggan</small>
                            </span>
                            <span class="menu-arrow">›</span>
                        </a>


                        <!-- Menu Panduan Ukuran -->
                        <button type="button" class="mobile-menu-link" data-open-modal="sizeModal">
                            <span class="menu-link-icon">

                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <!-- Bentuk baju -->
                                    <path d="M8 4L4 6.5 2.8 11l3.4 1.2L8 9.5V20h8V9.5l1.8 2.7 3.4-1.2L20 6.5 16 4" />
                                    <path d="M8 4c.8 1.4 2.1 2.1 4 2.1S15.2 5.4 16 4" />

                                    <!-- Garis ukur horizontal dan panah dua arah -->
                                    <path d="M8.5 14.2h7" />
                                    <path d="m10 12.9-1.5 1.3 1.5 1.3" />
                                    <path d="m14 12.9 1.5 1.3-1.5 1.3" />

                                    <!-- Garis ukur vertikal -->
                                    <path d="M18.8 13.5v5" />
                                    <path d="m17.7 14.6 1.1-1.1 1.1 1.1" />
                                    <path d="m17.7 17.4 1.1 1.1 1.1-1.1" />
                                </svg>

                            </span>
                            <span class="menu-link-content">
                                <strong>Panduan Ukuran</strong>
                                <small>Bantu pilih ukuran yang pas</small>
                            </span>
                            <span class="menu-arrow">›</span>
                        </button>

                        <!-- Menu Ongkir -->
                        <button type="button" class="mobile-menu-link" data-open-modal="shippingModal">
                            <span class="menu-link-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <path d="M3 6h11v12H3z" />
                                    <path d="M14 10h4l3 3v5h-7z" />
                                    <circle cx="7.5" cy="18" r="1.8" />
                                    <circle cx="17.5" cy="18" r="1.8" />
                                </svg>
                            </span>
                            <span class="menu-link-content">
                                <strong>Ongkir & Pengiriman</strong>
                                <small>Informasi biaya dan pengiriman</small>
                            </span>
                            <span class="mobile-menu-arrow">›</span>
                        </button>

                        <!-- Menu Pesan Seragam -->
                        <a class="mobile-menu-link"
                            href="https://wa.me/6285241800852?text={{ urlencode('Assalamu’alaikum kak, saya ingin bertanya tentang pemesanan seragam. Bagaimana Caranya?') }}"
                            target="_blank" rel="noopener">
                            <span class="menu-link-icon">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M20 11.5A8.5 8.5 0 0 1 7.4 19L3 20.5L4.5 16.3A8.5 8.5 0 1 1 20 11.5Z" />
                                    <path
                                        d="M8 8.5C8.5 11 10 12.5 12.5 14L14 12.8L16 14L15.5 16C11 16.5 7 12.5 7.5 8Z" />
                                </svg>
                            </span>
                            <span class="menu-link-content">
                                <strong>Pesan Seragam</strong>
                                <small>Konsultasi seragam via WhatsApp</small>
                            </span>
                            <span class="mobile-menu-arrow">›</span>
                        </a>

                    </div>

                    <!-- Medsos -->
                    <div class="mobile-menu-social">
                        <p>Ikuti media sosial Abati Store</p>
                        <div class="mobile-menu-social-icons">
                            <a href="https://www.instagram.com/fadkhera.kendari/" target="_blank" rel="noopener"
                                aria-label="Instagram">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <rect x="3" y="3" width="18" height="18" rx="5" />
                                    <circle cx="12" cy="12" r="4" />
                                    <circle cx="17.5" cy="6.5" r=".8" fill="currentColor" stroke="none" />
                                </svg>
                            </a>
                            <a href="https://www.tiktok.com/@fadkhera.kendari" target="_blank" rel="noopener"
                                aria-label="TikTok">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M14 3V15.5A4.5 4.5 0 1 1 10 11V14.5A1.5 1.5 0 1 0 11 16V3H14C14 6 16 8 19 8V11C17 11 15 10 14 9Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <h3>Kategori</h3>
                    <nav class="mobile-menu-categories" aria-label="Kategori produk">
                        <a href="{{ route('katalog', ['kategori' => 'Koko']) }}">
                            <span class="menu-category-icon"><img src="{{ asset('assets/icons/koko.svg') }}"
                                    alt=""></span>
                            <span class="menu-category-name">Baju Koko</span>
                            <span class="menu-arrow">›</span>
                        </a>
                        <a href="{{ route('katalog', ['kategori' => 'Celana']) }}">
                            <span class="menu-category-icon"><img src="{{ asset('assets/icons/celana.svg') }}"
                                    alt=""></span>
                            <span class="menu-category-name">Celana</span>
                            <span class="menu-arrow">›</span>
                        </a>
                        <a href="{{ route('katalog', ['kategori' => 'Jubah']) }}">
                            <span class="menu-category-icon"><img src="{{ asset('assets/icons/jubah.svg') }}"
                                    alt=""></span>
                            <span class="menu-category-name">Jubah</span>
                            <span class="menu-arrow">›</span>
                    </nav>

                    <a href="{{ route('katalog') }}" class="mobile-menu-all">
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


            </div>

            <div class="menu-backdrop"></div>
        </header>

        <!-- PANEL SEARCH MOBILE -->
        <div class="mobile-search-panel" aria-hidden="true">
            <div class="mobile-search-inner">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <circle cx="11" cy="11" r="6.5"></circle>
                    <path d="M16 16L20 20"></path>
                </svg>
                <input id="mobileSearchInput" type="search" placeholder="Cari baju koko, kurta..." autocomplete="off">
            </div>
        </div>

        <!-- Modal Panduan Ukuran -->
        <div class="info-modal" id="sizeModal" aria-hidden="true">
            <div class="info-modal-backdrop" data-close-modal></div>

            <div class="info-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="sizeModalTitle">
                <button type="button" class="info-modal-close" data-close-modal aria-label="Tutup">&times;</button>

                <span class="info-modal-eyebrow">BANTUAN BELANJA</span>
                <h2 id="sizeModalTitle">Panduan Ukuran</h2>
                <p>
                    Setiap model pakaian bisa memiliki ukuran yang berbeda.
                    Periksa ukuran yang tersedia pada katalog dan tanyakan
                    kepada admin jika ragu memilih ukuran.
                </p>

                <div class="info-modal-note">
                    <strong>Butuh bantuan memilih ukuran?</strong>
                    <p>Chat admin untuk memastikan ukuran sebelum memesan.</p>
                    <a href="https://wa.me/6285241800852?text={{ urlencode('Assalamu’alaikum kak, saya ingin dibantu memilih ukuran pakaian.') }}"
                        target="_blank" rel="noopener" class="info-modal-cta">
                        Tanya Ukuran via WhatsApp
                    </a>
                </div>
            </div>
        </div>

        <!-- Modal Ongkir -->
        <div class="info-modal" id="shippingModal" aria-hidden="true">
            <div class="info-modal-backdrop" data-close-modal></div>

            <div class="info-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="shippingModalTitle">
                <button type="button" class="info-modal-close" data-close-modal aria-label="Tutup">&times;</button>

                <span class="info-modal-eyebrow">INFORMASI PENGIRIMAN</span>
                <h2 id="shippingModalTitle">Ongkir & Pengiriman</h2>
                <p>
                    Biaya pengiriman bergantung pada alamat tujuan,
                    metode pengiriman, dan jumlah pesanan.
                </p>

                <div class="info-modal-note">
                    <strong>Ingin mengetahui ongkir?</strong>
                    <p>Kirim alamat atau kecamatan tujuan kepada admin untuk konfirmasi biaya pengiriman.</p>
                    <a href="https://wa.me/6285241800852?text={{ urlencode('Assalamu’alaikum kak, saya ingin konsultasi produk abati store. Ada Rekomendasi? ') }}"
                        target="_blank" rel="noopener" class="info-modal-cta">
                        Tanya Ongkir via WhatsApp
                    </a>
                </div>
            </div>
        </div>

        <!-- ================= KONTEN HALAMAN ================= -->
        @yield('content')


        <!-- ================= FOOTER ABATI STORE ================= -->
        <footer class="abati-footer">
            <div class="wrap footerGrid">

                <!-- BRAND -->
                <div class="footer-brand">
                    <a href="/" class="footerLogo">
                        ABATI<small>STORE</small>
                    </a>

                    <p>
                        Temukan pakaian pria berkualitas dengan lebih mudah.
                        Jelajahi koleksi Abati Store secara online, lalu pesan
                        melalui WhatsApp atau kunjungi toko kami di Kendari.
                    </p>
                </div>

                <!-- BELANJA -->
                <div>
                    <h4>Belanja</h4>
                    <div class="links">
                        <a href="/katalog">Semua Produk</a>
                        <a href="/#kategori">Kategori Produk</a>
                        <a href="/katalog?kategori=koko">Baju Koko</a>
                        <a href="/katalog?kategori=jubah">Jubah</a>
                        <a href="/katalog?kategori=kurta">Kurta</a>
                    </div>
                </div>

                <!-- LAYANAN -->
                <div>
                    <h4>Layanan</h4>
                    <div class="links">
                        <a
                            href="https://wa.me/6285241800852?text={{ urlencode('Assalamu’alaikum kak, saya ingin bertanya tentang pemesanan seragam. Bagaimana caranya?') }}">Pesan
                            Seragam</a>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=-3.9986246,122.5113538"
                            target="_blank">Lokasi Toko</a>
                        <a href="https://wa.me/6285241800852?text={{ urlencode('Assalamu’alaikum kak, baju koko fadkhera nya masih ada?')}}"
                            target="_blank" rel="noopener">
                            Hubungi Kami
                        </a>
                    </div>
                </div>

                <!-- KONTAK -->
                <div class="footer-contact">
                    <h4>Abati Store Kendari</h4>

                    <p>
                        <span>Lokasi</span>
                        Jalan La Ode Hadi, Lorong Satria, Kel. Wowawanggu, Kec. Kadia, Kota Kendari, Sulawesi Tenggara
                        93117
                    </p>

                    <p>
                        <span>Instagram & TikTok</span>
                        <a href="https://www.instagram.com/fadkhera.kendari/" target="_blank" rel="noopener">
                            @fadkhera.kendari
                        </a>
                    </p>


                </div>

            </div>

            <div class="wrap bottom">
                <span>© {{ date('Y') }} Abati Store.</span>
                <span>Pakaian adalah Akhlak · INIMI DIA</span>
            </div>
        </footer>

    </div>

    <!-- Vue 3 CDN -->
    <script src=" https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- Script Global UI Header/Mobile Menu/Search -->
    <!-- Script Global Navigasi (Hamburger Menu & Search Mobile) -->
    <script>
    document.addEventListener('DOMContentLoaded', () => {
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

        // Mobile Search Toggle
        const searchButton = document.querySelector('.mobile-search-toggle');
        const searchPanel = document.querySelector('.mobile-search-panel');
        const searchInput = document.querySelector('#mobileSearchInput');

        function setMobileSearch(open) {
            if (!searchPanel) return;
            searchPanel.classList.toggle('open', open);
            searchPanel.setAttribute('aria-hidden', String(!open));
            searchButton?.setAttribute('aria-expanded', String(open));
            if (open) setTimeout(() => searchInput?.focus(), 100);
        }

        searchButton?.addEventListener('click', () => {
            const isOpen = searchPanel?.classList.contains('open');
            setMobileSearch(!isOpen);
        });

        document.addEventListener('keydown', event => {
            if (event.key === 'Escape') {
                closeMobileMenu();
                setMobileSearch(false);
            }
        });


        document.addEventListener('click', function(event) {
            const opener = event.target.closest('[data-open-modal]');
            const closer = event.target.closest('[data-close-modal]');

            if (opener) {
                const modal = document.getElementById(
                    opener.dataset.openModal
                );

                if (modal) {
                    modal.classList.add('is-open');
                    modal.setAttribute('aria-hidden', 'false');
                    document.body.style.overflow = 'hidden';
                }
            }

            if (closer) {
                const modal = closer.closest('.info-modal');

                if (modal) {
                    modal.classList.remove('is-open');
                    modal.setAttribute('aria-hidden', 'true');
                    document.body.style.overflow = '';
                }
            }
        });

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                document.querySelectorAll('.info-modal.is-open')
                    .forEach(function(modal) {
                        modal.classList.remove('is-open');
                        modal.setAttribute('aria-hidden', 'true');
                    });

                document.body.style.overflow = '';
            }
        });

    });
    </script>

    <script>
    // Aturan diskon global Abati Store

    window.getDiscountPercent = function(product) {
        const category = String(
                product?.category?.name ||
                product?.category?.slug ||
                product?.category_name ||
                product?.category_slug ||
                ''
            )
            .toLowerCase()
            .replace(/[-_]/g, ' ')
            .trim();

        // Aturan diskon berdasarkan jenis produk
        const discountRules = [{
                keywords: ['koko', 'baju koko'],
                percent: 12
            },
            {
                keywords: ['jaket', 'bomber'],
                percent: 7
            },
            {
                keywords: ['jubah'],
                percent: 7
            },
            {
                keywords: ['kurta'],
                percent: 7
            },
            {
                keywords: ['kemeja'],
                percent: 7
            },
            {
                keywords: ['kaos', 'oversize'],
                percent: 7
            },
            {
                keywords: ['sirwal'],
                percent: 7
            }
        ];

        const rule = discountRules.find(item =>
            item.keywords.some(keyword => category.includes(keyword))
        );

        return rule ? rule.percent : 7;
    };

    window.getDiscountPrice = function(product) {
        const price = Number(product?.price || 0);
        const discount = window.getDiscountPercent(product);

        return Math.round(price * (1 - discount / 100));
    };
    </script>

    @stack('scripts')
</body>

</html>