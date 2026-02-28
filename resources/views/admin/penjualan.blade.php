@extends('admin.template')
@section('title', 'Penjualan')

@section('content')
<div id="app" class="container-fluid">
    <div class="card shadow-sm mb-4">
        <div class="card-body">

            <div class="card shadow-sm mb-4">
                <div class="card-body">

                    <!-- BARIS 1 -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0">📊 Daftar Penjualan</h4>

                        <div class="d-flex gap-2">

                            <!-- FILTER TAHUN -->
                            <select class="form-control" style="width:120px" v-model="selectedYear"
                                @change="currentPage=1">
                                <option :value="2026">2026</option>
                                <option :value="2025">2025</option>
                            </select>

                            <!-- FILTER BULAN -->
                            <select class="form-control" style="width:150px" v-model="selectedMonth"
                                @change="currentPage=1">

                                <option value="all">Semua Bulan</option>
                                <option v-for="(bulan, i) in daftarBulan" :key="i" :value="i+1">
                                    @{{ bulan }}
                                </option>
                            </select>

                        </div>

                    </div>

                    <!-- BARIS 2 -->
                    <div class="d-flex justify-content-between align-items-center">

                        <!-- TOMBOL TAMBAH -->
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#saleModal"
                            @click="showForm">
                            + Tambah Penjualan
                        </button>

                        <!-- TOTAL -->
                        <div class="text-end">
                            <small class="text-muted">Total Penjualan</small>
                            <div class="fw-bold text-success" style="font-size:18px">
                                Rp @{{ totalSemuaPenjualan.toLocaleString('id-ID') }}
                            </div>
                        </div>

                    </div>

                </div>
            </div>




            <!-- Tabel -->
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Pembeli</th>
                        <th>Total Dibayar</th>
                        <th>Item</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(sale,index) in paginatedSales" :key="sale.id">
                        <td class="text-center">@{{ index+1 }}</td>
                        <td>@{{ formatTanggal(sale.sale_date) }}</td>
                        <td>@{{ sale.buyer?.name ?? '-' }}</td>
                        <td>
                            Total : @{{ formatRupiah(totalHargaPerSale(sale)) }}<br>
                            Bayar : @{{ formatRupiah(sale.total_paid) }}<br>
                            <small v-if="sale.total_paid < totalHargaPerSale(sale)" class="text-danger">
                                Utang: @{{ formatRupiah(totalHargaPerSale(sale) - sale.total_paid) }}
                            </small>
                            <small v-else class="text-success">
                                Lunas
                            </small>
                        </td>


                        <td>
                            @{{ sale.items.length }} <br>
                            <small class="text-muted">
                                <ul class="mb-0 ps-3">
                                    <li v-for="item in sale.items" :key="item.id">
                                        @{{ item.product.name }} (@{{ item.size.name }} / @{{ item.quantity }})
                                    </li>
                                </ul>
                            </small>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-warning me-1" @click="editSale(sale)">✏️</button>
                            <button class="btn btn-sm btn-danger" @click="deleteSale(sale.id)">🗑️</button>
                        </td>
                    </tr>
                    <!-- JIKA DATA KOSONG -->
                    <tr v-if="paginatedSales.length === 0">
                        <td colspan="6" class="text-center text-muted py-3">
                            Belum ada penjualan, semoga Allah memudahkan penjualan... Aamiin
                        </td>
                    </tr>
                </tbody>
            </table>
            <nav v-if="totalPages > 1">
                <ul class="pagination">
                    <li class="page-item" :class="{disabled: currentPage===1}">
                        <a class="page-link" href="#" @click.prevent="currentPage--">
                            Prev
                        </a>
                    </li>

                    <li class="page-item" v-for="n in totalPages" :class="{active: n===currentPage}">
                        <a class="page-link" href="#" @click.prevent="currentPage=n">
                            @{{ n }}
                        </a>
                    </li>

                    <li class="page-item" :class="{disabled: currentPage===totalPages}">
                        <a class="page-link" href="#" @click.prevent="currentPage++">
                            Next
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Modal Bootstrap -->
            <!-- Modal Bootstrap -->
            <div class="modal fade" id="saleModal" tabindex="-1" aria-labelledby="saleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <form @submit.prevent="submitSale">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Penjualan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="modal-body">

                                <!-- ================= TANGGAL PEMBELIAN ================= -->
                                <h5 class="mb-3 text-primary">📅 Tanggal Pembelian</h5>
                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <label>Tanggal</label>
                                        <input type="date" class="form-control" v-model="sale.sale_date">
                                    </div>
                                </div>


                                <!-- ================= DATA PEMBELI ================= -->
                                <h5 class="mb-3 text-primary">👤 Data Pembeli</h5>

                                <!-- MODE TAMBAH -->
                                <div v-if="!isEdit" class="mb-3">
                                    <button type="button" class="btn btn-outline-primary me-2"
                                        @click="chooseBuyerMode('old')">
                                        Pembeli Lama
                                    </button>

                                    <button type="button" class="btn btn-outline-success"
                                        @click="chooseBuyerMode('new')">
                                        Pembeli Baru
                                    </button>
                                </div>

                                <!-- Search pembeli lama -->
                                <div v-if="!isEdit && buyerMode==='old'" class="mb-3">
                                    <label>Cari Pembeli</label>
                                    <input type="text" class="form-control" v-model="searchBuyer" @input="filterBuyers"
                                        placeholder="Ketik nama...">

                                    <ul class="list-group mt-2" v-if="filteredBuyers.length">
                                        <li class="list-group-item" v-for="b in filteredBuyers" @click="selectBuyer(b)"
                                            style="cursor:pointer">
                                            @{{ b.name }} - @{{ b.whatsapp_number }}
                                        </li>
                                    </ul>
                                </div>

                                <!-- Input pembeli baru -->
                                <div v-if="!isEdit && buyerMode==='new'" class="row mb-3">
                                    <div class="col-md-6">
                                        <label>Nama Pembeli</label>
                                        <input class="form-control" v-model="sale.buyer.name">
                                    </div>

                                    <div class="col-md-6">
                                        <label>No WA</label>
                                        <input class="form-control" v-model="sale.buyer.whatsapp_number">
                                    </div>
                                </div>

                                <!-- MODE EDIT -->
                                <div v-if="isEdit" class="row mb-4">
                                    <div class="col-md-6">
                                        <label>Nama Pembeli</label>
                                        <input class="form-control" v-model="sale.buyer.name" readonly>
                                    </div>

                                    <div class="col-md-6">
                                        <label>No WA</label>
                                        <input class="form-control" v-model="sale.buyer.whatsapp_number" readonly>
                                    </div>
                                </div>


                                <hr>


                                <!-- ================= ITEM PEMBELIAN ================= -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="text-primary mb-0">🛒 Item Pembelian</h5>

                                    <div class="text-end">
                                        <small class="text-muted">Total Harga</small>
                                        <div class="fw-bold text-success" style="font-size: 22px;">
                                            Rp @{{ totalHarga.toLocaleString('id-ID') }}
                                        </div>
                                    </div>
                                </div>

                                <table class="table table-sm table-bordered mt-2">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>Produk</th>
                                            <th>Ukuran</th>
                                            <th>Qty</th>
                                            <th>Harga Normal</th>
                                            <th>Harga Final</th>
                                            <th>Subtotal</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(item, i) in sale.items" :key="i">
                                            <td>
                                                <select class="form-control" v-model="item.product_id"
                                                    @change="updateProduct(item)">
                                                    <option disabled value="">--Pilih--</option>
                                                    <option v-for="p in products" :value="p.id">
                                                        @{{ p.name }}
                                                    </option>
                                                </select>
                                            </td>

                                            <td>
                                                <select class="form-control" v-model="item.size_id">
                                                    <option disabled value="">--</option>
                                                    <option v-for="s in item.sizes" :value="s.id">
                                                        @{{ s.name }} (stok: @{{ s.stock }})
                                                    </option>
                                                </select>
                                            </td>


                                            <td>
                                                <input type="number" class="form-control" v-model.number="item.quantity"
                                                    @input="calculateSubtotal(item)">
                                            </td>

                                            <td>
                                                <input type="text" class="form-control"
                                                    :value="formatPrice(item.original_price)"
                                                    @input="onOriginalPriceInput($event, item)">
                                            </td>

                                            <td>
                                                <input type="text" class="form-control"
                                                    :value="formatPrice(item.final_price)"
                                                    @input="onFinalPriceInput($event, item)">
                                            </td>

                                            <td>
                                                @{{ item.subtotal.toLocaleString('id-ID') }}
                                            </td>

                                            <td>
                                                <button class="btn btn-sm btn-danger" @click.prevent="removeItem(i)">
                                                    ✖
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <button class="btn btn-primary btn-sm mt-2" @click.prevent="addItem">
                                    + Tambah Item
                                </button>


                                <hr>


                                <!-- ================= PEMBAYARAN ================= -->
                                <h5 class="mb-3 text-primary">💳 Pembayaran</h5>
                                <div class="row mb-3">

                                    <div class="col-md-4">
                                        <label>Metode Pembayaran</label>
                                        <select class="form-control" v-model="sale.payment_method">
                                            <option value="cash">Cash</option>
                                            <option value="transfer">Transfer</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Total Dibayar</label>
                                        <input type="text" class="form-control" v-model="sale.total_paid"
                                            placeholder="Masukkan jumlah dibayar">
                                    </div>

                                    <div class="col-md-2 d-flex align-items-end">
                                        <button type="button" class="btn btn-success w-100" @click="setLunas">
                                            ✔ Tandai Lunas
                                        </button>
                                    </div>

                                </div>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection

        @push('scripts')
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script>
            const {
                createApp
            } = Vue;

            createApp({
                data() {
                    return {
                        showModal: false,
                        sales: [],
                        products: [],
                        sizes: [],
                        editingId: null,

                        sale: {
                            sale_date: new Date().toISOString().substr(0, 10),
                            payment_method: 'cash',
                            total_paid: 0,
                            buyer: {
                                id: null,
                                name: '',
                                whatsapp_number: ''
                            },
                            items: []
                        },
                        buyerMode: null, // 'old' | 'new'
                        buyers: [],
                        filteredBuyers: [],
                        searchBuyer: '',
                        isEdit: false,
                        selectedYear: 2026, // 🔥 default
                        perPage: 10,
                        currentPage: 1,
                        selectedMonth: 'all',


                    }
                },
                mounted() {
                    this.fetchProducts();
                    this.fetchSales();
                    this.addItem();
                },
                computed: {
                    daftarBulan() {
                        return [
                            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
                        ];
                    },
                    filteredSales() {
                        return this.sales.filter(s => {

                            const date = new Date(s.sale_date);

                            const tahun = date.getFullYear();
                            const bulan = date.getMonth() + 1;

                            const matchYear = tahun == this.selectedYear;

                            const matchMonth = this.selectedMonth == 'all' ?
                                true :
                                bulan == this.selectedMonth;

                            return matchYear && matchMonth;
                        });
                    },

                    paginatedSales() {
                        const start = (this.currentPage - 1) * this.perPage;
                        return this.filteredSales.slice(start, start + this.perPage);
                    },

                    totalSemuaPenjualan() {
                        return this.filteredSales.reduce((total, sale) => {
                            const perSale = sale.items.reduce((sum, item) => {
                                return sum + (item.final_price * item.quantity)
                            }, 0)

                            return total + perSale
                        }, 0)
                    },

                    // pagination
                    totalPages() {
                        return Math.ceil(this.filteredSales.length / this.perPage)
                    },


                    // totalSemuaPenjualan() {
                    //     return this.sales.reduce((total, sale) => {
                    //         const totalPerSale = sale.items.reduce((subtotal, item) => {
                    //             return subtotal + (parseInt(item.final_price) * parseInt(item.quantity) ||
                    //                 0);
                    //         }, 0);
                    //         return total + totalPerSale;
                    //     }, 0);
                    // },
                    totalHarga() {
                        return this.sale.items.reduce((sum, item) => {
                            return sum + (item.subtotal || 0);
                        }, 0);
                    },
                    formattedTotalPaid() {
                        const numeric = parseInt(this.sale.total_paid.toString().replace(/[^\d]/g, '')) || 0
                        return numeric.toLocaleString('id-ID')
                    }

                },
                methods: {
                    formatTanggal(tanggal) {
                        if (!tanggal) return '-';

                        const opsi = {
                            day: '2-digit',
                            month: 'long',
                            year: 'numeric'
                        };

                        return new Date(tanggal)
                            .toLocaleDateString('id-ID', opsi);
                    },
                    setLunas() {
                        this.sale.total_paid = this.totalHarga
                    },
                    chooseBuyerMode(mode) {
                        this.searchBuyer = '',

                            this.buyerMode = mode

                        if (mode === 'old') {
                            this.fetchBuyers()
                        }

                        if (mode === 'new') {
                            this.sale.buyer = {
                                id: null,
                                name: '',
                                whatsapp_number: ''
                            }
                        }
                    },
                    fetchBuyers() {
                        fetch('/api/buyers')
                            .then(res => res.json())
                            .then(data => this.buyers = data)
                    },

                    filterBuyers() {
                        const key = this.searchBuyer.toLowerCase()
                        this.filteredBuyers = this.buyers.filter(b =>
                            b.name.toLowerCase().includes(key)
                        )
                    },

                    selectBuyer(buyer) {
                        this.sale.buyer = {
                            id: buyer.id,
                            name: buyer.name,
                            whatsapp_number: buyer.whatsapp_number
                        }

                        this.searchBuyer = buyer.name
                        this.filteredBuyers = []
                        this.isNewBuyer = false
                    },
                    totalHargaPerSale(sale) {
                        return sale.items?.reduce((sum, item) => {
                            return sum + ((item.final_price || 0) * (item.quantity || 0));
                        }, 0);
                    },
                    onTotalPaidInput(value) {
                        const numeric = parseInt(value.replace(/\D/g, '')) || 0
                        this.sale.total_paid = numeric
                    },
                    formatPrice(value) {
                        if (!value) return ''
                        return parseFloat(value).toLocaleString('id-ID')
                    },
                    parsePrice(value) {
                        return parseFloat(value.replace(/\./g, '').replace(',', '.')) || 0
                    },
                    onOriginalPriceInput(event, item) {
                        const value = event.target.value
                        item.original_price = this.parsePrice(value)
                        this.calculateSubtotal(item)
                    },
                    // Kalau pakai final_price juga:
                    onFinalPriceInput(event, item) {
                        const value = event.target.value
                        item.final_price = this.parsePrice(value)
                        this.calculateSubtotal(item)
                    },
                    fetchProducts() {
                        fetch('/api/products?is_habis=0').then(res => res.json()).then(data => this.products = data)
                    },
                    fetchSizes() {
                        fetch('/api/sizes').then(res => res.json()).then(data => this.sizes = data)
                    },
                    fetchSales() {
                        fetch('/api/sales').then(res => res.json()).then(data => {
                            console.log(data);

                            this.sales = data
                            console.log(this.sales);

                        })
                    },
                    formatRupiah(value) {
                        return new Intl.NumberFormat('id-ID', {
                            style: 'currency',
                            currency: 'IDR'
                        }).format(value)
                    },
                    addItem() {
                        this.sale.items.push({
                            product_id: '',
                            size_id: '',
                            original_price: 0,
                            final_price: 0,
                            discount_per_item: 0,
                            quantity: 1,
                            subtotal: 0,
                            sizes: [] // 🔥 khusus item ini

                        });
                    },
                    removeItem(i) {
                        this.sale.items.splice(i, 1)
                    },
                    updateProduct(item) {
                        item.size_id = ''
                        item.sizes = []

                        fetch(`/api/products/${item.product_id}/sizes`)
                            .then(res => res.json())
                            .then(data => {
                                item.sizes = data
                            })
                        const product = this.products.find(p => p.id === item.product_id)
                        if (product) {
                            item.original_price = product.price
                            item.final_price = product.price
                            this.calculateSubtotal(item)
                        }
                    },
                    calculateSubtotal(item) {
                        item.discount_per_item = item.original_price - item.final_price
                        item.subtotal = item.final_price * item.quantity

                    },
                    editSale(sale) {

                        this.isEdit = true
                        this.buyerMode = null // NONAKTIF

                        // Clone data
                        this.sale = JSON.parse(JSON.stringify(sale))

                        this.sale.buyer = this.sale.buyer || {
                            name: '',
                            whatsapp_number: ''
                        }

                        this.sale.items = sale.items.map(item => ({
                            ...item,
                            discount_per_item: item.original_price - item.final_price,
                            subtotal: item.final_price * item.quantity
                        }))

                        this.editingId = sale.id

                        const modal = new bootstrap.Modal(document.getElementById('saleModal'))
                        modal.show()
                    },


                    deleteSale(id) {
                        if (confirm("Yakin ingin menghapus penjualan ini?")) {
                            fetch(`/api/sales/${id}`, {
                                    method: 'DELETE'
                                }).then(res => res.json())
                                .then(res => {
                                    if (res.success) {
                                        alert(res.message)
                                        this.fetchSales()
                                    } else {
                                        alert('Gagal: ' + res.message)
                                    }
                                })
                        }
                    },

                    submitSale() {
                        const method = this.editingId ? 'PUT' : 'POST'
                        const url = this.editingId ? `/api/sales/${this.editingId}` : '/api/sales'

                        fetch(url, {
                                method,
                                headers: {
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify(this.sale)
                            }).then(res => res.json())
                            .then(res => {
                                console.log(res.data);

                                if (res.success) {
                                    alert(res.message)
                                    bootstrap.Modal.getInstance(document.getElementById('saleModal')).hide()
                                    this.fetchSales()
                                    this.showForm()
                                } else {
                                    alert('Gagal menyimpan: ' + res.message)
                                }
                            })
                    },
                    showForm() {
                        this.isEdit = false
                        this.editingId = null
                        this.buyerMode = null

                        this.sale = {
                            sale_date: new Date().toISOString().substr(0, 10),
                            payment_method: 'cash',
                            total_paid: 0,
                            buyer: {
                                id: null,
                                name: '',
                                whatsapp_number: ''
                            },
                            items: []
                        }

                        this.addItem()
                    }




                },



            }).mount('#app')
        </script>

        @endpush