@extends('layouts')

@section('title', ($seoProduct->name ?? 'Koleksi Abati Store') . ' — Abati Store')
@php
$seoName = $seoProduct->name ?? 'Koleksi Abati Store';
$seoDescription = \Illuminate\Support\Str::limit(
strip_tags($seoProduct->description ?? 'Temukan pakaian pria berkualitas di Abati Store Kendari.'),
200
);

$seoImagePath = $seoProduct->image ?? null;

if ($seoImagePath && !\Illuminate\Support\Str::startsWith($seoImagePath, ['http://', 'https://'])) {
$seoImage = asset('storage/' . ltrim(
preg_replace('#^/?storage/#', '', $seoImagePath),
'/'
));
} else {
$seoImage = $seoImagePath ?: asset('logo-abati-store.png');
}

$seoUrl = route('produk.detail', ['slug' => $productSlug]);
@endphp

@push('meta')
<meta property="og:type" content="product">
<meta property="og:site_name" content="Abati Store">
<meta property="og:title" content="{{ $seoName }} — Abati Store">
<meta property="og:description" content="{{ $seoDescription }}">
<meta property="og:image" content="{{ $seoImage }}">
<meta property="og:image:alt" content="{{ $seoName }}">
<meta property="og:url" content="{{ $seoUrl }}">
<meta property="og:locale" content="id_ID">
<link rel="canonical" href="{{ $seoUrl }}">
@endpush

@push('styles')
<!-- CSS Khusus Detail Produk -->
<link rel="stylesheet" href="{{ asset('css/newweb/09-product-detail.css') }}">
<style>
    /* SHARE PRODUK */
    .pd-share {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 20px;
    }

    .pd-share-label {
        font-size: 13px;
        font-weight: 600;
        color: #777;
        margin-right: 2px;
    }

    .pd-share-btn {
        width: 36px;
        height: 36px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #e8e8e8;
        border-radius: 50%;
        background: #fff;
        cursor: pointer;
        text-decoration: none;
        transition: all .2s ease;
    }

    .pd-share-wa {
        color: #25D366;
    }

    .pd-share-copy {
        color: #555;
    }

    .pd-share-wa:hover {
        color: #fff;
        background: #25D366;
        border-color: #25D366;
        transform: translateY(-2px);
    }

    .pd-share-copy:hover {
        color: #fff;
        background: #333;
        border-color: #333;
        transform: translateY(-2px);
    }

    #pdCopyStatus {
        font-size: 12px;
        color: #25a55b;
        margin-left: 2px;
    }

    /* Penyesuaian khusus elemen baru halaman detail */
    .pd-occasion-list {
        display: flex;
        flex-wrap: wrap;
        gap: 8px 16px;
        margin-top: 8px;
    }

    .pd-occasion-item {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 13px;
        font-weight: 600;
        color: var(--primary, #183332);
        background: #f2f7f6;
        padding: 6px 12px;
        border-radius: 20px;
    }

    .pd-occasion-item i {
        color: #25d366;
        font-style: normal;
        font-weight: 800;
    }

    /* Penyesuaian Tombol Shopee Sekunder & Catatan Luar Kota */
    .pd-shopee-wrapper {
        margin-top: 14px;
        padding-top: 14px;
        border-top: 1px dashed #e2e8e8;
    }

    .pd-shopee-note {
        font-size: 12px;
        color: #6f6f6f;
        margin-bottom: 8px;
        display: block;
    }

    .pd-btn-shopee-subtle {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #fff;
        color: #ee4d2d;
        border: 1px solid #ee4d2d;
        padding: 8px 16px;
        border-radius: 8px;
        font-size: 12px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.2s ease;
    }

    .pd-btn-shopee-subtle:hover {
        background: #ffeeeb;
    }

    /* Thumbnail Video Badge */
    .pd-thumb-video {
        position: relative;
    }

    .pd-thumb-video::after {
        content: "▶";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.4);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
    }

    /* Floating WhatsApp Button */
    .pd-floating-wa {
        position: fixed;
        bottom: 24px;
        right: 24px;
        z-index: 99;
        background: #25d366;
        color: #fff;
        width: 56px;
        height: 56px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 16px rgba(37, 211, 102, 0.4);
        transition: transform 0.25s ease;
        text-decoration: none;
    }

    .pd-floating-wa:hover {
        transform: scale(1.08);
    }

    .pd-floating-wa svg {
        width: 30px;
        height: 30px;
        fill: currentColor;
    }

    .pd-stock-alert {
        margin-top: 16px;
        padding: 14px 16px;
        border: 1px solid #f1b8b8;
        border-radius: 10px;
        background: #fff1f1;
        color: #a52828;
    }

    .pd-stock-alert strong {
        display: block;
        margin-bottom: 4px;
    }

    .pd-stock-alert p {
        margin: 0;
        font-size: 13px;
    }

    /* ===== PANDUAN UKURAN ===== */
    .pd-size-guide {
        width: 100%;
        margin-top: 20px;
        padding: 16px;
        background: #fff;
        border: 1px solid #eee9e3;
        border-radius: 12px;
        overflow: hidden;
    }

    .pd-size-guide img {
        display: block;
        width: 100%;
        max-width: 700px;
        height: auto;
        margin: 0 auto;
        object-fit: contain;
        border-radius: 6px;
    }

    /* Mobile */
    @media (max-width: 576px) {
        .pd-size-guide {
            padding: 10px;
            margin-top: 14px;
            border-radius: 10px;
        }

        .pd-size-guide img {
            width: 100%;
        }
    }

    .pd-size-help {
        margin-top: 18px;
        padding: 16px;
        text-align: center;
        background: #faf8f5;
        border-radius: 10px;
    }

    .pd-size-help p {
        margin: 0 0 12px;
        font-size: 14px;
        color: #514b43;
    }

    .pd-size-wa {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 11px 22px;
        background: #25D366;
        color: #fff;
        border-radius: 7px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        transition: background .2s ease;
    }

    .pd-size-wa:hover {
        background: #1eae54;
        color: #fff;
    }

    .pd-size-help small {
        display: block;
        margin-top: 10px;
        font-size: 12px;
        color: #888;
    }
