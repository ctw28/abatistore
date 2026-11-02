@extends('layouts')

@section('title', 'Kunjungi Toko — Abati Store')
@push('styles')
<style>
/* =====================================================
   ABATI STORE - DETAIL TOKO
   ===================================================== */

.store-page {
    --store-brown: #39291d;
    --store-accent: #8b7355;
    --store-cream: #f5f0e8;
    --store-text: #29251f;
    --store-muted: #77716a;

    background: #fff;
    color: var(--store-text);
    padding-bottom: 60px;
}

.store-page img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* INTRO */

.store-intro {
    max-width: 850px;
    margin: 0 auto;
    padding: 65px 20px 38px;
    text-align: center;
}

.store-eyebrow {
    display: block;
    color: var(--store-accent);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
    margin-bottom: 12px;
}

.store-intro h1 {
    font-size: clamp(30px, 4vw, 43px);
    line-height: 1.15;
    margin: 0 0 14px;
    font-weight: 650;
    letter-spacing: -1px;
}

.store-intro p {
    max-width: 600px;
    margin: auto;
    color: var(--store-muted);
    font-size: 15px;
    line-height: 1.8;
}

/* MAIN PHOTO */

.store-main-photo {
    max-width: 1240px;
    margin: 0 auto;
    height: 480px;
    position: relative;
    overflow: hidden;
    border-radius: 12px;
    background: var(--store-cream);
}

.store-main-photo::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg,
            rgba(30, 22, 15, .72),
            rgba(30, 22, 15, .18) 65%,
            transparent);
}

.store-main-photo img {
    object-position: center;
}

.main-photo-caption {
    position: absolute;
    z-index: 2;
    left: 55px;
    bottom: 55px;
    max-width: 520px;
    color: #fff;
}

.main-photo-caption span {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
    color: #e6cfad;
}

.main-photo-caption h2 {
    font-size: clamp(27px, 4vw, 42px);
    line-height: 1.15;
    margin: 12px 0;
}

.main-photo-caption p {
    font-size: 14px;
    color: rgba(255, 255, 255, .9);
    line-height: 1.7;
    margin: 0;
}

/* GENERAL SECTION */

.store-section,
.store-customers {
    max-width: 1240px;
    margin: 0 auto;
    padding: 75px 20px 0;
}

.section-heading {
    display: flex;
    justify-content: space-between;
    align-items: end;
    gap: 30px;
    margin-bottom: 25px;
}

.section-heading h2 {
    font-size: clamp(24px, 3vw, 32px);
    margin: 0;
    letter-spacing: -.7px;
}

.section-heading>p {
    max-width: 390px;
    color: var(--store-muted);
    font-size: 13px;
    line-height: 1.7;
    margin: 0;
}

/* GALLERY */

.store-gallery {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 14px;
}

.gallery-item {
    aspect-ratio: 4 / 3;
    border-radius: 9px;
    overflow: hidden;
    background: var(--store-cream);
}

.gallery-item img {
    transition: transform .4s ease;
}

.gallery-item:hover img {
    transform: scale(1.04);
}

/* CUSTOMER COLLAGE */

.store-customers {
    padding-top: 75px;
}

.customer-collage {
    width: 100%;
    border-radius: 12px;
    overflow: hidden;
    background: var(--store-cream);
}

.customer-collage img {
    width: 100%;
    height: auto;
    object-fit: contain;
}

/* LOCATION */

.store-location {
    max-width: 1240px;
    margin: 80px auto 0;
    padding: 45px;
    display: grid;
    grid-template-columns: .85fr 1.15fr;
    gap: 45px;
    align-items: center;
    background: var(--store-cream);
    border-radius: 12px;
}

.location-info h2 {
    font-size: clamp(27px, 3vw, 36px);
    line-height: 1.2;
    margin: 0 0 15px;
}

.location-info>p {
    color: var(--store-muted);
    font-size: 14px;
    line-height: 1.8;
    margin-bottom: 25px;
}

.location-address {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    margin-bottom: 25px;
}

.location-icon {
    font-size: 27px;
    color: var(--store-accent);
}

