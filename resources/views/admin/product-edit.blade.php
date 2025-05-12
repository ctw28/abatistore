@extends('admin.template')
<!-- pastikan adminlte layout sudah disiapkan -->
@section('title', 'Edit Produk')

@section('content')
<div id="app">
    <h3>Edit Produk</h3>

    <form @submit.prevent="updateProduct">
        <div>
            <label>Nama Produk</label>
            <input v-model="form.name" type="text" class="form-control">
        </div>

        <div>
            <label>Harga</label>
            <input v-model="form.price" type="number" class="form-control">
        </div>

        <div>
            <label>Kategori</label>
            <select v-model="form.category_id" class="form-select">
                <option v-for="cat in categories" :value="cat.id">@{{ cat.name }}</option>
            </select>
        </div>

        <div>
            <label>Deskripsi</label>
            <textarea v-model="form.description" class="form-control"></textarea>
        </div>

        <div>
            <label>Gambar Utama</label>
            <input type="file" @change="handleMainImage">
            <div v-if="form.image_preview">
                <img :src="form.image_preview" style="max-width: 100px;">
            </div>
        </div>

        <div>
            <label>Gambar Pendukung</label>
            <input type="file" multiple @change="handleSupportImages">
        </div>

        <div class="row mt-2">
            <div class="col-md-3 mb-3" v-for="img in form.images" :key="img.id">
                <img :src="getImageUrl(img.image)" class="img-fluid">
                <button class="btn btn-sm btn-danger mt-1" @click.prevent="deleteImage(img.id)">Hapus</button>
            </div>
        </div>

        <button class="btn btn-primary mt-3" type="submit">Simpan</button>
    </form>
</div>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
<script>
new Vue({
    el: '#app',
    delimiters: ['@{{', '}}'],
    data() {
        return {
            form: {
                name: '',
                price: '',
                description: '',
                category_id: '',
                image: null,
                image_preview: '',
                support_images: [],
                images: []
            },
            categories: [],
            productId: null // <- bisa kamu sesuaikan
        };
    },
    mounted() {
        this.productId = this.getProductIdFromUrl();

        this.fetchProduct();
        this.fetchCategories();
    },
    methods: {
        getProductIdFromUrl() {
            const segments = window.location.pathname.split('/');
            return segments[segments.length - 2]; // karena terakhir biasanya "edit"
        },
        fetchProduct() {
            let url = "{{route('product.show',':id')}}"
            url = url.replace(':id', this.productId)
            fetch(url)
                .then(res => res.json())
                .then(data => {
                    this.form.name = data.name;
                    this.form.price = data.price;
                    this.form.description = data.description;
                    this.form.category_id = data.category_id;
                    this.form.images = data.images;
                    this.form.image_preview = this.getImageUrl(data.image);
                });
        },
        fetchCategories() {
            fetch("{{route('categories')}}")
                .then(res => res.json())
                .then(data => this.categories = data);
        },
        getImageUrl(path) {
            return path ? `/storage/${path}` : '/images/no-image.png';
        },
        handleMainImage(e) {
            const file = e.target.files[0];
            this.form.image = file;
            this.form.image_preview = URL.createObjectURL(file);
        },
        handleSupportImages(e) {
            this.form.support_images = Array.from(e.target.files);
        },
        deleteImage(id) {
            if (!confirm('Yakin hapus gambar ini?')) return;
            let url = "{{route('product.images.destroy',':id')}}"
            url = url.replace(':id', id)
            fetch(url, {
                    method: 'DELETE'
                })
                .then(() => {
                    this.form.images = this.form.images.filter(img => img.id !== id);
                });
        },
        updateProduct() {
            const formData = new FormData();
            formData.append('name', this.form.name);
            formData.append('price', this.form.price);
            formData.append('category_id', this.form.category_id);
            formData.append('description', this.form.description);

            if (this.form.image) {
                formData.append('image', this.form.image);
            }

            this.form.support_images.forEach(file => {
                formData.append('images[]', file);
            });

            let url = "{{route('product.update',':id')}}"
            url = url.replace(':id', this.productId)
            fetch(url, {
                    method: 'POST',
                    body: formData
                })
                .then(res => res.json())
                .then(() => {
                    alert('Produk berhasil diperbarui!');
                    window.location.href = "{{ route('product.data') }}";

                });
        }
    }
});
</script>


@endpush