</style>
@endpush

@section('content')
<main class="pd-page" id="productDetailApp" v-cloak>
    <div class="pd-container">

        <section class="pd-main" style="padding-top: 20px;">
            <!-- Galeri Foto & Video Produk -->
            <div class="pd-gallery">
                <div class="pd-main-image">
                    <!-- Media Utama: Bisa berupa Img atau Video -->
                    <img id="pdMainImage" :src="getImageUrl(product.image)" :alt="product.name || 'Foto produk'">

                    <video id="pdMainVideo" controls
                        style="display: none; width: 100%; height: 100%; object-fit: cover;">
                        <source id="pdVideoSource" src="" type="video/mp4">
                        Browser Anda tidak mendukung penayangan video.
                    </video>

                    <span class="pd-image-count" id="pdImageCount">1/5</span>
                    <button class="pd-gallery-arrow pd-prev" aria-label="Foto sebelumnya">‹</button>
                    <button class="pd-gallery-arrow pd-next" aria-label="Foto berikutnya">›</button>
                </div>


                <div class="pd-thumbnails">
                    <button v-for="(img, index) in (product.images || [])" :key="img.id || index" class="pd-thumb"
                        :class="{ 'is-active': index === 0 }" type="button"
                        @click="document.getElementById('pdMainImage').src = getImageUrl(img.image)">
                        <img :src="getImageUrl(img.image)" :alt="(product.name || 'Produk') + ' ' + (index + 1)"
                            loading="lazy">
                    </button>
                </div>


                <div class="pd-benefits">
                    <div><i>✳</i><span><b>Bahan pilihan</b><small>Nyaman dipakai</small></span></div>
                    <div><i>◇</i><span><b>Detail rapi</b><small>Perhatikan detail</small></span></div>
                    <div><i>↻</i><span><b>Easy care</b><small>Mudah dirawat</small></span></div>
                </div>
            </div>

            <!-- Informasi Produk -->
            <div class="pd-info">
                <!-- <div class="pd-badges">
                    <span class="pd-category"> @{{ product.category ? product.category.name : 'Produk' }}
                    </span>
                    <span class="pd-discount">Diskon -@{{ getDiscountPercent(product) }}%
                    </span></span>
                </div> -->

                <h1>@{{ product.category ? product.category.name : 'Produk' }} |
                    @{{ product.name || 'Memuat produk...' }}</h1>

                <div class="pd-price-row">
                    <strong class="pd-price">@{{ formatRupiah(getDiscountPrice(product)) }}</strong>
                    <del>@{{ formatRupiah(product.price) }}</del>
                    <span class="pd-discount-small"> -@{{ getDiscountPercent(product) }}%
                    </span></span>
                </div>

                <p class="pd-short-desc"></p>

                <!-- Penjelasan Penggunaan (Centang Hijau) -->
                <div class="pd-occasion" v-if="product.tags && product.tags.some(tag => tag.group === 'Rekomendasi')">
                    <h2>Cocok untuk (Rekomendasi)</h2>

                    <div class="pd-occasion-list">
                        <span class="pd-occasion-item"
                            v-for="tag in product.tags.filter(tag => tag.group === 'Rekomendasi')" :key="tag.id">
                            <i>✓</i> @{{ tag.name }}
                        </span>
                    </div>
                </div>

                <!-- Penjelasan Ukuran Tersedia (Statis / Informasi Only) -->

                <!-- Ukuran tersedia: hanya tampil jika stok belum habis -->
                <div v-if="product && product.id && !isProductOutOfStock()" class="pd-size-section">

                    <div class="pd-size-heading">
                        <h2>Ukuran tersedia</h2>
                        <button type="button" id="pdOpenSizeGuide">
                            Panduan ukuran ↗
                        </button>
                    </div>

                    <div v-if="product.stocks" class="pd-size-badges">
                        <span v-for="size in allSizes" :key="size.id" class="size-badge"
                            :class="isSizeAvailable(size.id) ? 'is-ready' : 'is-empty'" v-if="size.name != 'All Size'">
                            @{{ size.name }}
                        </span>
                    </div>
                    <!-- 
                    <p v-if="product.stocks" id="pdSizeHelp" style="margin-top: 8px; font-size: 12px; color: #888;">
                        Cek ketersediaan ukuran sebelum konfirmasi ke admin.
                    </p> -->
                </div>
                <!-- Modal Panduan Ukuran -->
                <div class="pd-modal" id="pdSizeModal" aria-hidden="true">
                    <div class="pd-modal-backdrop" data-close-size></div>
                    <section class="pd-modal-card" role="dialog" aria-modal="true" aria-labelledby="pdSizeTitle">
                        <button class="pd-modal-close" type="button" data-close-size aria-label="Tutup">×</button>
                        <span class="pd-modal-eyebrow">BANTUAN UKURAN</span>
                        <h2 id="pdSizeTitle">Panduan ukuran berdasarkan berat dan tinggi badan</h2>
                        <!-- <p>Isi dengan ukuran resmi produk sebelum digunakan di situs.</p> -->
                        <div class="pd-size-guide" v-if="sizeGuide">
                            <img :src="'/' + sizeGuide.image" :alt="'Panduan Ukuran ' +
            (product.brand ? product.brand.name : '') + ' ' +
            (product.category ? product.category.name : '')">
                        </div>
                        <!-- <div class="pd-table-scroll">
                            <table class="pd-size-table">
                                <thead>
                                    <tr>
                                        <th>Ukuran</th>
                                        <th>Lebar dada</th>
                                        <th>Panjang baju</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>S</td>
                                        <td>—</td>
                                        <td>—</td>
                                    </tr>
                                    <tr>
                                        <td>M</td>
                                        <td>—</td>
                                        <td>—</td>
                                    </tr>
                                    <tr>
                                        <td>L</td>
                                        <td>—</td>
                                        <td>—</td>
                                    </tr>
                                    <tr>
                                        <td>XL</td>
                                        <td>—</td>
                                        <td>—</td>
                                    </tr>
                                    <tr>
                                        <td>XXL</td>
                                        <td>—</td>
                                        <td>—</td>
                                    </tr>
                                    <tr>
                                        <td>XXXL</td>
                                        <td>—</td>
                                        <td>—</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> -->
                        <div class="pd-size-help">
                            <p>Belum yakin dengan ukuran yang cocok?</p>

                            <a :href="'https://wa.me/6285241800852?text=' +
                encodeURIComponent(
        'Assalamu’alaikum kak, saya mau tanya terkait ukuran:\n\n' +
        'Produk: ' + product.name + '\n' +
        'Link Produk: ' + window.location.href + '\n\n' +
        'Mohon bantuannya untuk memilih ukuran yang sesuai. Terima kasih kak.'
    )" target="_blank" rel="noopener" class="pd-size-wa">
                                <i class="fab fa-whatsapp"></i>
                                Tanyakan ukuran via WhatsApp
                            </a>

                            <small>Kami siap membantu memilih ukuran yang pas.</small>
                        </div>
                    </section>
                </div>
                <!-- Tombol utama pesan via WA -->
                <div class="pd-actions">

                    <div v-if="product && product.id && isProductOutOfStock()" class="pd-stock-alert" role="alert">
                        <strong>Stok Habis</strong>
                        <p>Maaf, produk ini sedang habis. Silakan cek koleksi lainnya.</p>
                    </div>

                    <a v-else-if="product && product.id" class="pd-btn pd-btn-wa" href="#"
                        @click.prevent="orderViaWhatsApp" style="width: 100%; justify-content: center;">
                        ☏ Pesan via WhatsApp (Gratis Ongkir)
                    </a>

                </div>

                <!-- Bagian Pengiriman -->
                <!-- <section v-if="product && product.id && !isProductOutOfStock()" class="pd-shipping">
                    <div class="pd-shipping-promo">
                        <span class="pd-shipping-icon">↗</span>
                        <div>
                            <b>Gratis ongkir hingga Rp10.000</b>
                            <small>Subsidi sesuai tarif dan wilayah layanan.</small>
                        </div>
                    </div> -->
                <!-- <details class="pd-shipping-details">
                        <summary>Cek tabel ongkir per kecamatan <span>⌄</span></summary>
                        <p class="pd-shipping-note">Tarif berikut contoh. Ganti sesuai tarif yang ditentukan Abati
                            Store.</p>
                        <div class="pd-table-scroll">
                            <table class="pd-shipping-table">
                                <thead>
                                    <tr>
                                        <th>Kecamatan</th>
                                        <th>Tarif</th>
                                        <th>Subsidi</th>
                                        <th>Dibayar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mandonga</td>
                                        <td>Rp5.000</td>
                                        <td>Rp5.000</td>
                                        <td class="pd-free">Gratis</td>
                                    </tr>
                                    <tr>
                                        <td>Kadia</td>
                                        <td>Rp5.000</td>
                                        <td>Rp5.000</td>
                                        <td class="pd-free">Gratis</td>
                                    </tr>
                                    <tr>
                                        <td>Wua-Wua</td>
                                        <td>Rp7.000</td>
                                        <td>Rp7.000</td>
                                        <td class="pd-free">Gratis</td>
                                    </tr>
                                    <tr>
                                        <td>Poasia</td>
                                        <td>Rp10.000</td>
                                        <td>Rp10.000</td>
                                        <td class="pd-free">Gratis</td>
                                    </tr>
                                    <tr>
                                        <td>Baruga</td>
                                        <td>Rp12.000</td>
                                        <td>Rp10.000</td>
                                        <td>Rp2.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <small class="pd-shipping-footnote">Subsidi maksimal Rp10.000. Admin mengonfirmasi ongkir
                            sebelum pembayaran.</small>
                    </details> -->
                <!-- </section> -->

                <!-- Tombol Bagikan dengan Ikon Ringkas -->
                <div v-if="product && product.id && !isProductOutOfStock()" class="pd-share">
                    <span class="pd-share-label">Bagikan:</span>

                    <!-- WhatsApp -->
                    <a id="pdShareWa" href="#" target="_blank" rel="noopener" class="pd-share-btn pd-share-wa"
                        title="Bagikan ke WhatsApp" aria-label="Bagikan ke WhatsApp">

                        <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor" aria-hidden="true">
                            <path
                                d="M20.52 3.48A11.87 11.87 0 0 0 12.08 0C5.5 0 .15 5.35.15 11.93c0 2.1.55 4.16 1.6 5.98L0 24l6.25-1.64a11.9 11.9 0 0 0 5.83 1.48h.01c6.58 0 11.93-5.35 11.93-11.93a11.86 11.86 0 0 0-3.5-8.43ZM12.09 21.8h-.01a9.9 9.9 0 0 1-5.04-1.38l-.36-.21-3.71.97.99-3.62-.24-.37a9.88 9.88 0 0 1-1.52-5.26c0-5.45 4.44-9.89 9.9-9.89a9.83 9.83 0 0 1 7 2.9 9.83 9.83 0 0 1 2.9 7c0 5.45-4.44 9.89-9.9 9.89Zm5.43-7.41c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.95 1.17-.17.2-.35.22-.65.07-.3-.15-1.25-.46-2.38-1.47-.88-.78-1.47-1.75-1.64-2.05-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.8.37-.27.3-1.05 1.02-1.05 2.49s1.07 2.89 1.22 3.09c.15.2 2.1 3.2 5.08 4.49.71.31 1.26.5 1.69.64.71.23 1.36.2 1.87.12.57-.08 1.76-.72 2.01-1.42.25-.7.25-1.3.17-1.42-.07-.13-.27-.2-.57-.35Z" />
                        </svg>
                    </a>

                    <!-- Copy Link -->
                    <button id="pdCopyLink" type="button" class="pd-share-btn pd-share-copy" title="Salin Tautan"
                        aria-label="Salin Tautan">

                        <svg viewBox="0 0 24 24" width="19" height="19" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="8" y="8" width="13" height="13" rx="2.5" />
                            <path d="M16 8V5.5A2.5 2.5 0 0 0 13.5 3h-8A2.5 2.5 0 0 0 3 5.5v8A2.5 2.5 0 0 0 5.5 16H8" />
                        </svg>
                    </button>

                    <small id="pdCopyStatus" aria-live="polite"></small>
                </div>
                <!-- Opsi Pembelian via Shopee (Luar Kendari) -->
                <!-- <div v-if="product && product.id && !isProductOutOfStock()" class="pd-shopee-wrapper">
                    <span class="pd-shopee-note">📍 Dari luar Kota Kendari / Luar Sultra? Anda dapat meminta/request
                        link produk
                        melalui Shopee.</span>
                    <a class="pd-btn-shopee-subtle" v-else-if="product && product.id" href="#"
                        @click.prevent="requestShopeeLink" target="_blank" rel="noopener">
                        <span>🛍 Request link Shopee</span>
                    </a>
                </div> -->

            </div>
        </section>

        <!-- Tab Informasi (Deskripsi, Real Pict, Video) -->
        <section class="pd-tabs-section">
            <div class="pd-tabs" role="tablist">
                <button class="pd-tab is-active" data-tab="description" role="tab"
                    aria-selected="true">Deskripsi</button>
                <!-- <button class="pd-tab" data-tab="realpic" role="tab" aria-selected="false">Foto dan Video</button> -->
                <!-- <button class="pd-tab" data-tab="video" role="tab" aria-selected="false">Video</button> -->
            </div>
            <div class="pd-tab-panel is-active" id="pdTab-description" role="tabpanel">
                <div>
                    <!-- <h2>Deskripsi produk</h2> -->
                    @{{ product.description || 'Hubungi admin untuk informasi produk.' }}
                </div>
                <!-- <div class="pd-detail-highlights">
                    <article><b>01 — Model modern</b><small>Tampilan rapi dan sederhana</small></article>
                    <article><b>02 — Pilihan aktivitas</b><small>Untuk kegiatan formal maupun ibadah</small></article>
                    <article><b>03 — Bantuan ukuran</b><small>Tanyakan ukuran sebelum transaksi</small></article>
                </div> -->
            </div>
            <!-- <div class="pd-tab-panel" id="pdTab-realpic" role="tabpanel" hidden>
                <h2>Foto asli produk</h2>
                <p>Ganti gambar contoh berikut dengan foto asli stok Abati Store.</p>
                <div class="pd-real-gallery">
                    <img src="https://abatistore.com/storage/products/a2lf83GncdoNeJbhy3wd5B7RqLezg5FEk8eenEfS.webp"
                        alt="Foto produk 1">
                    <img src="https://abatistore.com/storage/products/5Qcc9Cf0ALYgv2pie5ttlqy0PcrGQD6wtkKUGjVK.webp"
                        alt="Foto produk 2">
                    <img src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp"
                        alt="Foto produk 3">
                </div>
            </div>
            <div class="pd-tab-panel" id="pdTab-video" role="tabpanel" hidden>
                <h2>Video produk</h2>
                <div class="pd-video-placeholder">
                    <span>▶</span>
                    <div>
                        <b>Video produk belum ditambahkan</b>
                        <p>Tambahkan URL video produk asli ketika tersedia.</p>
                    </div>
                </div>
            </div> -->
        </section>

        <!-- Cara Belanja -->
        <section v-if="product && product.id && !isProductOutOfStock()" class="pd-howto" id="cara-belanja">
            <div class="pd-section-heading">
                <span>MUDAH DAN PRAKTIS</span>
                <h2>Belanja Online di Abati Store</h2>
                <!-- <p>Konfirmasi dulu supaya detail pesanan dan biaya pengiriman jelas.</p> -->
            </div>
            <div class="pd-howto-grid">
                <article><i>01</i>
                    <h3>Pilih Produk di Web</h3>
                    <p>Pilih produk yang disuka / diminati dan chat untuk detail dan pemesanan.</p>
                </article>
                <article><i>02</i>
                    <h3>Deal</h3>
                    <p>Jika sudah sepakat, tinggal bayar.</p>
                </article>
                <article><i>03</i>
                    <h3>Pesanan diantarkan ke tempatmu</h3>
                    <p>Setelah pembayaran, pesanan disiapkan dan akan diantar ke tempatmu.</p>
                </article>
            </div>
        </section>


        <!-- Produk Terkait -->
        <section class="pd-related">
            <div class="pd-section-heading pd-related-heading">
                <div>
                    <span>JELAJAHI LAGI</span>
                    <h2>Produk terkait</h2>
                </div>

                <a href="{{ route('katalog') }}">Lihat semua →</a>
            </div>

            <div v-if="relatedLoading" class="pd-related-loading">
                Memuat produk lainnya...
            </div>

            <div v-else-if="relatedProducts.length === 0" class="pd-related-empty">
                Belum ada produk lainnya.
            </div>

            <div v-else class="pd-related-grid">
                <a v-for="item in relatedProducts" :key="item.id" class="pd-product-card"
                    :href="productDetailUrl(item.slug)">
                    <img :src="getImageUrl(item.image)" :alt="item.name" loading="lazy">

                    <div>
                        <small>@{{ item.category?.name || 'KOLEKSI' }}</small>
                        <h3>@{{ item.name }}</h3>
                        <b>@{{ formatRupiah(item.price) }}</b>
                    </div>
                </a>
            </div>
        </section>


        <!-- Informasi Belanja Offline -->
        <section class="pd-offline-banner"
            style="margin-top: 40px; background: var(--cream, #f8f3eb); border: 1px solid var(--line, #ece8e1); border-radius: 16px; padding: 30px; display: flex; align-items: center; justify-content: space-between; gap: 20px; flex-wrap: wrap;">
            <div>
                <span
                    style="color: var(--accent-gold-dark, #8e6129); font-size: 11px; font-weight: 700; letter-spacing: 2px; display: block; margin-bottom: 6px;">MAU
                    BELANJA OFFLINE?</span>
                <h2
                    style="font-family: Georgia, serif; font-size: 24px; color: var(--primary, #183332); margin: 0 0 8px;">
                    Kunjungi Toko Abati Store</h2>
                <p style="margin: 0; color: #555; font-size: 14px;">Lihat langsung koleksi kami, rasakan bahannya, dan
                    coba ukuran yang tersedia.</p>
            </div>
            <div style="display: flex; gap: 10px;">
                <a href="https://www.google.com/maps/dir/?api=1&destination=-3.9986246,122.5113538" target="_blank"
                    rel="noopener"
                    style="background: var(--primary, #183332); color: #fff; padding: 10px 18px; border-radius: 10px; font-size: 13px; font-weight: 600; text-decoration: none;">📍
                    Lihat Lokasi</a>
            </div>
        </section>
        <!-- Floating WhatsApp Button (Menggantikan Sticky Bar Mobile) -->
        <a class="pd-floating-wa" href="https://wa.me/6285241800852" target="_blank" rel="noopener"
            aria-label="Chat WhatsApp">
            <svg viewBox="0 0 24 24">
                <path d="M20 11.5A8.5 8.5 0 0 1 7.4 19L3 20.5L4.5 16.3A8.5 8.5 0 1 1 20 11.5Z" />
            </svg>
        </a>


    </div>
