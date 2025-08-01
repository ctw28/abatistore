@extends('admin.template')
<!-- pastikan adminlte layout sudah disiapkan -->
@section('title', 'Produk Tambah')

@section('content')
<div id="app" class="container mt-4">
    <div class="card">
        <div class="card-header">Tambah Produk</div>
        <div class="card-body">
            <form @submit.prevent="submitProduct" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input v-model="name" type="text" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <select v-model="category_id" class="form-select">
                        <option>Pilih Kategori</option>
                        <option v-for="kategori in kategoriList" :value="kategori.id">@{{ kategori.name }}</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea v-model="description" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input v-model="price" type="number" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Gambar Utama</label>
                    <input type="file" @change="handleMainImage" class="form-control">
                    <div v-if="mainImagePreview" class="mt-2">
                        <img :src="mainImagePreview" class="img-thumbnail" style="max-height: 200px;" />
                    </div>
                </div>

                <!-- Gambar Pendukung -->
                <div class="mb-3">
                    <label for="extraImages">Gambar Pendukung</label>
                    <input type="file" class="form-control" multiple @change="handleExtraImages">
                    <div class="row mt-2">
                        <div class="col-md-3 mb-2" v-for="(img, index) in extraImagePreviews" :key="index">
                            <div class="position-relative">
                                <img :src="img.url" class="img-thumbnail" style="height: 150px; object-fit: cover;">
                                <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0"
                                    @click="removeExtraImage(index)">x</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Link Shopee</label>
                    <textarea v-model="link_shopee" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script>
    const {
        createApp
    } = Vue

    createApp({
        data() {
            return {
                name: '',
                category_id: '',
                price: '',
                description: '',
                mainImage: null,
                mainImagePreview: null,

                extraImages: [],
                extraImagePreviews: [],

                kategoriList: [] // isi dari API kategori
            }
        },
        methods: {
            async loadKategori() {
                const res = await fetch("{{route('categories')}}", {
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('jwt')
                    }
                })
                this.kategoriList = await res.json()
            },
            handleMainImage(e) {
                const file = event.target.files[0];
                this.mainImage = file;
                this.mainImagePreview = URL.createObjectURL(file);
            },
            handleExtraImages(e) {
                const files = Array.from(event.target.files);
                this.extraImages.push(...files);
                files.forEach(file => {
                    this.extraImagePreviews.push({
                        file,
                        url: URL.createObjectURL(file)
                    });
                });
            },
            removeExtraImage(index) {
                this.extraImages.splice(index, 1);
                this.extraImagePreviews.splice(index, 1);
            },
            submitProduct() {
                const formData = new FormData();
                formData.append('name', this.name);
                formData.append('category_id', this.category_id);
                formData.append('price', this.price);
                formData.append('link_shopee', this.link_shopee);
                formData.append('description', this.description ?? '');

                if (this.mainImage) {
                    formData.append('image', this.mainImage);
                }

                if (this.extraImages && this.extraImages.length) {
                    for (let i = 0; i < this.extraImages.length; i++) {
                        formData.append('images[]', this.extraImages[i]);
                    }
                }

                fetch("{{route('product.store')}}", {
                        method: 'POST',
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('jwt') // jika pakai auth
                        },
                        body: formData
                    })
                    .then(res => {
                        console.log(res);
                        res.json()
                    })
                    .then(res => {
                        alert('Produk berhasil disimpan!');
                        window.location.href = "{{ route('product.data') }}";
                        console.log(res);
                        // reset form atau redirect
                    })
                    .catch(err => {
                        console.error(err);
                        alert('Gagal menyimpan produk');
                    });
            }
        },
        mounted() {
            this.loadKategori()
        }
    }).mount('#app')
</script>
@endpush