.location-address strong {
    font-size: 14px;
}

.location-address p {
    font-size: 13px;
    color: var(--store-muted);
    line-height: 1.6;
    margin: 4px 0 0;
}

.location-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.location-btn {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    padding: 12px 17px;
    border-radius: 6px;
    font-size: 12px;
    font-weight: 650;
    text-decoration: none;
    transition: .2s;
}

.location-btn.primary {
    background: var(--store-brown);
    color: #fff;
}

.location-btn.secondary {
    border: 1px solid #b9aa98;
    color: var(--store-brown);
}

.location-btn:hover {
    transform: translateY(-2px);
}

.location-map {
    width: 100%;
    height: 340px;
    overflow: hidden;
    border-radius: 9px;
    background: #e5ddd1;
}

/* CTA */

.store-cta {
    max-width: 850px;
    margin: 85px auto 0;
    padding: 0 20px;
    text-align: center;
}

.store-cta h2 {
    font-size: clamp(25px, 3vw, 35px);
    margin: 0 0 12px;
}

.store-cta>p {
    color: var(--store-muted);
    font-size: 14px;
    line-height: 1.8;
    max-width: 550px;
    margin: 0 auto 25px;
}

.cta-actions {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 12px;
}

.cta-actions a {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    padding: 14px 23px;
    border-radius: 6px;
    text-decoration: none;
    font-size: 13px;
    font-weight: 650;
    transition: .2s;
}

.cta-primary {
    background: var(--store-brown);
    color: #fff;
}

.cta-secondary {
    border: 1px solid #c9bdad;
    color: var(--store-brown);
}

.cta-actions a:hover {
    transform: translateY(-2px);
}

/* RESPONSIVE */

@media (max-width: 768px) {

    .store-page {
        padding-bottom: 40px;
    }

    .store-intro {
        padding: 42px 20px 28px;
    }

    .store-intro p {
        font-size: 13px;
    }

    .store-main-photo {
        height: 360px;
        border-radius: 0;
    }

    .store-main-photo::after {
        background: linear-gradient(0deg,
                rgba(30, 22, 15, .75),
                transparent 85%);
    }

    .main-photo-caption {
        left: 22px;
        right: 22px;
        bottom: 28px;
    }

    .main-photo-caption h2 {
        font-size: 29px;
    }

    .store-section,
    .store-customers {
        padding: 50px 16px 0;
    }

    .section-heading {
        display: block;
        margin-bottom: 18px;
    }

    .section-heading>p {
        margin-top: 10px;
        font-size: 12px;
    }

    .store-gallery {
        grid-template-columns: repeat(2, 1fr);
        gap: 9px;
    }

    .gallery-item {
        border-radius: 7px;
    }

    .customer-collage {
        border-radius: 8px;
    }

    .store-location {
        margin: 55px 16px 0;
        padding: 25px 18px;
        grid-template-columns: 1fr;
        gap: 25px;
    }

    .location-map {
        height: 280px;
    }

    .location-actions {
        flex-direction: column;
    }

    .location-btn {
        width: 100%;
    }

    .store-cta {
        margin-top: 60px;
    }

    .cta-actions {
        flex-direction: column;
    }

    .cta-actions a {
        width: 100%;
    }
}
</style>
@endpush
@section('content')

