@extends('layouts')

@section('title', 'Koko Premium Modern — Abati Store')

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

$seoUrl = route('produk.detail', ['id' => $productId]);
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
</style>
@endpush

@section('content')
<main class="pd-page" id="productDetailApp">
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
                <div class="pd-badges">
                    <span class="pd-category"> @{{ product.category ? product.category.name : 'Produk' }}
                    </span>
                    <span class="pd-discount">Diskon -@{{ getDiscountPercent(product) }}%
                    </span></span>
                </div>

                <h1>@{{ product.name || 'Memuat produk...' }}</h1>

                <div class="pd-price-row">
                    <strong class="pd-price">@{{ formatRupiah(getDiscountPrice(product)) }}</strong>
                    <del>@{{ formatRupiah(product.price) }}</del>
                    <span class="pd-discount-small"> -@{{ getDiscountPercent(product) }}%
                    </span></span>
                </div>

                <p class="pd-short-desc"> @{{ product.description || 'Hubungi admin untuk informasi produk.' }}
                </p>

                <!-- Penjelasan Penggunaan (Centang Hijau) -->
                <div class="pd-occasion">
                    <h2>Cocok untuk</h2>
                    <div class="pd-occasion-list">
                        <span class="pd-occasion-item"><i>✓</i> Kantor</span>
                        <span class="pd-occasion-item"><i>✓</i> Kajian</span>
                        <span class="pd-occasion-item"><i>✓</i> Sholat Jumat</span>
                        <span class="pd-occasion-item"><i>✓</i> Kondangan / Acara Formal</span>
                    </div>
                </div>

                <!-- Penjelasan Ukuran Tersedia (Statis / Informasi Only) -->

                <div class="pd-size-section">
                    <div class="pd-size-heading">
                        <h2>Ukuran tersedia</h2>
                        <button type="button" id="pdOpenSizeGuide">
                            Panduan ukuran ↗
                        </button>
                    </div>

                    <div v-if="product && product.stocks" class="pd-size-badges">
                        <span v-for="size in allSizes" :key="size.id" class="size-badge"
                            :class="isSizeAvailable(size.id) ? 'is-ready' : 'is-empty'" v-if="size.name!='All Size'">
                            @{{ size.name }}
                        </span>
                    </div>

                    <p v-if="product && product.stocks" id="pdSizeHelp"
                        style="margin-top: 8px; font-size: 12px; color: #888;">
                        Cek ketersediaan ukuran sebelum konfirmasi ke admin.
                    </p>
                </div>


                <!-- Tombol Utama Pesan via WA -->
                <div class="pd-actions" style="margin-top: 20px;">
                    <a class="pd-btn pd-btn-wa" href="#" @click.prevent="orderViaWhatsApp"
                        style="width: 100%; justify-content: center;">
                        ☏ Pesan via WhatsApp
                    </a>
                </div>

                <!-- Opsi Pembelian via Shopee (Luar Kendari) -->
                <div class="pd-shopee-wrapper">
                    <span class="pd-shopee-note">📍 Dari luar Kota Kendari? Anda dapat meminta/request link produk
                        melalui Shopee.</span>
                    <a class="pd-btn-shopee-subtle" href="https://shopee.co.id/" target="_blank" rel="noopener">
                        <span>🛍 Request via Shopee</span>
                    </a>
                </div>

                <!-- Bagian Pengiriman -->
                <section class="pd-shipping">
                    <div class="pd-shipping-promo">
                        <span class="pd-shipping-icon">↗</span>
                        <div>
                            <b>Gratis ongkir hingga Rp10.000</b>
                            <small>Subsidi sesuai tarif dan wilayah layanan.</small>
                        </div>
                    </div>
                    <details class="pd-shipping-details">
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
                    </details>
                </section>

                <!-- Tombol Bagikan dengan Ikon Ringkas -->
                <div class="pd-share">
                    <span>Bagikan:</span>
                    <a id="pdShareWa" href="#" target="_blank" rel="noopener" title="Bagikan ke WhatsApp"
                        aria-label="Bagikan ke WhatsApp">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                            <path d="M20 11.5A8.5 8.5 0 0 1 7.4 19L3 20.5L4.5 16.3A8.5 8.5 0 1 1 20 11.5Z" />
                        </svg>
                    </a>
                    <button id="pdCopyLink" type="button" title="Salin Tautan" aria-label="Salin Tautan">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
                        </svg>
                    </button>
                    <small id="pdCopyStatus" aria-live="polite"></small>
                </div>
            </div>
        </section>

        <!-- Tab Informasi (Deskripsi, Real Pict, Video) -->
        <section class="pd-tabs-section">
            <div class="pd-tabs" role="tablist">
                <button class="pd-tab is-active" data-tab="description" role="tab"
                    aria-selected="true">Deskripsi</button>
                <button class="pd-tab" data-tab="realpic" role="tab" aria-selected="false">Real Pict</button>
                <button class="pd-tab" data-tab="video" role="tab" aria-selected="false">Video</button>
            </div>
            <div class="pd-tab-panel is-active" id="pdTab-description" role="tabpanel">
                <div>
                    <h2>Deskripsi produk</h2>
                    <p>Koko dengan desain modern dan tampilan rapi untuk menemani aktivitas harian. Periksa detail
                        bahan, potongan, dan ukuran melalui foto produk atau tanyakan langsung kepada admin sebelum
                        memesan.</p>
                    <ul>
                        <li><b>Kategori:</b> Baju koko</li>
                        <li><b>Penggunaan:</b> Ibadah, kerja, kajian, dan acara formal</li>
                        <li><b>Perawatan:</b> Ikuti petunjuk pada label produk</li>
                    </ul>
                </div>
                <div class="pd-detail-highlights">
                    <article><b>01 — Model modern</b><small>Tampilan rapi dan sederhana</small></article>
                    <article><b>02 — Pilihan aktivitas</b><small>Untuk kegiatan formal maupun ibadah</small></article>
                    <article><b>03 — Bantuan ukuran</b><small>Tanyakan ukuran sebelum transaksi</small></article>
                </div>
            </div>
            <div class="pd-tab-panel" id="pdTab-realpic" role="tabpanel" hidden>
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
            </div>
        </section>

        <!-- Cara Belanja -->
        <section class="pd-howto" id="cara-belanja">
            <div class="pd-section-heading">
                <span>MUDAH DAN PRAKTIS</span>
                <h2>Belanja di Abati Store</h2>
                <p>Konfirmasi dulu supaya detail pesanan dan biaya pengiriman jelas.</p>
            </div>
            <div class="pd-howto-grid">
                <article><i>01</i>
                    <h3>Chat & konfirmasi</h3>
                    <p>Tanyakan stok, ukuran, dan detail produk kepada admin.</p>
                </article>
                <article><i>02</i>
                    <h3>Sepakati total</h3>
                    <p>Admin mengonfirmasi harga produk, subsidi, dan ongkir.</p>
                </article>
                <article><i>03</i>
                    <h3>Pesanan diproses</h3>
                    <p>Setelah kesepakatan, pesanan disiapkan untuk diantar atau dikirim.</p>
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
                    :href="productDetailUrl(item.id)">
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

    </div>
