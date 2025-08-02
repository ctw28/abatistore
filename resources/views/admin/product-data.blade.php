@extends('admin.template')
@section('title', 'Daftar Produk')

@section('content')
<div id="app">
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <a href="{{ route('product.add') }}" class="btn btn-primary">Tambah Produk</a>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Andalan</th>
                        <th>Gambar</th>
                        <th>Kategori</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Habis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(product,index) in products" :key="product.id">
                        <td>@{{index+1}}</td>
                        <td class="text-center">
                            <button @click="toggleFeatured(product)" class="btn btn-sm"
                                :class="product.is_featured ? 'btn-warning' : 'btn-outline-secondary'">
                                <i class="nav-icon bi bi-star"></i>
                            </button>
                        </td>

                        <td>@{{ product.name }} <br>
                            <img :src="getImageUrl(product.image)" style="cursor:pointer"
                                @click="showImageModal(product)" width="200" />

                        </td>

                        <td>@{{ product.category.name }}</td>
                        <td>
                            <ul class="list-unstyled">
                                <li v-for="(stock) in product.stocks" :key="stock.size.id">
                                    @{{ stock.size.name }}: @{{ stock.stock }}
                                </li>
                            </ul>

                            <!-- Menampilkan total stok -->
                            <p v-if="product && product.stocks">Total Stok: @{{ totalStock(product) }}</p>

                        </td>
                        <td>@{{ formatRupiah(product.price) }}</td>
                        <td class="text-center">
                            <button @click="toggleHabis(product)" class="btn btn-sm"
                                :class="product.is_habis ? 'btn-warning' : 'btn-outline-secondary'">
                                <i class="nav-icon bi bi-exclamation-octagon-fill"></i>
                            </button>
                        </td>
                        <td>
                            <a :href="'{{ route('product.edit', ['id' => 'REPLACE_ID']) }}'.replace('REPLACE_ID', product.id)"
                                class="btn btn-sm btn-info">Edit</a>

                            <button class="btn btn-sm btn-warning" @click="openStockModal(product)">Kelola Stok</button>

                            <button @click="deleteProduct(product.id)" class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Gambar Pendukung</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div v-if="selectedImages.length">
                        <div class="row">
                            <div class="col-md-4 mb-3" v-for="img in selectedImages" :key="img.id">
                                <img :src="getImageUrl(img.image)" class="img-fluid rounded shadow-sm" />
                            </div>
                        </div>
                    </div>
                    <div v-else>
                        <p>Tidak ada gambar pendukung.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="stockModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Kelola Stok - @{{ currentProduct.name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Ukuran</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(stock, index) in stockData" :key="stock.size_id">
                                <td>@{{ stock.size_name }}</td>
                                <td>
                                    <input type="number" class="form-control" v-model.number="stock.quantity" />
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm" @click="removeStock(index)">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="mt-3">
                        <label>Tambah Ukuran</label>
                        <select v-model="newSizeId" class="form-select">
                            <option v-for="size in availableSizes" :value="size.id">@{{ size.name }}</option>
                        </select>
                        <button class="btn btn-primary mt-2" @click="addSizeToStock">Tambah</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button class="btn btn-success" @click="saveStock">Simpan</button>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/vue@2.7.16/dist/vue.js"></script>
<script>
    new Vue({
        el: '#app',
        data: {
            products: [],
            selectedImages: [],
            currentProduct: {},
            stockData: [],
            availableSizes: [], // daftar semua ukuran dari API
            newSizeId: null,

        },
        mounted() {
            this.fetchProducts()
        },
        methods: {
            formatRupiah(value) {
                const number = Number(value);
                if (isNaN(number)) return value;
                return 'Rp ' + number.toLocaleString('id-ID');
            },
            totalStock(product) {
                if (product && product.stocks) {
                    return product.stocks.reduce((total, stock) => total + stock.stock, 0);
                }
                return 0;
            },
            async openStockModal(product) {
                this.currentProduct = product;
                let urlstock = "{{route('stock.index',':id')}}"
                urlstock = urlstock.replace(':id', product.id)
                const [sizes, stock] = await Promise.all([
                    fetch("{{route('size.index')}}").then(res => res.json()),
                    fetch(urlstock).then(res => res.json())
                ]);

                this.availableSizes = sizes;
                this.stockData = stock;
                console.log(stock);
                this.stockData = stock.map(item => ({
                    ...item,
                    size_id: item.size_id,
                    size_name: item.size.name,
                    quantity: item.stock || 0 // Pastikan ada properti quantity
                }));

                new bootstrap.Modal(document.getElementById('stockModal')).show();
            },
            addSizeToStock() {
                const size = this.availableSizes.find(s => s.id === this.newSizeId);
                if (!size || this.stockData.some(s => s.size_id === size.id)) return;

                this.stockData.push({
                    size_id: size.id,
                    size_name: size.name,
                    quantity: 0,
                });

                this.newSizeId = null;
            },
            removeStock(index) {
                this.stockData.splice(index, 1);
            },
            saveStock() {
                // Menyiapkan array untuk menyimpan data stok yang akan dikirim ke API
                const stocksToSave = this.stockData.map(stock => ({
                    product_id: this.currentProduct.id, // ID produk yang sedang diedit
                    size_id: stock.size_id, // ID ukuran
                    stock: stock.quantity, // Jumlah stok
                }));

                // Mengirimkan data stok ke API
                let url = "{{route('stock.store',':id')}}"
                url = url.replace(':id', this.currentProduct.id)
                fetch(url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            stocks: stocksToSave, // Data yang akan disimpan
                        }),
                    })
                    .then(response => response.json())
                    .then(() => {
                        this.fetchProducts()

                        alert('Stok berhasil disimpan!');
                        // Menutup modal setelah data berhasil disimpan
                        bootstrap.Modal.getInstance(document.getElementById('stockModal')).hide();
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Terjadi kesalahan saat menyimpan stok.');
                    });
            },
            getImageUrl(path) {
                return path ? `/public/storage/${path}` : '/images/no-image.png';
            },
            showImageModal(product) {
                console.log(product);

                this.selectedImages = product.images || [];
                console.log(this.selectedImages);

                const modal = new bootstrap.Modal(document.getElementById('imageModal'));
                modal.show();
            },
            fetchProducts() {
                let url = "{{route('product.index')}}"

                fetch(url, {
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('jwt')
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        this.products = data
                    })
            },
            toggleFeatured(product) {
                let url = "{{route('toggle.featured',':id')}}"
                url = url.replace(':id', product.id)
                fetch(url, {
                        method: 'PATCH',
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('jwt'),
                            'Content-Type': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        product.is_featured = data.is_featured
                    })
            },
            toggleHabis(product) {
                let url = "{{route('toggle.habis',':id')}}"
                url = url.replace(':id', product.id)
                fetch(url, {
                        method: 'PATCH',
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('jwt'),
                            'Content-Type': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        product.is_habis = data.is_habis
                    })
            },
            deleteProduct(id) {
                if (!confirm('Yakin ingin menghapus produk ini?')) return;
                let url = "{{route('product.destroy',':id')}}"
                url = url.replace(':id', id)
                fetch(url, {
                        method: 'DELETE',
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('jwt')
                        }
                    })
                    .then(() => {
                        this.products = this.products.filter(p => p.id !== id)
                    })
            }
        }
    })
</script>
@endpush