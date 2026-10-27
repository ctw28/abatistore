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
                <hr>

                <h5 class="mb-3">

                    Tag Produk

                </h5>

                <div v-for="group in tags" :key="group.group" class="mb-3">

                    <label class="form-label fw-bold">

                        @{{ group.group }}

                    </label>

                    <div>

                        <div class="form-check form-check-inline" v-for="tag in group.tags" :key="tag.id">

                            <input class="form-check-input" type="checkbox" :id="'tag'+tag.id" :value="tag.id"
                                v-model="selectedTags">

                            <label class="form-check-label" :for="'tag'+tag.id">

                                @{{ tag.name }}

                            </label>

                        </div>

                    </div>

                </div>

                <hr>
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
            tags: [],
            selectedTags: [],
            kategoriList: [] // isi dari API kategori
        }
    },
    methods: {
        async loadTags() {

            const res = await fetch('/api/tags/grouped', {

                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('jwt')
                }

            });

            this.tags = await res.json();

        },
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
        async submitProduct() {
            const formData = new FormData();

            formData.append('name', this.name);
            formData.append('category_id', this.category_id);
            formData.append('price', this.price);
            formData.append('description', this.description || '');
            formData.append('link_shopee', this.link_shopee || '');

            this.selectedTags.forEach(tag => {
                formData.append('tags[]', tag);
            });

            if (this.mainImage) {
                formData.append('image', this.mainImage);
            }

            this.extraImages.forEach(image => {
                formData.append('images[]', image);
            });

            try {
                const response = await fetch(
                    "{{ route('product.store') }}", {
                        method: 'POST',
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('jwt'),
                            'Accept': 'application/json'
                        },
                        body: formData
                    }
                );

                const result = await response.json();

                if (!response.ok) {
                    const errors = result.errors ?
                        Object.values(result.errors).flat().join('\n') :
                        result.message || 'Gagal menyimpan produk';

                    throw new Error(errors);
                }

                alert(result.message || 'Produk berhasil disimpan!');
                window.location.href = "{{ route('product.data') }}";

            } catch (error) {
                console.error('Gagal menyimpan produk:', error);
                alert('Gagal menyimpan produk:\n' + error.message);
            }
        },
    },
    mounted() {
        this.loadKategori()
        this.loadTags();

    }
}).mount('#app')
</script>
@endpush