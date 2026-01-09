@extends('admin.template')
@section('title', 'Penjualan')

@section('content')
<div id="app" class="container-fluid">
    <div class="mt-4">
        <h5>Total Semua Penjualan: Rp @{{ totalSemuaPenjualan.toLocaleString() }}</h5>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Daftar Penjualan</h3>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#saleModal" @click="resetForm">
            + Tambah Penjualan
        </button>

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
            <tr v-for="(sale,index) in sales" :key="sale.id">
                <td class="text-center">@{{ index+1 }}</td>
                <td>@{{ sale.sale_date }}</td>
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
        </tbody>
    </table>

    <!-- Modal Bootstrap -->
    <!-- Modal Bootstrap -->
    <div class="modal fade" id="saleModal" tabindex="-1" aria-labelledby="saleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <form @submit.prevent="submitSale">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Penjualan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <h5 class="mb-2">Data Pembeli</h5>

                        <div class="row mb-3">
                            <div class="col-md-8">
                                <label>Cari Pembeli Lama</label>
                                <input type="text" class="form-control" v-model="searchBuyer" @input="filterBuyers"
                                    placeholder="Ketik nama...">

                                <!-- hasil search -->
                                <ul class="list-group" v-if="filteredBuyers.length">
                                    <li class="list-group-item" v-for="b in filteredBuyers" @click="selectBuyer(b)"
                                        style="cursor:pointer">
                                        @{{ b.name }} - @{{ b.whatsapp_number }}
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-4 d-flex align-items-end">
                                <button class="btn btn-outline-primary" @click.prevent="isNewBuyer=true">
                                    + Pembeli Baru
                                </button>
                            </div>
                        </div>

                        <!-- Form pembeli baru -->
                        <div v-if="isNewBuyer" class="row mb-3">
                            <div class="col-md-6">
                                <label>Nama Pembeli</label>
                                <input class="form-control" v-model="sale.buyer.name">
                            </div>
                            <div class="col-md-6">
                                <label>No WA</label>
                                <input class="form-control" v-model="sale.buyer.whatsapp_number">
                            </div>
                        </div>

                        <!-- Form -->
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" v-model="sale.sale_date">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Pembayaran</label>
                                <select class="form-control" v-model="sale.payment_method">
                                    <option value="cash">Cash</option>
                                    <option value="transfer">Transfer</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Total Dibayar</label>
                                <input type="text" class="form-control" :value="formattedTotalPaid"
                                    @input="onTotalPaidInput($event.target.value)">

                            </div>


                        </div>

                        <hr>

                        <h5>Item Produk</h5>
                        <small class="form-text text-muted">
                            Total harga seluruhnya: Rp @{{ totalHarga.toLocaleString('id-ID') }}
                        </small>

                        <table class="table table-sm table-bordered">
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
                                            <option v-for="p in products" :value="p.id">@{{ p.name }}</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control" v-model="item.size_id">
                                            <option disabled value="">--</option>
                                            <option v-for="s in sizes" :value="s.id">@{{ s.name }}</option>
                                        </select>
                                    </td>
                                    <td><input type="number" class="form-control" v-model.number="item.quantity"
                                            @input="calculateSubtotal(item)"></td>
                                    <td>
                                        <input type="text" class="form-control"
                                            :value="formatPrice(item.original_price)"
                                            @input="onOriginalPriceInput($event, item)">
                                    </td>


                                    <td>
                                        <input type="text" class="form-control" :value="formatPrice(item.final_price)"
                                            @input="onFinalPriceInput($event, item)">
                                    </td>


                                    <td>@{{ item.subtotal.toLocaleString('id-ID') }}</td>
                                    <td><button class="btn btn-sm btn-danger" @click.prevent="removeItem(i)">✖</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button class="btn btn-primary btn-sm" @click.prevent="addItem">+ Item</button>

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
                    name: '',
                    whatsapp_number: ''
                },
                items: []
            },
            buyers: [],
            searchBuyer: '',
            filteredBuyers: [],
            isNewBuyer: false,

        }
    },
    mounted() {
        this.fetchProducts();
        this.fetchSizes();
        this.fetchSales();
        this.addItem();
        this.fetchBuyers()

    },
    computed: {
        totalSemuaPenjualan() {
            return this.sales.reduce((total, sale) => {
                const totalPerSale = sale.items.reduce((subtotal, item) => {
                    return subtotal + (parseInt(item.final_price) * parseInt(item.quantity) ||
                        0);
                }, 0);
                return total + totalPerSale;
            }, 0);
        },
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
            fetch('/api/products').then(res => res.json()).then(data => this.products = data)
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
                subtotal: 0
            });
        },
        removeItem(i) {
            this.sale.items.splice(i, 1)
        },
        updateProduct(item) {
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
            // Clone data sale
            this.sale = JSON.parse(JSON.stringify(sale))

            // Pastikan buyer selalu ada
            this.sale.buyer = this.sale.buyer || {
                id: null,

                name: '',
                wa_number: ''
            }

            // Siapkan ulang item dengan tambahan perhitungan
            this.sale.items = sale.items.map(item => ({
                ...item,
                discount_per_item: item.original_price - item.final_price,
                subtotal: item.final_price * item.quantity
            }))

            this.editingId = sale.id

            // Tampilkan modal edit
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
                        this.resetForm()
                    } else {
                        alert('Gagal menyimpan: ' + res.message)
                    }
                })
        },
        resetForm() {
            this.editingId = null
            this.sale = {
                sale_date: new Date().toISOString().substr(0, 10),
                payment_method: 'cash',
                total_paid: 0,
                buyer: {
                    name: '',
                    whatsapp_number: ''
                },
                items: []
            }
            this.addItem()
        },



    },
    watch: {
        'sale.items': {
            handler() {
                const total = this.totalHarga;
                if (!this.sale.total_paid || this.sale.total_paid === 0) {
                    this.sale.total_paid = total;
                }
            },
            deep: true,
            immediate: true
        },

    },


}).mount('#app')
</script>

@endpush