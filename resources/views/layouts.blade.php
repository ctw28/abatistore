<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Abati Store')</title>

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
    <link rel="stylesheet" href="{{asset('css/newweb/08-responsive.css')}}">

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
                <a class="logo-img" href="/beranda" aria-label="Abati Store">
                    <img src="{{ asset('logo-abati-store.png') }}" alt="Abati Store">
                </a>
                <nav class="desktop-nav">
                    <a href="/">Beranda</a>
                    <a href="/katalog">Katalog</a>
                    <a href="/#kategori">Kategori</a>
                    <a href="/#rekomendasi">Rekomendasi</a>
                    <a href="/#offline">Toko</a>
                    <a href="/#seragam">Seragam</a>
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
                    <a href="/" class="mobile-menu-logo" aria-label="Abati Store">
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
                                <strong>Toko Abati Store</strong>
                                <small>Alamat dan lokasi toko</small>
                            </span>
                            <span class="menu-arrow">›</span>
                        </a>
                        <a href="https://wa.me/6285241800852" class="mobile-menu-link" target="_blank" rel="noopener">
                            <span class="menu-link-icon">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M20 11.5A8.5 8.5 0 0 1 7.4 19L3 20.5L4.5 16.3A8.5 8.5 0 1 1 20 11.5Z" />
                                    <path
                                        d="M8 8.5C8.5 11 10 12.5 12.5 14L14 12.8L16 14L15.5 16C11 16.5 7 12.5 7.5 8Z" />
                                </svg>
                            </span>
                            <span class="menu-link-content">
                                <strong>Hubungi Kami</strong>
                                <small>Konsultasi kebutuhanmu</small>
                            </span>
                            <span class="menu-arrow">›</span>
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

        <!-- ================= KONTEN HALAMAN ================= -->
        @yield('content')

        <!-- ================= FOOTER (SAMA DI SEMUA HALAMAN) ================= -->
        <footer>
            <div class="wrap footerGrid">
                <div>
                    <div class="footerLogo">ABATI<small>STORE</small></div>
                    <p>Toko virtual pakaian pria yang memudahkan Anda menemukan baju koko dan pakaian berkualitas sesuai
                        kebutuhan. Lihat koleksi, cek ukuran, lalu pesan melalui WhatsApp.</p>
                </div>
                <div>
                    <h4>Belanja</h4>
                    <div class="links">
                        <a href="/#kategori">Kebutuhan</a>
                        <a href="/#koleksi">Koleksi Terbaru</a>
                        <a href="/katalog?kategori=koko">Baju Koko</a>
                        <a href="/katalog?kategori=kurta">Kurta</a>
                        <a href="/katalog?kategori=jubah">Jubah</a>
                    </div>
                </div>
                <div>
                    <h4>Bantuan</h4>
                    <div class="links">
                        <a href="#">Cara Belanja</a>
                        <a href="#">Panduan Ukuran</a>
                        <a href="#">Pengiriman</a>
                        <a href="#">Pembayaran</a>
                        <a href="/#seragam">Pesan Seragam</a>
                    </div>
                </div>
                <div>
                    <h4>Abati Store Kendari</h4>
                    <div class="contact">📍 Kendari, Sulawesi Tenggara<br>📱 Pesan melalui WhatsApp<br>📷
                        @fadkhera.kendari<br>🎵 @fadkhera.kendari</div>
                </div>
            </div>
            <div class="wrap bottom">
                <span>© 2026 Abati Store. All rights reserved.</span>
                <span>Pakaian adalah Akhlak • INIMI DIA</span>
            </div>
        </footer>
    </div>

    <!-- Vue 3 CDN -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

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
    });
    </script>

    @stack('scripts')
</body>

</html>