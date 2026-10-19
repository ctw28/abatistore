<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Koko Premium Modern — Abati Store</title>
    <link rel="stylesheet" href="{{ asset('css/newweb/01-base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newweb/02-header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newweb/03-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newweb/07-footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newweb/08-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newweb/09-product-detail.css') }}">
</head>

<body>
    <div id="app">
        <header>
            <div class="wrap head">
                <button class="menu" aria-label="Buka menu kategori" type="button"><svg viewBox="0 0 24 24">
                        <path d="M4 6H20M4 12H20M4 18H20" />
                    </svg></button>
                <a class="logo-img" href="/" aria-label="Abati Store"><img src="{{ asset('logo-abati-store.png') }}"
                        alt="Abati Store"></a>
                <nav class="desktop-nav"><a href="/">Beranda</a><a href="/#kategori">Kategori</a><a
                        href="/#koleksi">Koleksi</a><a href="/#offline">Toko Offline</a></nav>
                <div class="search desktop-search"><svg viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="6.5"></circle>
                        <path d="M16 16L20 20"></path>
                    </svg><input placeholder="Cari baju koko, kurta..." aria-label="Cari produk"></div>
                <button class="mobile-search-toggle" type="button" aria-label="Buka pencarian"
                    aria-expanded="false"><svg viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="6.5"></circle>
                        <path d="M16 16L20 20"></path>
                    </svg></button>
            </div>
            <div class="mobile-menu">
                <div class="mobile-menu-head"><strong>Kategori</strong><button class="close-menu"
                        type="button">×</button></div><a href="/#cat-koko">Baju Koko</a><a
                    href="/#cat-kurta">Kurta</a><a href="/#cat-jubah">Jubah</a><a href="/#cat-jaket">Jaket</a><a
                    href="/#cat-oversize">Oversize</a><a href="/#offline">Toko Abati Store</a>
            </div>
            <div class="menu-backdrop"></div>
        </header>

        <main class="pd-page">
            <div class="pd-container">
                <nav class="pd-breadcrumb"><a href="/">Beranda</a><span>/</span><a href="/#cat-koko">Baju
                        Koko</a><span>/</span><span>Koko Premium Modern</span></nav>
                <section class="pd-main">
                    <div class="pd-gallery">
                        <div class="pd-main-image"><img id="pdMainImage"
                                src="https://abatistore.com/storage/products/a2lf83GncdoNeJbhy3wd5B7RqLezg5FEk8eenEfS.webp"
                                alt="Koko Premium Modern"><span class="pd-image-count"
                                id="pdImageCount">1/3</span><button class="pd-gallery-arrow pd-prev"
                                aria-label="Foto sebelumnya">‹</button><button class="pd-gallery-arrow pd-next"
                                aria-label="Foto berikutnya">›</button></div>
                        <div class="pd-thumbnails">
                            <button class="pd-thumb is-active" data-index="0" aria-label="Foto 1"><img
                                    src="https://abatistore.com/storage/products/a2lf83GncdoNeJbhy3wd5B7RqLezg5FEk8eenEfS.webp"
                                    alt=""></button>
                            <button class="pd-thumb" data-index="1" aria-label="Foto 2"><img
                                    src="https://abatistore.com/storage/products/5Qcc9Cf0ALYgv2pie5ttlqy0PcrGQD6wtkKUGjVK.webp"
                                    alt=""></button>
                            <button class="pd-thumb" data-index="2" aria-label="Foto 3"><img
                                    src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp"
                                    alt=""></button>
                        </div>
                        <div class="pd-benefits">
                            <div><i>✳</i><span><b>Bahan pilihan</b><small>Nyaman dipakai</small></span></div>
                            <div><i>◇</i><span><b>Detail rapi</b><small>Perhatikan detail</small></span></div>
                            <div><i>↻</i><span><b>Easy care</b><small>Mudah dirawat</small></span></div>
                        </div>
                    </div>
                    <div class="pd-info">
                        <div class="pd-badges"><span class="pd-category">BAJU KOKO</span><span
                                class="pd-discount">Diskon 17%</span></div>
                        <h1>Koko Premium Modern<br>Lengan Panjang</h1>
                        <p class="pd-code">Kode produk: FK-001</p>
                        <div class="pd-price-row"><strong class="pd-price">Rp329.000</strong><del>Rp399.000</del><span
                                class="pd-discount-small">-17%</span></div>
                        <p class="pd-short-desc">Koko modern dengan desain minimalis yang cocok untuk ibadah, bekerja,
                            kajian, dan acara formal.</p>
                        <div class="pd-occasion">
                            <h2>Cocok untuk</h2>
                            <div class="pd-chips">
                                <span>Kantor</span><span>Kajian</span><span>Jumat</span><span>Kondangan</span>
                            </div>
                        </div>
                        <div class="pd-size-section">
                            <div class="pd-size-heading">
                                <h2>Pilih ukuran</h2><button type="button" id="pdOpenSizeGuide">Panduan ukuran
                                    ↗</button>
                            </div>
                            <div class="pd-sizes"><button data-size="S">S</button><button
                                    data-size="M">M</button><button data-size="L">L</button><button
                                    data-size="XL">XL</button><button data-size="XXL">XXL</button><button
                                    data-size="XXXL">XXXL</button></div>
                            <p id="pdSizeHelp">Pilih ukuran untuk dicantumkan pada pesan WhatsApp.</p>
                        </div>
                        <div class="pd-actions">
                            <a class="pd-btn pd-btn-wa" id="pdWhatsapp" href="https://wa.me/6285241800852"
                                target="_blank" rel="noopener">☏ Pesan via WhatsApp</a>
                            <a class="pd-btn pd-btn-shopee" href="https://shopee.co.id/" target="_blank"
                                rel="noopener"><b class="pd-shopee-mark">S</b> Minta via Shopee</a>
                        </div>
                        <section class="pd-shipping">
                            <div class="pd-shipping-promo"><span class="pd-shipping-icon">↗</span>
                                <div><b>Gratis ongkir hingga Rp10.000</b><small>Subsidi sesuai tarif dan wilayah
                                        layanan.</small></div>
                            </div>
                            <details class="pd-shipping-details">
                                <summary>Cek tabel ongkir per kecamatan <span>⌄</span></summary>
                                <p class="pd-shipping-note">Tarif berikut contoh. Ganti sesuai tarif yang ditentukan
                                    Abati Store.</p>
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
                                </div><small class="pd-shipping-footnote">Subsidi maksimal Rp10.000. Admin mengonfirmasi
                                    ongkir sebelum pembayaran.</small>
                            </details>
                        </section>
                        <div class="pd-share"><span>Bagikan:</span><a id="pdShareWa" href="#" target="_blank"
                                rel="noopener">WhatsApp</a><button id="pdCopyLink" type="button">Salin
                                tautan</button><small id="pdCopyStatus" aria-live="polite"></small></div>
                    </div>
                </section>

                <section class="pd-tabs-section">
                    <div class="pd-tabs" role="tablist"><button class="pd-tab is-active" data-tab="description"
                            role="tab" aria-selected="true">Deskripsi</button><button class="pd-tab" data-tab="realpic"
                            role="tab" aria-selected="false">Real Pict</button><button class="pd-tab" data-tab="video"
                            role="tab" aria-selected="false">Video</button></div>
                    <div class="pd-tab-panel is-active" id="pdTab-description" role="tabpanel">
                        <div>
                            <h2>Deskripsi produk</h2>
                            <p>Koko dengan desain modern dan tampilan rapi untuk menemani aktivitas harian. Periksa
                                detail bahan, potongan, dan ukuran melalui foto produk atau tanyakan langsung kepada
                                admin sebelum memesan.</p>
                            <ul>
                                <li><b>Kategori:</b> Baju koko</li>
                                <li><b>Penggunaan:</b> Ibadah, kerja, kajian, dan acara formal</li>
                                <li><b>Perawatan:</b> Ikuti petunjuk pada label produk</li>
                            </ul>
                        </div>
                        <div class="pd-detail-highlights">
                            <article><b>01 — Model modern</b><small>Tampilan rapi dan sederhana</small></article>
                            <article><b>02 — Pilihan aktivitas</b><small>Untuk kegiatan formal maupun ibadah</small>
                            </article>
                            <article><b>03 — Bantuan ukuran</b><small>Tanyakan ukuran sebelum transaksi</small>
                            </article>
                        </div>
                    </div>
                    <div class="pd-tab-panel" id="pdTab-realpic" role="tabpanel" hidden>
                        <h2>Foto asli produk</h2>
                        <p>Ganti gambar contoh berikut dengan foto asli stok Abati Store.</p>
                        <div class="pd-real-gallery"><img
                                src="https://abatistore.com/storage/products/a2lf83GncdoNeJbhy3wd5B7RqLezg5FEk8eenEfS.webp"
                                alt="Foto produk 1"><img
                                src="https://abatistore.com/storage/products/5Qcc9Cf0ALYgv2pie5ttlqy0PcrGQD6wtkKUGjVK.webp"
                                alt="Foto produk 2"><img
                                src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp"
                                alt="Foto produk 3"></div>
                    </div>
                    <div class="pd-tab-panel" id="pdTab-video" role="tabpanel" hidden>
                        <h2>Video produk</h2>
                        <div class="pd-video-placeholder"><span>▶</span>
                            <div><b>Video produk belum ditambahkan</b>
                                <p>Tambahkan URL video produk asli ketika tersedia.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="pd-howto" id="cara-belanja">
                    <div class="pd-section-heading"><span>MUDAH DAN PRAKTIS</span>
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

                <section class="pd-related">
                    <div class="pd-section-heading pd-related-heading">
                        <div><span>JELAJAHI LAGI</span>
                            <h2>Produk terkait</h2>
                        </div><a href="/#rekomendasi">Lihat semua →</a>
                    </div>
                    <div class="pd-related-grid">
                        <a class="pd-product-card" href="#"><img
                                src="https://abatistore.com/storage/products/5Qcc9Cf0ALYgv2pie5ttlqy0PcrGQD6wtkKUGjVK.webp"
                                alt="Koko lengan pendek">
                            <div><small>BAJU KOKO</small>
                                <h3>Koko Premium Lengan Pendek</h3><b>Rp299.000</b>
                            </div>
                        </a>
                        <a class="pd-product-card" href="#"><img
                                src="https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp"
                                alt="Kemeja pilihan">
                            <div><small>KEMEJA</small>
                                <h3>Kemeja pilihan</h3><b>Lihat harga</b>
                            </div>
                        </a>
                        <a class="pd-product-card" href="#"><img
                                src="https://abatistore.com/storage/products/a2lf83GncdoNeJbhy3wd5B7RqLezg5FEk8eenEfS.webp"
                                alt="Koko pilihan">
                            <div><small>KOLEKSI</small>
                                <h3>Koko pilihan lainnya</h3><b>Lihat produk</b>
                            </div>
                        </a>
                        <a class="pd-product-card" href="#"><img
                                src="https://abatistore.com/storage/products/5Qcc9Cf0ALYgv2pie5ttlqy0PcrGQD6wtkKUGjVK.webp"
                                alt="Koleksi pilihan">
                            <div><small>KOLEKSI</small>
                                <h3>Koleksi pilihan</h3><b>Lihat produk</b>
                            </div>
                        </a>
                    </div>
                </section>
            </div>
        </main>

        <footer class="pd-footer">
            <div class="pd-footer-inner">
                <div><a href="/" class="pd-footer-brand">abati <small>STORE</small></a>
                    <p>Belanja pakaian pilihan lebih mudah dari rumah.</p>
                </div>
                <div><b>Navigasi</b><a href="/">Beranda</a><a href="/#kategori">Kategori</a><a href="/#offline">Toko
                        offline</a></div>
                <div><b>Layanan</b><a href="/#seragam">Pesan seragam</a><a href="#pd-shipping">Informasi
                        pengiriman</a><a href="#cara-belanja">Cara belanja</a></div>
                <div><b>Hubungi kami</b><a href="https://wa.me/6285241800852">WhatsApp Abati Store</a><span>Kendari,
                        Sulawesi Tenggara</span></div>
            </div>
            <div class="pd-copyright">© 2026 Abati Store. Hak cipta dilindungi.</div>
        </footer>

        <div class="pd-mobile-sticky">
            <div><small>Harga produk</small><b>Rp329.000</b></div><a id="pdStickyWhatsapp"
                href="https://wa.me/6285241800852" target="_blank" rel="noopener">Chat WhatsApp</a>
        </div>

        <div class="pd-modal" id="pdSizeModal" aria-hidden="true">
            <div class="pd-modal-backdrop" data-close-size></div>
            <section class="pd-modal-card" role="dialog" aria-modal="true" aria-labelledby="pdSizeTitle"><button
                    class="pd-modal-close" type="button" data-close-size aria-label="Tutup">×</button><span
                    class="pd-modal-eyebrow">BANTUAN UKURAN</span>
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
                </div><small>Belum yakin? Chat admin untuk dibantu memilih ukuran.</small>
            </section>
        </div>
    </div>
    <script>
        (function() {
            const images = [
                'https://abatistore.com/storage/products/a2lf83GncdoNeJbhy3wd5B7RqLezg5FEk8eenEfS.webp',
                'https://abatistore.com/storage/products/5Qcc9Cf0ALYgv2pie5ttlqy0PcrGQD6wtkKUGjVK.webp',
                'https://abatistore.com/storage/products/C9gXGILqZYjLaCMoAxuTnsfZvuHC8qb165uVTDPv.webp'
            ];
            let current = 0,
                size = '';
            const main = document.getElementById('pdMainImage'),
                count = document.getElementById('pdImageCount');
            const thumbs = [...document.querySelectorAll('.pd-thumb')];

            function show(i) {
                current = (i + images.length) % images.length;
                main.src = images[current];
                count.textContent = (current + 1) + '/' + images.length;
                thumbs.forEach((t, n) => t.classList.toggle('is-active', n === current));
            }
            thumbs.forEach(t => t.addEventListener('click', () => show(+t.dataset.index)));
            document.querySelector('.pd-prev').addEventListener('click', () => show(current - 1));
            document.querySelector('.pd-next').addEventListener('click', () => show(current + 1));
            const product = 'Koko Premium Modern Lengan Panjang',
                phone = '6285241800852';

            function updateWA() {
                const msg = "Assalamu'alaikum Abati Store, saya ingin pesan " + product + (size ? ", ukuran " + size :
                    "") + ". Mohon konfirmasi stok dan ongkir.";
                const url = 'https://wa.me/' + phone + '?text=' + encodeURIComponent(msg);
                document.getElementById('pdWhatsapp').href = url;
                document.getElementById('pdStickyWhatsapp').href = url;
            }
            document.querySelectorAll('.pd-sizes button').forEach(b => b.addEventListener('click', () => {
                size = b.dataset.size;
                document.querySelectorAll('.pd-sizes button').forEach(x => x.classList.toggle('is-selected',
                    x === b));
                document.getElementById('pdSizeHelp').textContent = 'Ukuran dipilih: ' + size;
                updateWA();
            }));
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
            document.addEventListener('keydown', e => {
                if (e.key === 'Escape') {
                    modal.classList.remove('is-open');
                    modal.setAttribute('aria-hidden', 'true');
                    document.body.classList.remove('pd-modal-open');
                }
            });
            updateWA();
        })();
    </script>
</body>

</html>