</main>

<!-- Floating WhatsApp Button (Menggantikan Sticky Bar Mobile) -->
<a class="pd-floating-wa" href="https://wa.me/6285241800852" target="_blank" rel="noopener" aria-label="Chat WhatsApp">
    <svg viewBox="0 0 24 24">
        <path d="M20 11.5A8.5 8.5 0 0 1 7.4 19L3 20.5L4.5 16.3A8.5 8.5 0 1 1 20 11.5Z" />
    </svg>
</a>

<!-- Modal Panduan Ukuran -->
<div class="pd-modal" id="pdSizeModal" aria-hidden="true">
    <div class="pd-modal-backdrop" data-close-size></div>
    <section class="pd-modal-card" role="dialog" aria-modal="true" aria-labelledby="pdSizeTitle">
        <button class="pd-modal-close" type="button" data-close-size aria-label="Tutup">×</button>
        <span class="pd-modal-eyebrow">BANTUAN UKURAN</span>
        <h2 id="pdSizeTitle">Panduan ukuran</h2>
        <p>Isi dengan ukuran resmi produk sebelum digunakan di situs.</p>
        <div class="pd-table-scroll">
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
        </div>
        <small>Belum yakin? Chat admin untuk dibantu memilih ukuran.</small>
    </section>
</div>
@endsection

