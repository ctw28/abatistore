<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ABATI STORE KENDARI - AGEN FADKHERA</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('logo-only.png')}}" />
    <!-- Font Awesome icons (free version)-->
    <!-- <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css"
        integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('/')}}css/styles.css" rel="stylesheet" />
    <link href="{{asset('/')}}assets/fontawesome/css/font-awesome.css" rel="stylesheet" />
    <style>
        .btn-bounce {
            display: inline-block;
            padding: 12px 24px;
            color: white;
            font-weight: bold;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
            animation: bounce 1.5s infinite;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-6px);
            }
        }

        .btn-shake {
            display: inline-block;
            color: white;
            font-weight: bold;
            text-decoration: none;
            animation: shake 5.5s infinite;
        }

        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-3px);
            }

            50% {
                transform: translateX(3px);
            }

            75% {
                transform: translateX(-3px);
            }
        }

        header.masthead {
            padding-top: 3rem;
        }
    </style>
</head>

<body id="page-top">
    <div id="app">
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <h1>@{{selectedProduct.name}}</h1>
                <!-- Galeri Utama -->
                <div class="position-relative">
                    <img :src="getImageUrl(activeImage)" class="img-fluid mb-3 rounded shadow"
                        style="object-fit: contain;" alt="Gambar Produk">

                    <!-- Tombol navigasi manual -->
                    <button @click="prevImage"
                        class="btn btn-sm btn-light position-absolute top-50 start-0 translate-middle-y">
                        <i class="fa fa-chevron-left"></i>
                    </button>
                    <button @click="nextImage"
                        class="btn btn-sm btn-light position-absolute top-50 end-0 translate-middle-y">
                        <i class="fa fa-chevron-right"></i>
                    </button>
                </div>

                <!-- Thumbnail Preview -->
                <div class="d-flex justify-content-center gap-2 mt-2 flex-wrap">
                    <img v-for="(img, index) in allImages" :key="index" :src="getImageUrl(img)"
                        @click="activeImageIndex = index" class="rounded"
                        style="width: 60px; height: 60px; object-fit: cover; cursor: pointer; border: 2px solid #ddd;"
                        :class="{ 'border-primary': index === activeImageIndex }" />
                </div>
                <a :href="getWhatsappLink(selectedProduct.name)" @click="trackWhatsAppClick(selectedProduct.name)"
                    target="_blank" class="btn btn-success my-3 me-2">
                    <i class="fa fa-whatsapp me-1"></i> Info / Pemesanan
                </a>
                <a v-if="selectedProduct.is_habis" :href="getWhatsappLinkPO(selectedProduct.name)"
                    @click="trackWhatsAppClick(selectedProduct.name)" target="_blank" class="btn btn-secondary">
                    <i class="fa fa-whatsapp me-1"></i> Ajukan PO
                </a>
                <a v-if="!selectedProduct.is_habis" :href="getWhatsappLinkPOUkuran(selectedProduct.name)"
                    @click="trackWhatsAppClick(selectedProduct.name)" target="_blank" class="btn btn-secondary">
                    <i class="fa fa-whatsapp me-1"></i> Request Ukuran
                </a>
                <p><strong>Harga:</strong> @{{ formatRupiah(selectedProduct.price) }}</p>
                Ukuran tersedia
                <ul class="list-group">
                    <li class="list-group-item" v-for="stock in selectedProduct.stocks" :key="stock.size.id">
                        @{{ stock.size.name }}: @{{ stock.stock }}
                    </li>
                </ul>
            </div>

        </section>
    </div>
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; ABATI STORE - AGEN RESMI FADKHERA 2025</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i
                            class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <!-- Modal untuk Detail Produk -->


    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script>
        const {
            createApp
        } = Vue;

        createApp({
            data() {
                return {
                    featuredProducts: [],
                    otherProducts: [],
                    selectedProduct: {},
                    activeImageIndex: 0,
                    slideInterval: null,
                    productId: null

                }
            },
            mounted() {
                this.productId = this.getProductIdFromUrl();
                this.fetchProducts();
            },
            computed: {

                allImages() {
                    // Gabungkan gambar utama + gambar pendukung
                    if (!this.selectedProduct) return [];
                    const main = this.selectedProduct.image ? [this.selectedProduct.image] : [];
                    const others = this.selectedProduct.images?.map(img => img.image) || [];
                    return main.concat(others);
                },
                activeImage() {
                    return this.allImages[this.activeImageIndex] || '';
                }
            },

            methods: {
                trackWhatsAppClick(productName) {
                    if (typeof gtag === 'function') {
                        gtag('event', 'click_whatsapp', {
                            'event_category': 'Engagement',
                            'event_label': productName,
                        });
                    }
                },
                getWhatsappLink(productName) {
                    const phoneNumber = '6285241800852'; // ganti dengan nomor WA kamu tanpa +
                    const message =
                        `Halo, saya tertarik dengan produk fadkhera - ${productName}. Apakah masih tersedia?`;
                    return `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
                },
                getWhatsappLinkPO(productName) {
                    const phoneNumber = '6285241800852'; // ganti dengan nomor WA kamu tanpa +
                    const message =
                        `Halo, saya tertarik dengan produk fadkhera - ${productName} Namun Sudah habis. Apakah bisa PO?`;
                    return `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
                },
                getWhatsappLinkPOUkuran(productName) {
                    const phoneNumber = '6285241800852'; // ganti dengan nomor WA kamu tanpa +
                    const message =
                        `Halo, saya tertarik dengan produk fadkhera - ${productName} Namun Ukuran saya kosong. Apakah bisa request ukuran?`;
                    return `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
                },
                nextImage() {
                    this.activeImageIndex = (this.activeImageIndex + 1) % this.allImages.length;
                },
                prevImage() {
                    this.activeImageIndex = (this.activeImageIndex - 1 + this.allImages.length) % this.allImages
                        .length;
                },
                startSlide() {
                    this.slideInterval = setInterval(() => {
                        this.nextImage();
                    }, 5000); // 3 detik
                },
                stopSlide() {
                    clearInterval(this.slideInterval);
                },
                openModal(product) {
                    this.selectedProduct = product;
                    this.activeImageIndex = 0;
                    this.startSlide();
                    const modal = new bootstrap.Modal(document.getElementById('productModal'));
                    modal.show();
                },
                getProductIdFromUrl() {
                    const segments = window.location.pathname.split('/');
                    return segments[segments.length - 1]; // karena terakhir biasanya "edit"
                },
                async fetchProducts() {
                    let url = "{{route('product.show',':id')}}"
                    url = url.replace(':id', this.productId)
                    fetch(url)
                        .then(res => res.json())
                        .then(data => {
                            this.selectedProduct = data;

                        });
                },
                getImageUrl(path) {
                    return path ? `/storage/${path}` : '/images/no-image.png';
                },
                formatRupiah(value) {
                    const number = Number(value);
                    if (isNaN(number)) return value;
                    return 'Rp ' + number.toLocaleString('id-ID');
                },
            },
            beforeUnmount() {
                this.stopSlide();
            }
        }).mount('#app');
    </script>
</body>

</html>