</main>


@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {

        /* =========================================
           1. MODAL PANDUAN UKURAN
        ========================================= */

        function openSizeModal() {
            const modal = document.getElementById('pdSizeModal');

            if (!modal) {
                console.error('Modal panduan ukuran tidak ditemukan.');
                return;
            }

            modal.classList.add('is-open');
            modal.setAttribute('aria-hidden', 'false');
            document.body.classList.add('pd-modal-open');
        }

        function closeSizeModal() {
            const modal = document.getElementById('pdSizeModal');

            if (!modal) return;

            modal.classList.remove('is-open');
            modal.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('pd-modal-open');
        }


        /* =========================================
           2. SALIN TAUTAN PRODUK
        ========================================= */

        async function copyProductLink() {
            const status = document.getElementById('pdCopyStatus');
            const button = document.getElementById('pdCopyLink');
            const url = window.location.href;

            if (!status) return;

            status.textContent = '';

            if (button) {
                button.disabled = true;
            }

            try {
                // Metode utama: Clipboard API
                if (navigator.clipboard && window.isSecureContext) {
                    await navigator.clipboard.writeText(url);
                } else {
                    // Metode alternatif untuk browser/konteks yang tidak mendukung Clipboard API
                    const textarea = document.createElement('textarea');

                    textarea.value = url;
                    textarea.setAttribute('readonly', '');
                    textarea.style.position = 'fixed';
                    textarea.style.left = '-9999px';
                    textarea.style.top = '0';

                    document.body.appendChild(textarea);

                    textarea.focus();
                    textarea.select();
                    textarea.setSelectionRange(0, textarea.value.length);

                    const success = document.execCommand('copy');

                    document.body.removeChild(textarea);

                    if (!success) {
                        throw new Error('Gagal menyalin tautan.');
                    }
                }

                status.textContent = 'Tautan berhasil disalin!';

            } catch (error) {
                console.error('Gagal menyalin tautan:', error);
                status.textContent = 'Gagal menyalin. Silakan salin dari alamat browser.';

            } finally {
                if (button) {
                    button.disabled = false;
                }
            }
        }


        /* =========================================
           3. BAGIKAN PRODUK KE WHATSAPP
        ========================================= */

        function shareProductWhatsApp(link) {
            const productTitle =
                document.querySelector('#productDetailApp h1')?.textContent.trim() ||
                document.title;

            const productUrl = window.location.href;

            const message =
                'Assalamu’alaikum, saya ingin berbagi produk ini:\n\n' +
                productTitle + '\n' +
                productUrl;

            link.href = 'https://wa.me/?text=' + encodeURIComponent(message);
        }


        /* =========================================
           4. GALERI FOTO DAN VIDEO PRODUK
        ========================================= */

        let currentMedia = 0;

        function showMedia(index) {
            const thumbs = Array.from(
                document.querySelectorAll('.pd-thumb')
            );

            if (!thumbs.length) return;

            const mainImg = document.getElementById('pdMainImage');
            const mainVid = document.getElementById('pdMainVideo');
            const vidSource = document.getElementById('pdVideoSource');
            const count = document.getElementById('pdImageCount');

            if (!mainImg || !mainVid || !vidSource) return;

            currentMedia = (index + thumbs.length) % thumbs.length;

            const targetThumb = thumbs[currentMedia];
            const mediaType = targetThumb.dataset.type;

            if (mediaType === 'video') {
                const videoUrl = targetThumb.dataset.videoUrl;

                if (!videoUrl) return;

                mainImg.style.display = 'none';
                mainVid.style.display = 'block';

                vidSource.src = videoUrl;
                mainVid.load();

            } else {
                const thumbnailImage = targetThumb.querySelector('img');

                if (!thumbnailImage) return;

                mainVid.pause();
                mainVid.style.display = 'none';

                mainImg.style.display = 'block';
                mainImg.src = thumbnailImage.src;
            }

            if (count) {
                count.textContent = (currentMedia + 1) + '/' + thumbs.length;
            }

            thumbs.forEach(function(thumb, index) {
                thumb.classList.toggle('is-active', index === currentMedia);
            });
        }


        /* =========================================
           5. EVENT DELEGATION
           Berlaku juga untuk elemen yang muncul
           belakangan melalui Vue v-if
        ========================================= */

        document.addEventListener('click', function(event) {

            const target = event.target;

            if (!(target instanceof Element)) return;


            // Buka panduan ukuran
            if (target.closest('#pdOpenSizeGuide')) {
                event.preventDefault();
                openSizeModal();
                return;
            }


            // Tutup panduan ukuran
            if (target.closest('[data-close-size]')) {
                event.preventDefault();
                closeSizeModal();
                return;
            }


            // Salin tautan produk
            const copyButton = target.closest('#pdCopyLink');

            if (copyButton) {
                event.preventDefault();
                copyProductLink();
                return;
            }


            // Bagikan ke WhatsApp
            const whatsappButton = target.closest('#pdShareWa');

            if (whatsappButton) {
                shareProductWhatsApp(whatsappButton);
                return;
            }


            // Thumbnail galeri
            const thumb = target.closest('.pd-thumb');

            if (thumb) {
                const index = Number(thumb.dataset.index);

                if (!Number.isNaN(index)) {
                    showMedia(index);
                }

                return;
            }


            // Foto sebelumnya
            if (target.closest('.pd-prev')) {
                showMedia(currentMedia - 1);
                return;
            }


            // Foto berikutnya
            if (target.closest('.pd-next')) {
                showMedia(currentMedia + 1);
                return;
            }


            // Tab informasi produk
            const tab = target.closest('.pd-tab');

            if (tab) {
                const name = tab.dataset.tab;

                document.querySelectorAll('.pd-tab').forEach(function(item) {
                    const active = item === tab;

                    item.classList.toggle('is-active', active);
                    item.setAttribute(
                        'aria-selected',
                        active ? 'true' : 'false'
                    );
                });

                document.querySelectorAll('.pd-tab-panel').forEach(function(panel) {
                    panel.hidden = panel.id !== 'pdTab-' + name;
                    panel.classList.toggle('is-active', !panel.hidden);
                });
            }

        });


        /* =========================================
           6. TUTUP MODAL DENGAN TOMBOL ESCAPE
        ========================================= */

        document.addEventListener('keydown', function(event) {

            if (event.key === 'Escape') {
                const modal = document.getElementById('pdSizeModal');

                if (modal && modal.classList.contains('is-open')) {
                    closeSizeModal();
                }
            }

        });

    });