@push('scripts')
<script>
    (function() {
        let current = 0;
        const mainImg = document.getElementById('pdMainImage');
        const mainVid = document.getElementById('pdMainVideo');
        const vidSource = document.getElementById('pdVideoSource');
        const count = document.getElementById('pdImageCount');
        const thumbs = [...document.querySelectorAll('.pd-thumb')];

        function showMedia(index) {
            current = (index + thumbs.length) % thumbs.length;
            const targetThumb = thumbs[current];
            const mediaType = targetThumb.dataset.type;

            if (mediaType === 'video') {
                mainImg.style.display = 'none';
                mainVid.style.display = 'block';
                vidSource.src = targetThumb.dataset.videoUrl;
                mainVid.load();
            } else {
                mainVid.pause();
                mainVid.style.display = 'none';
                mainImg.style.display = 'block';
                mainImg.src = targetThumb.querySelector('img').src;
            }

            count.textContent = (current + 1) + '/' + thumbs.length;
            thumbs.forEach((t, n) => t.classList.toggle('is-active', n === current));
        }

        thumbs.forEach(t => t.addEventListener('click', () => showMedia(+t.dataset.index)));
        document.querySelector('.pd-prev')?.addEventListener('click', () => showMedia(current - 1));
        document.querySelector('.pd-next')?.addEventListener('click', () => showMedia(current + 1));

        const product = 'Koko Premium Modern Lengan Panjang',
            phone = '6285241800852';
        const msg = "Assalamu'alaikum Abati Store, saya ingin pesan " + product + ". Mohon konfirmasi stok dan ongkir.";
        const url = 'https://wa.me/' + phone + '?text=' + encodeURIComponent(msg);
        document.getElementById('pdWhatsapp').href = url;

        document.getElementById('pdShareWa').href = 'https://wa.me/?text=' + encodeURIComponent(product + ' — ' +
            location.href);
        document.getElementById('pdCopyLink').addEventListener('click', async () => {
            const status = document.getElementById('pdCopyStatus');
            try {
                await navigator.clipboard.writeText(location.href);
                status.textContent = 'Tautan disalin';
            } catch (e) {
                status.textContent = 'Salin URL dari bilah alamat';
            }
        });

        // Tab Switcher
        document.querySelectorAll('.pd-tab').forEach(t => t.addEventListener('click', () => {
            const name = t.dataset.tab;
            document.querySelectorAll('.pd-tab').forEach(x => {
                x.classList.toggle('is-active', x === t);
                x.setAttribute('aria-selected', x === t ? 'true' : 'false');
            });
            document.querySelectorAll('.pd-tab-panel').forEach(p => {
                p.hidden = p.id !== 'pdTab-' + name;
                p.classList.toggle('is-active', !p.hidden);
            });
        }));

        // Modal Panduan Ukuran
        const modal = document.getElementById('pdSizeModal');
        document.getElementById('pdOpenSizeGuide').addEventListener('click', () => {
            modal.classList.add('is-open');
            modal.setAttribute('aria-hidden', 'false');
            document.body.classList.add('pd-modal-open');
        });

        document.querySelectorAll('[data-close-size]').forEach(x => x.addEventListener('click', () => {
            modal.classList.remove('is-open');
            modal.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('pd-modal-open');
        }));
    })();
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
                    const currentId = String(this.productId);

                    const candidates = products.filter(product =>
                        String(product.id) !== currentId
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

            productDetailUrl(id) {
                const template = @json(route('produk.detail', ['id' => '__ID__']));

                return template.replace('__ID__', encodeURIComponent(id));
            },

            async fetchProduct() {
                try {
                    const productId = @json($productId);

                    let url = @json(route('product.show', ['id' => '__ID__']));
                    url = url.replace('__ID__', productId);

                    const response = await fetch(url);

                    if (!response.ok) {
                        throw new Error('Produk tidak ditemukan.');
                    }

                    const data = await response.json();

                    // Mendukung API yang mengembalikan objek produk langsung
                    // maupun objek produk di dalam properti "data".
                    this.product = data.data || data;
                } catch (error) {
                    console.error('Gagal mengambil detail produk:', error);
                    this.error = 'Produk gagal dimuat. Silakan coba kembali.';
                } finally {
                    this.loading = false;
                }
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