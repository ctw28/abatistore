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
    <link href="css/styles.css" rel="stylesheet" />
    <link href="assets/fontawesome/css/font-awesome.css" rel="stylesheet" />
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
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-71X4PVE1XD"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-71X4PVE1XD');
    </script>
</head>

<body id="page-top">
    <div id="app">

        <!-- Navigation-->
        <!-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container text-center">
                <a class="navbar-brand text-center" style="font-size: 14px;" href="#page-top">ABATI STORE - AGEN
                    FADKHERA
                    KENDARI</a>
            </div>
        </nav> -->
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <img src="{{asset('logo-with-fadkhera.png')}}" class="mb-4" width="200">
                <div class="masthead-subheading">Pakaian adalah Akhlak!</div>
                <div class="masthead-heading text-uppercase">Berikan yang <span
                        style="color:rgb(250, 255, 174)"><b>terbaik</b></span> dalam
                    <span style="color:rgb(250, 255, 174)">ibadah</span> dan <span
                        style="color:rgb(250, 255, 174)">keseharianmu</span>
                </div>
                <a class="btn btn-danger btn-xl text-uppercase btn-bounce" href="#portfolio"><i
                        class="fa fa-angle-double-down me-1"></i>Lihat Katalog</a>
                <br>
                <br>
                <a class="btn btn-info text-uppercase me-2" href="https://wa.me/message/A6U3BRVQCID3K1"><i
                        class="fa fa-whatsapp me-1"></i> Admin</a>
                <a class="btn btn-info text-uppercase" href="https://www.instagram.com/fadkhera.kendari/"
                    target="_blank"><i class="fa fa-instagram me-1"></i>Instagram</a>
                <br><br>
                <a class="btn btn-info text-uppercase" href="https://maps.app.goo.gl/czDzXeGqrUQXefoBA"
                    target="_blank"><i class="fa fa-map-marker me-1"></i> Lokasi Kami</a>

            </div>
        </header>

        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">READY STOK!</h2>
                    <h3 class="section-subheading text-muted">Klik gambar untuk detail</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4" v-for="product in featuredProducts"
                        :key="product.id" style="border: 1px solid #e9e9e9;">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item  position-relative">
                            <div style="position: absolute; top: 0px; right: 5px; z-index: 10;">
                                <span class="badge bg-info" style="font-size: 0.6rem;">Ready Stok</span>
                            </div>
                            <a class="portfolio-link" href="#" @click.prevent="openModal(product)">


                                <img class="img-fluid" :src="getImageUrl(product.image)" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">[@{{ product.category.name }}]
                                    @{{ product.name }}
                                </div>
                                <p class="mb-2 text-muted" style="font-size: 0.6rem;">
                                    <i class="fa fa-tags me-1 text-success"></i>
                                    <strong class="me-2">@{{ formatRupiah(product.price) }}</strong>
                                    <br>

                                </p>
                                <!-- <button class="btn btn-success btn-sm mb-1 text-uppercase" data-bs-dismiss="modal"
                                type="button">
                                <i class="fa fa-whatsapp me-1"></i>
                                Order WA
                            </button> -->

                            </div>
                        </div>
                    </div>

                    <div v-for="product in otherProducts" :key="product.id" class="col-lg-3 col-sm-6 col-6 mb-4"
                        style="border: 1px solid #e9e9e9;">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item  position-relative">
                            <div style="position: absolute; top: 0px; right: 5px; z-index: 10;">
                                <span class="badge bg-info" style="font-size: 0.6rem;">Ready Stok</span>
                            </div>
                            <a class="portfolio-link" href="#" @click.prevent="openModal(product)">
                                <img class="img-fluid" :src="getImageUrl(product.image)" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">[@{{ product.category.name }}]
                                    @{{ product.name }}</div>
                                <p class="mb-2 text-muted" style="font-size: 0.6rem;">
                                    <i class="fa fa-tags me-1 text-success"></i>
                                    <strong class="me-2">@{{ formatRupiah(product.price) }}</strong>
                                    <br>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title">@{{ selectedProduct.name }}</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
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
                        <a :href="getWhatsappLink(selectedProduct.name)"
                            @click="trackWhatsAppClick(selectedProduct.name)" target="_blank"
                            class="btn btn-success my-3">
                            <i class="fa fa-whatsapp me-1"></i> Info / Pemesanan
                        </a>

                        <p><strong>Harga:</strong> @{{ formatRupiah(selectedProduct.price) }}</p>
                        Ukuran tersedia
                        <ul class="list-group">
                            <li class="list-group-item" v-for="stock in selectedProduct.stocks" :key="stock.size.id">
                                @{{ stock.size.name }}: @{{ stock.stock }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
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

            }
        },
        mounted() {
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
            async fetchProducts() {
                let url = "{{route('product.index')}}"
                const featured = await fetch(`${url}?is_featured=1`).then(res => res.json());
                const others = await fetch(`${url}?is_featured=0`).then(res => res.json());

                this.featuredProducts = featured;
                this.otherProducts = others;
            },
            getImageUrl(path) {
                return path ? `/storage/app/public/${path}` : '/images/no-image.png';
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