@extends('layouts')

@section('title', 'Katalog Produk — Abati Store')

@push('styles')
<!-- CSS Khusus Katalog -->
<link rel="stylesheet" href="{{ asset('css/newweb/05-sections.css') }}">
<style>
/* CSS Spesifik Halaman Katalog & Filter Modern */
.catalog-page {
    padding: 30px 0 60px;
    background: #fff;
}

.catalog-header {
    margin-bottom: 24px;
}

.catalog-search-box {
    position: relative;
    margin-bottom: 16px;
}

.catalog-search-box input {
    width: 100%;
    height: 48px;
    padding: 0 16px 0 46px;
    border: 1px solid var(--line, #ece8e1);
    border-radius: 12px;
    font-size: 14px;
    outline: none;
    background: #faf9f6;
    transition: all 0.2s ease;
}

.catalog-search-box input:focus {
    border-color: var(--primary, #183332);
    background: #fff;
    box-shadow: 0 4px 12px rgba(24, 51, 50, 0.08);
}

.catalog-search-box svg {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    width: 20px;
    height: 20px;
    stroke: var(--muted, #6f6f6f);
}

/* Filter Chips (Kategori & Ukuran Horizontal Scroll) */
.filter-group {
    margin-bottom: 14px;
}

.filter-group label {
    font-size: 12px;
    font-weight: 700;
    color: var(--muted, #6f6f6f);
    text-transform: uppercase;
    letter-spacing: 1px;
    display: block;
    margin-bottom: 8px;
}

.filter-chips {
    display: flex;
    gap: 8px;
    overflow-x: auto;
    overflow-y: hidden;
    padding-bottom: 6px;
    scrollbar-width: none;
    /* Firefox */
}

.filter-chips::-webkit-scrollbar {
    display: none;
    /* Chrome/Safari */
}

.chip-btn {
    flex: 0 0 auto;
    padding: 8px 16px;
    border: 1px solid var(--line, #ece8e1);
    border-radius: 20px;
    background: #fff;
    color: var(--text, #222);
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
}

.chip-btn:hover {
    border-color: var(--primary, #183332);
}

.chip-btn.is-active {
    background: var(--primary, #183332);
    color: #fff;
    border-color: var(--primary, #183332);
}

/* Kartu Sisipan Rekomendasi (Gaya Alternatif 3 di tengah produk) */
.interleaved-rec-card {
    grid-column: 1 / -1;
    /* Membentang penuh di grid */
    background: var(--cream, #f8f3eb);
    border: 1px solid var(--line, #ece8e1);
    border-radius: 14px;
    padding: 24px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    margin: 10px 0;
}

.interleaved-rec-info small {
    color: var(--accent-gold-dark, #8e6129);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
    display: block;
    margin-bottom: 4px;
}

.interleaved-rec-info h3 {
    font-family: Georgia, serif;
    font-size: 20px;
    color: var(--primary, #183332);
    margin: 0 0 6px;
}

.interleaved-rec-info p {
    margin: 0;
    color: #555;
    font-size: 13px;
}

.interleaved-rec-btn {
    background: var(--primary, #183332);
    color: #fff;
    padding: 10px 18px;
    border-radius: 10px;
    font-size: 12px;
    font-weight: 600;
    border: none;
    cursor: pointer;
    white-space: nowrap;
    transition: background 0.2s ease;
}

.interleaved-rec-btn:hover {
    background: var(--primary-hover, #264c4a);
}

/* Tombol Load More */
.load-more-wrap {
    text-align: center;
    margin-top: 40px;
}

.load-more-btn {
    background: transparent;
    color: var(--primary, #183332);
    border: 1px solid var(--primary, #183332);
    padding: 12px 32px;
    border-radius: 10px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
}

.load-more-btn:hover {
    background: var(--primary, #183332);
    color: #fff;
}

/* Responsif Mobile */
@media (max-width: 767px) {
    .interleaved-rec-card {
        flex-direction: column;
        align-items: flex-start;
        padding: 18px;
    }

    .interleaved-rec-btn {
        width: 100%;
        text-align: center;
    }
}
</style>
@endpush

@section('content')
<main class="catalog-page" id="catalogApp">
    <div class="wrap">

        <!-- Header Katalog & Search/Filter -->
        <div class="catalog-header">
            <div style="margin-bottom: 16px;">
                <span
                    style="color: var(--accent-gold-dark, #8e6129); font-size: 11px; font-weight: 700; letter-spacing: 2px; display: block; margin-bottom: 4px;">JELAJAHI
                    KOLEKSI</span>
                <h2>Katalog Produk Abati Store</h2>
            </div>

            <!-- Input Pencarian -->
            <div class="catalog-search-box">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <input type="text" v-model="searchQuery" placeholder="Cari baju koko, kurta, jubah, kaos..."
                    aria-label="Cari produk">
            </div>

            <!-- Filter Chips Kategori -->
            <div class="filter-group">
                <label>Kategori</label>
                <div class="filter-chips">
                    <button class="chip-btn" :class="{ 'is-active': selectedCategory === '' }"
                        @click="selectedCategory = ''">Semua Kategori</button>
                    <button class="chip-btn" v-for="cat in categories" :key="cat.id"
                        :class="{ 'is-active': selectedCategory === cat.id }" @click="selectedCategory = cat.id">
                        @{{ cat.name }}
                    </button>
                </div>
            </div>

            <!-- Filter Chips Ukuran -->
            <div class="filter-group">
                <label>Ukuran Tersedia</label>
                <div class="filter-chips">
                    <button class="chip-btn" :class="{ 'is-active': selectedSize === '' }"
                        @click="selectedSize = ''">Semua Ukuran</button>
                    <button class="chip-btn" v-for="sz in ['S', 'M', 'L', 'XL', 'XXL', 'XXXL']" :key="sz"
                        :class="{ 'is-active': selectedSize === sz }" @click="selectedSize = sz">
                        @{{ sz }}
                    </button>
                </div>
            </div>
        </div>

        <!-- Daftar Produk Grid dengan Sisipan Rekomendasi (Alternatif 3) -->
        <div class="products" style="margin-top: 24px;">
            <template v-for="(product, index) in paginatedProducts" :key="product.id">

                <!-- Kartu Produk Biasa -->
                <article class="product" @click="goToDetail(product)" style="cursor: pointer;">
                    <div class="photo">
                        <img :src="getImageUrl(product.image)" :alt="product.name" loading="lazy">
                        <span class="discount-badge">@{{ getDiscountPercent(product) }}% OFF</span>
                    </div>
                    <strong>@{{ product.name }}</strong>
                    <div class="price">
                        <del>@{{ formatRupiah(product.price) }}</del>
                        <b>@{{ formatRupiah(getDiscountPrice(product)) }}</b>
                    </div>
                </article>

                <!-- Kartu Sisipan Rekomendasi (Muncul di sela-sela produk, misal setelah produk ke-4) -->
                <div v-if="index === 3" class="interleaved-rec-card">
                    <div class="interleaved-rec-info">
                        <small>REKOMENDASI KHUSUS</small>
                        <h3>Butuh Pakaian untuk Sholat Jumat & Kajian?</h3>
                        <p>Temukan pilihan baju koko terbaik yang adem, sopan, dan tampil profesional.</p>
                    </div>
                    <button class="interleaved-rec-btn" @click="selectedCategory = 1">Lihat Koleksi Koko →</button>
                </div>

            </template>
        </div>

        <!-- Jika Produk Tidak Ditemukan -->
        <div v-if="paginatedProducts.length === 0" style="text-align: center; padding: 60px 0; color: var(--muted);">
            <p style="font-size: 16px; font-weight: 600;">Produk tidak ditemukan.</p>
            <p style="font-size: 13px;">Coba ubah kata kunci pencarian atau reset filter Anda.</p>
        </div>

        <!-- Tombol Muat Lebih Banyak (Load More) -->
        <div class="load-more-wrap" v-if="visibleLimit < filteredProducts.length">
            <button class="load-more-btn" @click="loadMore">Muat Lebih Banyak Produk ↓</button>
        </div>

    </div>
</main>
@endsection

@push('scripts')
<script>
const {
    createApp
} = Vue;

createApp({
    data() {
        return {
            products: [],
            categories: [{
                    id: 1,
                    name: 'Baju Koko'
                },
                {
                    id: 5,
                    name: 'Kaos'
                },
                {
                    id: 6,
                    name: 'Jaket'
                },
                {
                    id: 7,
                    name: 'Oversize'
                },
                {
                    id: 8,
                    name: 'Kemeja'
                },
                {
                    id: 10,
                    name: 'Jubah'
                }
            ],
            searchQuery: '',
            selectedCategory: '',
            selectedSize: '',
            visibleLimit: 8 // Jumlah produk awal yang dimuat
        };
    },
    computed: {
        filteredProducts() {
            return this.products.filter(product => {
                // Filter Search
                const matchesSearch = product.name.toLowerCase().includes(this.searchQuery
                .toLowerCase());

                // Filter Kategori
                const matchesCategory = this.selectedCategory === '' || product.category_id === this
                    .selectedCategory;

                // Filter Ukuran (Dummy logic mengecek ketersediaan ukuran jika ada di data)
                const matchesSize = this.selectedSize === '' || (product.sizes && product.sizes
                    .includes(this.selectedSize));

                return matchesSearch && matchesCategory && matchesSize;
            });
        },
        paginatedProducts() {
            return this.filteredProducts.slice(0, this.visibleLimit);
        }
    },
    mounted() {
        this.fetchCatalogProducts();
    },
    methods: {
        async fetchCatalogProducts() {
            const url = "{{ route('product.index') }}";
            try {
                const response = await fetch(url);
                const data = await response.json();
                const rawProducts = Array.isArray(data) ? data : (data.data || []);

                // Simpan produk ke state
                this.products = rawProducts;
            } catch (error) {
                console.error('Gagal memuat katalog:', error);
                this.products = [];
            }
        },
        loadMore() {
            this.visibleLimit += 8; // Tambah 8 produk tiap klik muat lebih banyak
        },
        getImageUrl(path) {
            if (!path) return '/assets/no-image.png';
            return `/storage/${path}`;
        },
        formatRupiah(value) {
            const number = Number(value);
            if (isNaN(number)) return value;
            return 'Rp ' + number.toLocaleString('id-ID');
        },
        getDiscountPercent(product) {
            return 10; // Default diskon 10%
        },
        getDiscountPrice(product) {
            const price = Number(product.price) || 0;
            return price - (price * 10 / 100);
        },
        goToDetail(product) {
            // Arahkan ke halaman detail produk
            window.location.href = `/produk/${product.id}`;
        }
    }
}).mount('#catalogApp');
</script>
@endpush