</script>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>

<script>
    new Vue({
        el: '#productDetailApp',
        delimiters: ['@{{', '}}'],

        data() {
            return {
                product: {},
                loading: true,
                error: '',
                relatedProducts: [],
                relatedLoading: false,
                allSizes: [],
                sizeGuide: null,

            };
        },

        mounted() {
            this.fetchProduct();
            this.fetchRelatedProducts();
            this.fetchSizes();
        },

        methods: {

            orderViaWhatsApp() {
                const phone = '6285241800852';

                const productName = this.product?.name || 'produk ini';
                const productUrl = window.location.href;

                const message =
                    `Assalamu'alaikum, Kak. Saya mau pesan produk ${productName}. Apa masih ada?\n\n` +
                    `Link produk: ${productUrl}`;

                const whatsappUrl =
                    `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;

                window.open(whatsappUrl, '_blank');
            },
            requestShopeeLink() {
                const phone = '6285241800852';

                const productName = this.product?.name || 'produk ini';
                const productUrl = window.location.href;

                const message =
                    `Assalamu'alaikum, Kak. Saya mau request link shopee untuk produk ${productName} karena saya dari luar kendari / Luar Sulawesi Tenggara?\n\n` +
                    `Link produk: ${productUrl}`;

                const whatsappUrl =
                    `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;

                window.open(whatsappUrl, '_blank');
            },

            isSizeAvailable(sizeId) {
                const stocks = this.product?.stocks || [];

                return stocks.some(item =>
                    String(item.size_id) === String(sizeId) &&
                    Number(item.stock) > 0
                );
            },
            async fetchSizes() {
                try {
                    const response = await fetch('/api/sizes');
                    if (!response.ok) throw new Error('Gagal mengambil ukuran');

                    this.allSizes = await response.json();
                } catch (error) {
                    console.error('Gagal memuat daftar ukuran:', error);
                }
            },
            async fetchRelatedProducts() {
                const productId = @json($productId);

                this.relatedLoading = true;

                try {
                    const response = await fetch(
                        @json(url('/api/products')) + '?in_stock=1'
                    );

                    if (!response.ok) {
                        throw new Error('Gagal mengambil produk terkait');
                    }

                    const data = await response.json();

                    // Mendukung respons array langsung maupun { data: [...] }
                    const products = Array.isArray(data) ?
                        data :
                        (Array.isArray(data.data) ? data.data : []);

                    // Keluarkan produk yang sedang dibuka
                    const currentId = String(@json($productId));

                    const candidates = products.filter(product =>
                        String(product.id) !== currentId &&
                        product.slug
                    );

                    // Acak urutan produk
                    for (let i = candidates.length - 1; i > 0; i--) {
                        const j = Math.floor(Math.random() * (i + 1));
                        [candidates[i], candidates[j]] = [candidates[j], candidates[i]];
                    }

                    // Tampilkan maksimal 6 produk
                    this.relatedProducts = candidates.slice(0, 6);

                } catch (error) {
                    console.error('Produk terkait gagal dimuat:', error);
                    this.relatedProducts = [];
                } finally {
                    this.relatedLoading = false;
                }
            },

            productDetailUrl(slug) {
                const template = @json(route('produk.detail', ['slug' => '__SLUG__']));

                return template.replace(
                    '__SLUG__',
                    encodeURIComponent(slug)
                );
            },


            async fetchProduct() {
                try {
                    const slug = @json($productSlug);

                    const template = @json(route('api.produk.show', [
                        'slug' => '__SLUG__'
                    ]));

                    const url = template.replace(
                        '__SLUG__',
                        encodeURIComponent(slug)
                    );

                    const response = await fetch(url);

                    if (!response.ok) {
                        throw new Error('Produk tidak ditemukan.');
                    }

                    const data = await response.json();
                    this.product = data.data || data;
                    this.sizeGuide = data.size_guide || null;

                } catch (error) {
                    console.error('Gagal mengambil detail produk:', error);

                    this.error = error.message === 'Produk tidak ditemukan.' ?
                        'Produk yang Anda cari tidak ditemukan atau sudah tidak tersedia.' :
                        'Produk gagal dimuat. Silakan coba kembali.';

                    alert(this.error);

                    window.location.href = @json(route('katalog'));
                } finally {
                    this.loading = false;
                }
            },
            isProductOutOfStock() {
                const stocks = this.product?.stocks || [];

                // Jika tidak ada data stok, jangan langsung menyimpulkan habis.
                if (stocks.length === 0) {
                    return false;
                }

                // Habis jika seluruh ukuran memiliki stok 0 atau kurang.
                return stocks.every(item => Number(item.stock) <= 0);
            },
            getImageUrl(path) {
                if (!path) return '/images/no-image.png';

                if (/^https?:\/\//i.test(path)) {
                    return path;
                }

                return '/storage/' + path.replace(/^\/?storage\//, '');
            },

            formatRupiah(value) {
                return new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    maximumFractionDigits: 0
                }).format(Number(value) || 0);
            },


            getDiscountPercent(product) {
                return window.getDiscountPercent(product);
            },

            getDiscountPrice(product) {
                return window.getDiscountPrice(product);
            },

        }
    });
</script>

@endpush