<main class="store-page">

    <!-- 1. HEADER / INTRO -->
    <section class="store-intro">
        <span class="store-eyebrow">ABATI STORE · KENDARI</span>
        <h1>Kenali Toko Kami</h1>
        <p>
            Ingin melihat dan memilih pakaian secara langsung?
            Kami siap menyambut kunjungan Anda di toko Abati Store.
        </p>
    </section>


    <!-- 2. FOTO UTAMA TOKO -->
    <section class="store-main-photo">
        <img src="{{ asset('toko-depan.jpeg') }}" alt="Tampak depan toko Abati Store" loading="eager">

        <div class="main-photo-caption">
            <span>DATANG DAN KUNJUNGI KAMI</span>
            <h2>Selamat Datang di Abati Store</h2>
            <p>Temukan koleksi pakaian pilihan secara langsung.</p>
        </div>
    </section>


    <!-- 3. SUASANA DALAM TOKO -->
    <section class="store-section">
        <div class="section-heading">
            <div>
                <span class="store-eyebrow">SUASANA TOKO</span>
                <h2>Lihat Lebih Dekat</h2>
            </div>
            <p>
                Kenali suasana toko dan koleksi yang tersedia
                sebelum Anda berkunjung.
            </p>
        </div>

        <div class="store-gallery">
            <div class="gallery-item">
                <img src="{{ asset('toko-dalam.jpeg') }}" alt="Interior toko Abati Store" loading="lazy">
            </div>

            <div class="gallery-item">
                <img src="{{ asset('toko-dalam-2.jpeg') }}" alt="Rak koleksi pakaian Abati Store" loading="lazy">
            </div>

            <div class="gallery-item">
                <img src="{{ asset('toko5.jpeg') }}" alt="Koleksi pakaian di Abati Store" loading="lazy">
            </div>

            <div class="gallery-item">
                <img src="{{ asset('toko.jpeg') }}" alt="Suasana dalam toko Abati Store" loading="lazy">
            </div>
        </div>
    </section>


    <!-- 4. FOTO PELANGGAN -->
    <section class="store-customers">
        <div class="section-heading">
            <div>
                <span class="store-eyebrow">BERSAMA PELANGGAN</span>
                <h2>Terima Kasih Telah Berkunjung</h2>
            </div>
            <p>
                Setiap kunjungan dan kepercayaan pelanggan
                menjadi bagian dari perjalanan Abati Store.
            </p>
        </div>

        <div class="customer-collage">
            <img src="{{ asset('customer.webp') }}" alt="Kolase pelanggan yang berkunjung ke Abati Store"
                loading="lazy">
        </div>
    </section>


    <!-- 5. LOKASI TOKO -->
    <section class="store-location">
        <div class="location-info">
            <span class="store-eyebrow">LOKASI KAMI</span>
            <h2>Temukan Abati Store</h2>

            <p>
                Kami menantikan kunjungan Anda.
                Silakan lihat lokasi toko melalui peta
                atau ikuti video petunjuk perjalanan.
            </p>

            <div class="location-address">
                <span class="location-icon">⌖</span>
                <div>
                    <strong>Abati Store</strong>
                    <p>Jalan La Ode Hadi, Lorong Satria (Bagian Bypass Pasar Baru), Kel. Wowawanggu, Kec. Kadia, Kota
                        Kendari, Sulawesi Tenggara</p>
                </div>
            </div>

            <div class="location-actions">
                <a href="https://www.google.com/maps/dir/?api=1&destination=-3.9986246,122.5113538" target="_blank"
                    rel="noopener" class="location-btn primary">
                    Lihat di Google Maps ↗
                </a>

                <a href="https://www.tiktok.com/@fadkhera.kendari/video/7608130662645681416" target="_blank"
                    rel="noopener" class="location-btn secondary">
                    Lihat Video Lokasi ↗
                </a>
            </div>
        </div>

        <div class="location-map">
            <iframe src="https://www.google.com/maps?q=fadkhera+kendari&output=embed" width="100%" height="100%"
                style="border:0" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen>
            </iframe>
        </div>
    </section>


    <!-- 6. CTA -->
    <section class="store-cta">
        <span class="store-eyebrow">ABATI STORE</span>
        <h2>Sudah menemukan yang Anda cari?</h2>
        <p>
            Lihat koleksi kami secara online atau datang langsung
            ke toko. Kami siap membantu Anda.
        </p>

        <div class="cta-actions">
            <a href="{{ route('katalog') }}" class="cta-primary">
                Lihat Katalog Produk →
            </a>

            <a href="https://wa.me/6285241800852?text={{ urlencode('Assalamu’alaikum kak, saya ingin konsultasi pakaian di abati store, ada rekomendasi?') }}"
                target="_blank" rel="noopener" class="cta-secondary">
                Chat WhatsApp
            </a>
        </div>
    </section>

</main>

@endsection