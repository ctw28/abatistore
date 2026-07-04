@extends('admin.template')
@section('title', 'Dashboard')

@section('content')

<div id="app">

    {{-- FILTER --}}
    <div class="card mb-3">
        <div class="card-body">

            <div class="row">

                <div class="col-md-2">
                    <label>Tahun</label>

                    <select class="form-control" v-model="year">

                        <option v-for="y in years" :value="y">

                            @{{ y }}

                        </option>

                    </select>
                </div>

                <div class="col-md-2">
                    <label>Bulan</label>

                    <select class="form-control" v-model="month">

                        <option value="">
                            Semua Bulan
                        </option>

                        <option v-for="m in months" :value="m.id">

                            @{{ m.name }}

                        </option>

                    </select>

                </div>

                <div class="col-md-3">

                    <label>Kategori</label>

                    <select class="form-control" v-model="category_id">

                        <option value="">
                            Semua Kategori
                        </option>

                        <option v-for="item in categories" :value="item.id">

                            @{{ item.name }}

                        </option>

                    </select>

                </div>

                <div class="col-md-3">

                    <label>Urutkan</label>

                    <select class="form-control" v-model="sort">

                        <option value="name_asc">
                            Nama A-Z
                        </option>

                        <option value="name_desc">
                            Nama Z-A
                        </option>

                        <option value="stock_desc">
                            Total Stok Terbanyak
                        </option>

                        <option value="stock_asc">
                            Total Stok Tersedikit
                        </option>

                    </select>

                </div>

                <div class="col-md-2">

                    <label>&nbsp;</label>

                    <button class="btn btn-primary btn-block" @click="loadDashboard">

                        Filter

                    </button>

                </div>

            </div>

        </div>
    </div>

    {{-- SUMMARY --}}

    <div class="row">

        <div class="col-md-3">

            <div class="small-box bg-success">

                <div class="inner">

                    <h3>@{{ rupiah(summary.income) }}</h3>

                    <p>Total Penjualan</p>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="small-box bg-info">

                <div class="inner">

                    <h3>@{{ summary.transactions }}</h3>

                    <p>Jumlah Transaksi</p>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="small-box bg-warning">

                <div class="inner">

                    <h3>@{{ summary.items }}</h3>

                    <p>Produk Terjual</p>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="small-box bg-danger">

                <div class="inner">

                    <h3>@{{ summary.total_stock }}</h3>

                    <p>Total Stok Ready</p>

                </div>

            </div>

        </div>

    </div>

    {{-- STOK BERDASARKAN UKURAN --}}

    <div class="card">

        <div class="card-header">

            <strong>

                Stok Berdasarkan Ukuran

            </strong>

        </div>

        <div class="card-body p-0">

            <table class="table table-bordered mb-0">

                <thead>

                    <tr>

                        <th>Ukuran</th>

                        <th>Total</th>

                    </tr>

                </thead>

                <tbody>

                    <tr v-for="item in stockBySize">

                        <td>

                            @{{ item.name }}

                        </td>

                        <td>

                            @{{ item.total }}

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

    <br>

    {{-- STOK PRODUK --}}

    <div class="card">

        <div class="card-header">

            <strong>

                Stok Produk

            </strong>

        </div>

        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-bordered table-hover mb-0">

                    <thead>

                        <tr>
                            <th width="80">
                                Foto
                            </th>


                            <th>Produk</th>

                            <th class="text-center">

                                Total

                            </th>
                            <th v-for="size in sizes" class="text-center">

                                @{{ size.name }}

                            </th>


                        </tr>

                    </thead>

                    <tbody>

                        <tr v-for="product in products">

                            <td class="text-center">
                                <img :src="getImageUrl(product.image)" class="img-thumbnail"
                                    style="width:65px;height:65px;object-fit:cover;" />


                            </td>

                            <td>

                                <div class="fw-bold">

                                    @{{ product.name }}

                                </div>

                            </td>
                            <td class="text-center">

                                @{{ product.total }}
                            </td>
                            <td v-for="size in sizes" class="text-center fw-bold" :class="{

'bg-success text-white':
getStock(product,size.name)>0

}">

                                @{{ getStock(product,size.name) }}

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection


@push('scripts')

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
const app = Vue.createApp({

    data() {

        return {

            summary: {},

            stockBySize: [],

            products: [],

            sizes: [],

            categories: [],

            category_id: 1,

            sort: 'name_asc',

            year: new Date().getFullYear(),

            month: new Date().getMonth() + 1,

            years: [2024, 2025, 2026],

            months: [{
                    id: 1,
                    name: 'Januari'
                },
                {
                    id: 2,
                    name: 'Februari'
                },
                {
                    id: 3,
                    name: 'Maret'
                },
                {
                    id: 4,
                    name: 'April'
                },
                {
                    id: 5,
                    name: 'Mei'
                },
                {
                    id: 6,
                    name: 'Juni'
                },
                {
                    id: 7,
                    name: 'Juli'
                },
                {
                    id: 8,
                    name: 'Agustus'
                },
                {
                    id: 9,
                    name: 'September'
                },
                {
                    id: 10,
                    name: 'Oktober'
                },
                {
                    id: 11,
                    name: 'November'
                },
                {
                    id: 12,
                    name: 'Desember'
                }
            ]

        }

    },

    mounted() {

        this.loadCategories();

        this.loadDashboard();

    },

    methods: {

        loadCategories() {

            axios.get('/api/kategori')

                .then(res => {

                    this.categories = res.data;

                });

        },

        loadDashboard() {

            axios.get('/api/dashboard', {

                    params: {

                        year: this.year,

                        month: this.month,

                        category_id: this.category_id,

                        sort: this.sort

                    }

                })

                .then(res => {

                    this.summary = res.data.summary;

                    this.stockBySize = res.data.stockBySize;

                    this.products = res.data.products;

                    this.sizes = res.data.sizes;

                });

        },

        getStock(product, size) {

            const stock = product.stocks.find(x => x.size === size);

            return stock ? stock.stock : 0;

        },

        rupiah(v) {

            return new Intl.NumberFormat('id-ID', {

                style: 'currency',

                currency: 'IDR'

            }).format(v || 0);

        },
        getImageUrl(path) {
            return path ? `/storage/${path}` : '/images/no-image.png';
        },

    }

});

app.mount('#app');
</script>

@endpush