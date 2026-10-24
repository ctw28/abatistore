@extends('layouts')

@section('title', 'Katalog Produk — Abati Store')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/newweb/05-sections.css') }}">
<style>
/* ===== KATALOG ABATI STORE ===== */
.catalog-page {
    padding: 32px 0 70px;
    background: #fff;
    min-height: 60vh;
}



.catalog-eyebrow {
    display: block;
    color: var(--accent-gold-dark, #8e6129);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2px;
    margin-bottom: 6px;
}

.catalog-heading h1,
.catalog-heading h2 {
    margin: 0;
    color: var(--primary, #183332);
    font-size: clamp(24px, 3.5vw, 34px);
    font-weight: 700;
}

.catalog-layout {
    display: grid;
    grid-template-columns: 240px minmax(0, 1fr);
    gap: 32px;
    align-items: start;
}

.catalog-sidebar {
    position: sticky;
    top: 100px;
    border: 1px solid var(--line, #ece8e1);
    border-radius: 14px;
    padding: 20px;
    background: #fff;
}

.catalog-sidebar-title {
    font-size: 13px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--muted, #6f6f6f);
    font-weight: 700;
    margin: 0 0 14px;
}

.catalog-category-list {
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.catalog-category-btn {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    border: 0;
    background: transparent;
    color: var(--text, #222);
    padding: 11px 14px;
    border-radius: 10px;
    text-align: left;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: .18s;
}

.catalog-category-btn:hover {
    background: #f7f5f0;
}

.catalog-category-btn.is-active {
    background: var(--primary, #183332);
    color: #fff;
    font-weight: 600;
}

.catalog-category-btn small {
    font-size: 12px;
    opacity: .7;
}

.catalog-main {
    min-width: 0;
    padding: 0;
}

.catalog-sticky-mobile {
    display: none;
}

.desktop-filters {
    display: block;
}

.catalog-search-box {
    position: relative;
    margin-bottom: 18px;
}

.catalog-search-box input {
    width: 100%;
    height: 48px;
    padding: 0 16px 0 45px;
    border: 1px solid var(--line, #ece8e1);
    border-radius: 12px;
    font-size: 14px;
    outline: none;
    background: #faf9f6;
    color: var(--text, #222);
    transition: .2s;
}

.catalog-search-box input:focus {
    border-color: var(--primary, #183332);
    background: #fff;
    box-shadow: 0 4px 12px rgba(24, 51, 50, .08);
}

.catalog-search-box svg {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    width: 20px;
    height: 20px;
    stroke: var(--muted, #6f6f6f);
    pointer-events: none;
}

.catalog-filter-row {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 200px;
    gap: 14px;
    margin-bottom: 20px;
}

.catalog-select-wrap label {
    display: block;
    margin: 0 0 6px;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .7px;
    text-transform: uppercase;
    color: var(--muted, #6f6f6f);
}

.catalog-select {
    width: 100%;
    height: 46px;
    border: 1px solid var(--line, #ece8e1);
    border-radius: 11px;
    background: #fff;
    color: var(--text, #222);
    padding: 0 14px;
    font-size: 14px;
    outline: none;
}

.catalog-select:focus {
    border-color: var(--primary, #183332);
}

.catalog-results-line {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    margin: 8px 0 18px;
    color: var(--muted, #6f6f6f);
    font-size: 13px;
}

.catalog-reset {
    border: 0;
    background: none;
    padding: 4px 0;
    color: var(--primary, #183332);
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
    text-decoration: underline;
}

/* Product cards */
.products {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 26px 18px;
    margin-top: 0 !important;
}

.product {
    min-width: 0;
    cursor: pointer;
}

.product .photo {
    position: relative;
    overflow: hidden;
    border-radius: 14px;
    background: #f7f5f0;
    aspect-ratio: 3/4;
    margin-bottom: 12px;
}

.product .photo img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform .35s ease;
}

.product:hover .photo img {
    transform: scale(1.035);
}

.product-category-label {
    display: block;
    margin: 0 0 6px;
    color: var(--accent-gold-dark, #8e6129);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: lowercase;
}

.product-name {
    display: block;
    color: var(--text, #222);
    font-size: 15px;
    font-weight: 600;
    line-height: 1.45;
    margin-bottom: 8px;
}

.product-price {
    display: flex;
    flex-direction: column;
    gap: 3px;
}

.product-price b {
    font-size: 15px;
    color: var(--primary, #183332);
    font-weight: 700;
}

.product-price del {
    font-size: 12px;
    color: #888;
}

.interleaved-rec-card {
    grid-column: 1/-1;
    background: var(--cream, #f8f3eb);
    border: 1px solid var(--line, #ece8e1);
    border-radius: 16px;
    padding: 24px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    margin: 8px 0;
}

.interleaved-rec-info small {
    color: var(--accent-gold-dark, #8e6129);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
    display: block;
    margin-bottom: 6px;
}

.interleaved-rec-info h3 {
    font-family: Georgia, serif;
    font-size: 22px;
    color: var(--primary, #183332);
    margin: 0 0 8px;
}

.interleaved-rec-info p {
    margin: 0;
    color: #555;
    font-size: 14px;
    line-height: 1.5;
}

.interleaved-rec-btn {
    background: var(--primary, #183332);
    color: #fff;
    padding: 12px 20px;
    border-radius: 10px;
    font-size: 13px;
    font-weight: 600;
    border: 0;
    cursor: pointer;
    white-space: nowrap;
}

.interleaved-rec-btn:hover {
    background: var(--primary-hover, #264c4a);
}

.catalog-empty,
.catalog-loading,
.catalog-error {
    text-align: center;
    padding: 56px 16px;
    color: var(--muted, #6f6f6f);
    font-size: 15px;
}

.catalog-empty strong {
    display: block;
    color: var(--text, #222);
    font-size: 17px;
    margin-bottom: 6px;
}

.load-more-wrap {
    text-align: center;
    margin-top: 40px;
}

.load-more-btn {
    background: transparent;
    color: var(--primary, #183332);
    border: 1px solid var(--primary, #183332);
    padding: 13px 32px;
    border-radius: 11px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: .2s;
}

.load-more-btn:hover {
    background: var(--primary, #183332);
    color: #fff;
}

@media(max-width:1199px) {
    .products {
        grid-template-columns: repeat(3, minmax(0, 1fr));
    }
}

@media(max-width:767px) {
    .catalog-page {
        padding: 20px 0 50px;
    }



    .catalog-eyebrow {
        font-size: 11px;
        letter-spacing: 1.5px;
    }

    .catalog-heading h1,
    .catalog-heading h2 {
        font-size: 22px;
    }

    .catalog-layout {
        display: block;
    }

    .catalog-sidebar {
        display: none;
    }

    .desktop-filters {
        display: none;
    }

    .catalog-sticky-mobile {
        display: block;
        position: sticky;
        top: 0;
        z-index: 5;
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(10px);
        padding: 12px 0 14px;
        margin: 0 0 16px;
        border-bottom: 1px solid var(--line, #ece8e1);
    }

    .catalog-search-box {
        margin-bottom: 10px;
    }

    .catalog-search-box input {
        height: 46px;
        font-size: 14px;
    }

    .catalog-filter-row {
        grid-template-columns: minmax(0, 1fr) minmax(120px, 0.8fr);
        gap: 10px;
        margin-bottom: 0;
    }

    .catalog-select-wrap label {
        font-size: 11px;
        margin-bottom: 5px;
    }

    .catalog-select {
        height: 44px;
        padding: 0 10px;
        font-size: 13px;
    }

    .catalog-results-line {
        margin: 4px 0 14px;
        font-size: 12px;
    }

    .products {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 20px 14px;
    }

    .product .photo {
        border-radius: 12px;
        margin-bottom: 10px;
    }

    .product-category-label {
        font-size: 10px;
        margin-bottom: 5px;
        letter-spacing: 0.8px;
    }

    .product-name {
        font-size: 14px;
        margin-bottom: 6px;
        font-weight: 600;
    }

    .product-price b {
        font-size: 14px;
    }

    .product-price del {
        font-size: 11px;
    }

    .interleaved-rec-card {
        padding: 18px;
        flex-direction: column;
        align-items: flex-start;
        gap: 14px;
        border-radius: 12px;
    }

    .interleaved-rec-info h3 {
        font-size: 19px;
    }

    .interleaved-rec-info p {
        font-size: 13px;
    }

    .interleaved-rec-btn {
        width: 100%;
        white-space: normal;
        padding: 12px;
        text-align: center;
    }
}

@media(prefers-reduced-motion:reduce) {
    .product .photo img {
        transition: none;
    }
}
</style>
@endpush

@section('content')
<main class="catalog-page" id="catalogApp">
    <div class="wrap">
        <header class="catalog-heading">
            <h1>
                @{{ selectedCategoryName }}
            </h1>
        </header>

        <div class="catalog-layout">
            {{-- Desktop: kategori di sisi kiri --}}
            <aside class="catalog-sidebar" aria-label="Filter kategori produk">
                <h2 class="catalog-sidebar-title">Kategori Produk</h2>
                <div class="catalog-category-list">
                    <button type="button" class="catalog-category-btn" :class="{ 'is-active': selectedCategory === '' }"
                        @click="setCategory('')">
                        <span>Semua Kategori</span>
                    </button>
                    <button type="button" class="catalog-category-btn" v-for="cat in categories" :key="cat.id"
                        :class="{ 'is-active': String(selectedCategory) === String(cat.id) }"
                        @click="setCategory(cat.id)">
                        <span>@{{ cat.name }}</span>
                    </button>
                </div>
            </aside>

            <section class="catalog-main" aria-label="Daftar produk">
                {{-- Mobile: filter sticky di bagian atas saat halaman digulir --}}
                <div class="catalog-sticky-mobile">

                    <div class="catalog-filter-row">
                        <div class="catalog-select-wrap">
                            <!-- <label for="mobileCategory">Kategori</label> -->
                            <select id="mobileCategory" class="catalog-select" :value="selectedCategory"
                                @change="setCategory($event.target.value)">
                                <option value="">Semua Kategori</option>
                                <option v-for="cat in categories" :key="cat.id" :value="cat.id">@{{ cat.name }}</option>
                            </select>
                        </div>
                        <div class="catalog-select-wrap">
                            <!-- <label for="mobileSize">Ukuran tersedia</label> -->
                            <select id="mobileSize" class="catalog-select" v-model="selectedSize"
                                @change="resetVisibleLimit">
                                <option value="">Semua Ukuran</option>
                                <option v-for="size in sizeOptions" :key="size" :value="size">@{{ size }}</option>
                            </select>
                        </div>
                    </div>
                </div>

                {{-- Desktop: pencarian dan filter ukuran di atas produk --}}
                <div class="desktop-filters">
                    <div class="catalog-search-box">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                        <input type="search" v-model.trim="searchQuery" @input="resetVisibleLimit"
                            placeholder="Cari baju koko, kurta, jubah, kaos..." aria-label="Cari produk">
                    </div>
                    <div class="catalog-filter-row" style="grid-template-columns:minmax(0,1fr) 190px;">
                        <div class="catalog-select-wrap">
                            <label for="desktopSize">Filter ukuran tersedia</label>
                            <select id="desktopSize" class="catalog-select" v-model="selectedSize"
                                @change="resetVisibleLimit">
                                <option value="">Semua Ukuran</option>
                                <option v-for="size in sizeOptions" :key="size" :value="size">@{{ size }}</option>
                            </select>
                        </div>
                        <div class="catalog-select-wrap"
                            style="display:flex;flex-direction:column;justify-content:flex-end;">
                            <button type="button" class="catalog-select" @click="resetFilters"
                                style="cursor:pointer;">Reset Filter</button>
                        </div>
                    </div>
                </div>

                <div class="catalog-results-line">
                    <span v-if="!loading">Menampilkan @{{ paginatedProducts.length }} dari
                        @{{ filteredProducts.length }} produk</span>
                    <span v-else>Memuat produk...</span>
                    <button type="button" class="catalog-reset" @click="resetFilters">Reset filter</button>
                </div>

                <div v-if="loading" class="catalog-loading">Sedang memuat koleksi produk...</div>
                <div v-else-if="loadError" class="catalog-error">
                    Produk belum bisa dimuat. Periksa koneksi lalu coba lagi.
                    <div style="margin-top:12px"><button class="load-more-btn" @click="fetchCatalogProducts">Coba
                            Lagi</button></div>
                </div>
                <div v-else-if="filteredProducts.length === 0" class="catalog-empty">
                    <strong>Produk tidak ditemukan.</strong>
                    Coba ubah kata kunci, kategori, atau ukuran yang dipilih.
                </div>

                <div v-else class="products">
                    <template v-for="(product, index) in paginatedProducts" :key="product.id">
                        <article class="product" @click="goToDetail(product)" @keydown.enter="goToDetail(product)"
                            tabindex="0" role="link">
                            <div class="photo">
                                <img :src="getImageUrl(product.image)" :alt="product.name || 'Produk Abati Store'"
                                    loading="lazy">
                            </div>
                            <span class="product-category-label">|@{{ getCategorySlug(product) }}</span>
                            <strong class="product-name">@{{ product.name }}</strong>
                            <div class="product-price">
                                <b>@{{ formatRupiah(product.price) }}</b>
                            </div>
                        </article>

                        <aside v-if="index === 5 && filteredProducts.length > 6" class="interleaved-rec-card">
                            <div class="interleaved-rec-info">
                                <small>SERAGAM</small>
                                <h3>Butuh Pakaian Seragam untuk keluarga / komunitasmu?</h3>
                                <p>Dapatkan penawaran spesial untuk pemesanan seragam.</p>
                            </div>
                            <button type="button" class="interleaved-rec-btn" @click.stop="setCategory(1)">Konsultasikan
                                sekarang →</button>
                        </aside>
                    </template>
                </div>

                <div class="load-more-wrap" v-if="!loading && !loadError && visibleLimit < filteredProducts.length">
                    <button type="button" class="load-more-btn" @click="loadMore">Muat Lebih Banyak Produk ↓</button>
                </div>
            </section>
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
                    name: 'Baju Koko',
                    slug: 'koko'
                },
                {
                    id: 5,
                    name: 'Kaos',
                    slug: 'kaos'
                },
                {
                    id: 2,
                    name: 'Jaket',
                    slug: 'jacket'
                },
                {
                    id: 3,
                    name: 'Kurta',
                    slug: 'kurta'
                },
                {
                    id: 7,
                    name: 'Oversize',
                    slug: 'oversize'
                },
                {
                    id: 6,
                    name: 'Celana',
                    slug: 'celana'
                },
                {
                    id: 8,
                    name: 'Kemeja',
                    slug: 'kemeja'
                },
                {
                    id: 10,
                    name: 'Jubah',
                    slug: 'jubah'
                }
            ],
            sizeOptions: ['S', 'M', 'L', 'XL', 'XXL', 'XXXL'],
            searchQuery: '',
            selectedCategory: '',
            selectedSize: new URLSearchParams(window.location.search)
                .get('ukuran')?.toUpperCase() || '',
            visibleLimit: 8,
            loading: false,
            loadError: false
        };
    },

    computed: {
        filteredProducts() {
            return this.products.filter(product => {
                const name = String(product.name || '').toLowerCase();
                const query = this.searchQuery.toLowerCase();
                const matchesSearch = name.includes(query);
                const matchesCategory = this.selectedCategory === '' ||
                    String(product.category_id) === String(this.selectedCategory);
                const matchesSize = this.selectedSize === '' ||
                    this.productHasSize(product, this.selectedSize);
                return matchesSearch && matchesCategory && matchesSize;
            });
        },
        paginatedProducts() {
            return this.filteredProducts.slice(0, this.visibleLimit);
        },
        selectedCategoryName() {
            if (!this.selectedCategory) return 'Semua Produk';

            const category = this.categories.find(
                cat => String(cat.id) === String(this.selectedCategory)
            );

            return category ? category.name : 'Semua Produk';
        }
    },

    mounted() {
        this.readCategoryFromUrl();
        this.fetchCatalogProducts();
        window.addEventListener('popstate', this.readCategoryFromUrl);
    },

    beforeUnmount() {
        window.removeEventListener('popstate', this.readCategoryFromUrl);
    },

    methods: {
        readCategoryFromUrl() {
            const params = new URLSearchParams(window.location.search);

            // Baca kategori dari URL
            const requested = (params.get('kategori') || '').trim().toLowerCase();

            if (!requested) {
                this.selectedCategory = '';
            } else {
                const category = this.categories.find(cat =>
                    cat.slug.toLowerCase() === requested ||
                    cat.name.toLowerCase() === requested ||
                    String(cat.id) === requested
                );

                this.selectedCategory = category ? category.id : '';
            }

            // Baca ukuran dari URL
            const requestedSize = (params.get('ukuran') || '').trim().toUpperCase();

            this.selectedSize = this.sizeOptions.includes(requestedSize) ?
                requestedSize :
                '';

            this.visibleLimit = 8;
        },

        setCategory(value) {
            const categoryId = value === '' ? '' : Number(value);
            this.selectedCategory = categoryId;
            this.visibleLimit = 8;

            const params = new URLSearchParams(window.location.search);
            if (categoryId === '') {
                params.delete('kategori');
            } else {
                const category = this.categories.find(cat => cat.id === categoryId);
                if (category) params.set('kategori', category.slug);
            }
            const query = params.toString();
            const nextUrl = window.location.pathname + (query ? '?' + query : '') + window.location.hash;
            window.history.replaceState({}, '', nextUrl);
        },

        resetFilters() {
            this.searchQuery = '';
            this.selectedSize = '';
            this.setCategory('');
            this.visibleLimit = 8;
        },

        resetVisibleLimit() {
            this.visibleLimit = 8;
        },

        async fetchCatalogProducts() {
            this.loading = true;
            this.loadError = false;

            try {
                const url = new URL(@json(route('product.index')), window.location.origin);
                url.searchParams.set('in_stock', '1');

                const response = await fetch(url);

                if (!response.ok) {
                    throw new Error('HTTP ' + response.status);
                }

                const data = await response.json();
                this.products = Array.isArray(data) ? data : (data.data || []);

            } catch (error) {
                console.error('Gagal memuat katalog:', error);
                this.products = [];
                this.loadError = true;
            } finally {
                this.loading = false;
            }
        },

        productHasSize(product, requestedSize) {
            // Struktur API yang digunakan admin: product.stocks = [{ size: { id, name }, stock }]
            if (Array.isArray(product.stocks)) {
                return product.stocks.some(stock => {
                    const sizeName = typeof stock.size === 'object' && stock.size !== null ?
                        stock.size.name :
                        (stock.size_name || stock.size);
                    const quantity = Number(stock.stock ?? stock.quantity ?? stock.qty ?? 0);
                    return String(sizeName || '').trim().toUpperCase() === requestedSize && quantity >
                        0;
                });
            }

            // Fallback jika endpoint mengirim daftar sizes secara langsung.
            if (Array.isArray(product.sizes)) {
                return product.sizes.some(size => {
                    const sizeName = typeof size === 'object' && size !== null ?
                        (size.name || size.size_name || size.size) :
                        size;
                    const quantity = typeof size === 'object' && size !== null ?
                        Number(size.stock ?? size.quantity ?? 1) :
                        1;
                    return String(sizeName || '').trim().toUpperCase() === requestedSize && quantity >
                        0;
                });
            }
            return false;
        },

        getCategorySlug(product) {
            const category = this.categories.find(cat =>
                String(cat.id) === String(product.category_id)
            );
            if (category) return category.slug;

            const categoryName = product.category && product.category.name ?
                product.category.name :
                '';
            const normalized = categoryName.toLowerCase().trim();
            if (normalized.includes('koko')) return 'koko';
            if (normalized.includes('kaos')) return 'kaos';
            if (normalized.includes('jaket')) return 'jaket';
            if (normalized.includes('oversize')) return 'oversize';
            if (normalized.includes('kemeja')) return 'kemeja';
            if (normalized.includes('jubah')) return 'jubah';
            if (normalized.includes('kurta')) return 'kurta';
            if (normalized.includes('sirwal')) return 'sirwal';
            return normalized || 'produk';
        },

        getImageUrl(path) {
            if (!path) return @json(asset('assets/no-image.png'));
            if (/^https?:\/\//i.test(path)) return path;
            if (path.startsWith('/')) return path;
            if (path.startsWith('storage/')) return '/' + path;
            return '/storage/' + path.replace(/^\/+/, '');
        },

        formatRupiah(value) {
            const number = Number(value);
            if (!Number.isFinite(number)) return 'Hubungi kami';
            return 'Rp ' + number.toLocaleString('id-ID');
        },

        goToDetail(product) {
            window.location.href = `/produk/${product.id}`;
        },

        loadMore() {
            this.visibleLimit += 8;
        }
    }
}).mount('#catalogApp');
</script>
@endpush