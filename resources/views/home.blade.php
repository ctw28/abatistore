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
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="assets/fontawesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

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

    .video-container {
        overflow-x: auto;
        display: flex;
        gap: 1rem;
        padding-bottom: 1rem;
    }

    .video-wrapper {
        min-width: 250px;
        flex: 0 0 auto;
    }

    @media (min-width: 768px) {
        .video-container {
            flex-wrap: wrap;
            justify-content: space-between;
            overflow-x: unset;
        }

        .video-wrapper {
            flex: 0 0 calc(33.33% - 1rem);
            min-width: unset;
        }
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
    <!-- Meta Pixel Code -->
    <script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '638215716027703');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=638215716027703&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
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
                <img src="{{asset('logo-with-fadkhera.png')}}" class="mb-4" width="150">
                <div class="masthead-subheading">Pakaian adalah Akhlak!</div>
                <div class="masthead-heading text-uppercase">Berikan yang <span
                        style="color:rgb(250, 255, 174)"><b>terbaik</b></span> dalam
                    <span style="color:rgb(250, 255, 174)">ibadah</span> dan <span
                        style="color:rgb(250, 255, 174)">keseharianmu</span>
                </div>
                <a class="btn btn-danger btn-xl text-uppercase btn-bounce" href="#portofolio"><i
                        class="fa fa-angle-double-down me-1"></i>Selengkapnya</a>
                <br>
                <br>
                <a class="btn btn-info text-uppercase me-2" @click="trackClickWaAdmin"
                    href="https://wa.me/message/A6U3BRVQCID3K1"><i class="fa fa-whatsapp me-1"></i> WA Admin</a>
                <a class="btn btn-info text-uppercase me-2" @click="trackClickIg"
                    href="https://www.instagram.com/fadkhera.kendari/" target="_blank"><i
                        class="fa fa-instagram me-1"></i>Instagram</a><br><br>
                <a class="btn btn-secondary text-uppercase" href="#seragam" @click="trackSeragamClick">Butuh
                    Seragam?</a>
                <br><br>
                <button class="btn btn-info text-uppercase" data-bs-toggle="modal" data-bs-target="#mapModal"><i
                        class="fa fa-map-marker me-1"></i> Lokasi Kami</button>

            </div>
        </header>
        <!-- Pastikan sudah menyertakan Font Awesome 6 -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="..." crossorigin="anonymous"> -->
        <!-- Section Keunggulan -->
        <section class="py-5 bg-light" id="portofolio">
            <div class="container">
                <h2 class="text-center mb-4">Kenapa Harus Fadkhera?</h2>


                <!-- Keunggulan -->
                <div class="row g-4">
                    <!-- 1 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="bg-white p-4 shadow rounded text-center h-100">
                            <img :src="getFile('/assets/design.webp')" alt="Desain Modern" class="mb-3"
                                style="width: 100%; height: auto;">
                            <h5 class="fw-semibold">Desain Modern & Syar'i</h5>
                            <p class="text-muted">Designnya membuatmu selalu tampil fresh dan tentunya tetap syar'i –
                                sangat cocok untuk ibadah, kerja, kajian, dan
                                lebaran.</p>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="bg-white p-4 shadow rounded text-center h-100">
                            <img :src="getFile('/assets/bahan.webp')" alt="Bahan Premium" class="mb-3"
                                style="width: 100%; height: auto;">
                            <h5 class="fw-semibold">Bahan Premium</h5>
                            <p class="text-muted">Shining – soft touch dengan material tebal dan adem, nyaman seharian.
                            </p>
                        </div>
                    </div>



                    <!-- 4 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="bg-white p-4 shadow rounded text-center h-100">
                            <img :src="getFile('/assets/potongan.webp')" alt="Modern Fit" class="mb-3"
                                style="width: 100%; height: auto;">
                            <h5 class="fw-semibold">Potongan Modern Fit</h5>
                            <p class="text-muted">Ukuran pas di badan, antara reguler dan slim fit – pas dan tetap
                                nyaman.
                            </p>
                        </div>
                    </div>

                    <!-- 5 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="bg-white p-4 shadow rounded text-center h-100">
                            <img :src="getFile('/assets/setrika.webp')" alt="Mudah Disetrika" class="mb-3"
                                style="width: 100%; height: auto;">
                            <h5 class="fw-semibold">Tidak Mudah Kusut</h5>
                            <p class="text-muted">Mudah di setrika dan Tidak mudah kusut – tetap rapi meski dipakai
                                beraktivitas seharian.
                            </p>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="bg-white p-4 shadow rounded text-center h-100">
                            <img :src="getFile('/assets/kerah.webp')" alt="Motif Eksklusif" class="mb-3"
                                style="width: 100%; height: auto;">
                            <h5 class="fw-semibold">Kerah Spread Collar</h5>
                            <p class="text-muted">Desain kerah baju yang memberi kesan rapi, gagah, dan elegan.
                            </p>
                        </div>
                    </div>
                    <!-- 6 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="bg-white p-4 shadow rounded text-center h-100">
                            <img :src="getFile('/assets/tokoh.jpeg')" alt="Dipercaya Tokoh" class="mb-3"
                                style="width: 100%; height: auto;">
                            <h5 class="fw-semibold">Dipercaya Ustadz & Tokoh Ternama</h5>
                            <p class="text-muted">Telah dipakai oleh banyak ustadz dan tokoh muslim ternama di
                                Indonesia.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- <section class="page-section bg-light">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">VIDEO</h2>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 mb-4" style="border: 1px solid #e9e9e9;">
                        <video controls class="w-100">
                            <source src="assets/video-1.mp4" type="video/webm" />
                            Browsermu tidak mendukung tag ini, upgrade donk!
                        </video>
                    </div>

                    <div class="col-12 col-md-4 mb-4" style="border: 1px solid #e9e9e9;">
                        <video controls class="w-100">
                            <source src="assets/video-2.mp4" type="video/webm" />
                            Browsermu tidak mendukung tag ini, upgrade donk!
                        </video>
                    </div>

                    <div class="col-12 col-md-4 mb-4" style="border: 1px solid #e9e9e9;">
                        <video controls class="w-100">
                            <source src="assets/video-3.mp4" type="video/webm" />
                            Browsermu tidak mendukung tag ini, upgrade donk!
                        </video>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="py-5 bg-black">
            <div class="container">
                <h2 class="text-center fw-bold mb-4 text-white">
                    Apa Kata Mereka <span class="text-warning">Tentang Fadkhera?</span>
                </h2>

                <div id="testimoniCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <!-- Testimoni 1 -->
                        <div class="carousel-item active text-center">
                            <img :src="getFile('/assets/testimoni/testi-1.jpeg')"
                                class="d-block mx-auto img-fluid rounded shadow" alt="Testimoni 1"
                                style="max-height: 600px; object-fit: contain;">
                        </div>
                        <div class="carousel-item text-center">
                            <img :src="getFile('/assets/testimoni/testi-11.jpeg')"
                                class="d-block mx-auto img-fluid rounded shadow" alt="Testimoni 11"
                                style="max-height: 600px; object-fit: contain;">
                        </div>
                        <div class="carousel-item text-center">
                            <img :src="getFile('/assets/testimoni/testi-7.jpeg')"
                                class="d-block mx-auto img-fluid rounded shadow" alt="Testimoni 7"
                                style="max-height: 600px; object-fit: contain;">
                        </div>
                        <!-- Testimoni 2 -->
                        <div class="carousel-item text-center">
                            <img :src="getFile('/assets/testimoni/testi-2.jpeg')"
                                class="d-block mx-auto img-fluid rounded shadow" alt="Testimoni 2"
                                style="max-height: 600px; object-fit: contain;">
                        </div>
                        <div class="carousel-item text-center">
                            <img :src="getFile('/assets/testimoni/testi-8.jpeg')"
                                class="d-block mx-auto img-fluid rounded shadow" alt="Testimoni 8"
                                style="max-height: 600px; object-fit: contain;">
                        </div>
                        <div class="carousel-item text-center">
                            <img :src="getFile('/assets/testimoni/testi-9.jpeg')"
                                class="d-block mx-auto img-fluid rounded shadow" alt="Testimoni 9"
                                style="max-height: 600px; object-fit: contain;">
                        </div>
                        <div class="carousel-item text-center">
                            <img :src="getFile('/assets/testimoni/testi-10.jpeg')"
                                class="d-block mx-auto img-fluid rounded shadow" alt="Testimoni 10"
                                style="max-height: 600px; object-fit: contain;">
                        </div>
                        <!-- Testimoni 3 -->
                        <div class="carousel-item text-center">
                            <img :src="getFile('/assets/testimoni/testi-3.jpeg')"
                                class="d-block mx-auto img-fluid rounded shadow" alt="Testimoni 3"
                                style="max-height: 600px; object-fit: contain;">
                        </div>
                        <div class="carousel-item text-center">
                            <img :src="getFile('/assets/testimoni/testi-4.jpeg')"
                                class="d-block mx-auto img-fluid rounded shadow" alt="Testimoni 4"
                                style="max-height: 600px; object-fit: contain;">
                        </div>
                        <div class="carousel-item text-center">
                            <img :src="getFile('/assets/testimoni/testi-5.jpeg')"
                                class="d-block mx-auto img-fluid rounded shadow" alt="Testimoni 5"
                                style="max-height: 600px; object-fit: contain;">
                        </div>
                        <div class="carousel-item text-center">
                            <img :src="getFile('/assets/testimoni/testi-6.jpeg')"
                                class="d-block mx-auto img-fluid rounded shadow" alt="Testimoni 6"
                                style="max-height: 600px; object-fit: contain;">
                        </div>




                    </div>

                    <!-- Navigasi Carousel -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimoniCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimoniCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </section>


        <!-- KATALOG -->
        <section class="page-section bg-light">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">KATALOG</h2>
                    <img :src="getFile('/assets/open.jpeg')" class="img mb-3" width="100%">

                    <h3 class="section-subheading text-muted">
                        <b>[Beli via WhatsApp]</b> — Cepat, bisa tanya langsung, cocok
                        untuk pembeli area Kendari.<br>
                        <b>[Beli via Shopee]</b> — Aman, ada gratis ongkir, pembayaran fleksibel, cocok untuk luar
                        kendari.
                    </h3>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 mb-4" v-for="product in featuredProducts" :key="product.id"
                        style="border: 1px solid #e9e9e9;">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item  position-relative">
                            <div style="position: absolute; top: 0px; right: 5px; z-index: 10;">
                                <span class="badge bg-info" style="font-size: 0.6rem;">Ready Stok</span>
                            </div>
                            <a class="portfolio-link" href="#"
                                @click.prevent="openModal(product); trackDetailClick(product)">
                                >


                                <img class="img-fluid" :src="getImageUrl(product.image)" alt="..." />
                                <!-- Overlay jika produk habis -->
                                <div v-if="parseInt(product.is_habis) === 1">
                                    class="position-absolute top-50 start-50 translate-middle d-flex
                                    justify-content-center align-items-center"
                                    style="width: 80px; height: 80px; border-radius: 50%; background-color: rgba(0, 0,
                                    0, 0.7); color: white; font-weight: bold; font-size: 0.8rem;">
                                    Habis
                                </div>
                            </a>
                            <div class="portfolio-caption text-center">
                                <div class="portfolio-caption-heading">[@{{ product.category.name }}]
                                    @{{ product.name }}
                                </div>
                                <!-- <button class="btn btn-success btn-sm mb-1 me-2 mt-1 text-uppercase" href="#"
                                    @click.prevent="openModal(product)">
                                    <i class="fa fa-info-circle me-1"></i>
                                    Detail
                                </button> -->
                                <a :href="getWhatsappLink(product.name)" @click="trackWhatsAppClick(product)"
                                    target="_blank" class="btn btn-success btn-sm my-1 me-2">
                                    <i class="fa fa-whatsapp me-1"></i> Beli di WA / Info
                                </a>
                                <a :href="product.link_shopee" @click="trackShopeeClick(product)"
                                    class="btn btn-sm mb-1 me-2 mt-1 text-uppercase"
                                    style="background-color: #f1582c; color: white;" target="_blank" rel="noopener">
                                    <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/shopee.svg"
                                        alt="Shopee Icon"
                                        style="width: 16px; height: 16px; margin-right: 6px; filter: brightness(0) invert(1);">
                                    Beli di Shopee
                                </a>

                                <!-- <a v-if="product.is_habis" :href="getWhatsappLinkPO(product.name)"
                                    @click="trackWhatsAppClick(selectedProduct.name)" target="_blank"
                                    class="btn btn-secondary btn-sm ">
                                    <i class="fa fa-whatsapp me-1"></i> Ajukan PO
                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div v-for="product in otherProducts" :key="product.id" class="col-6 col-md-4 mb-4"
                        style="border: 1px solid #e9e9e9;">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item  position-relative">
                            <div v-if="product.is_habis=='0'"
                                style="position: absolute; top: 0px; right: 5px; z-index: 10;">
                                <span class="badge bg-info" style="font-size: 0.6rem;">Ready Stok</span>
                            </div>
                            <a class="portfolio-link" href="#"
                                @click.prevent="openModal(product); trackDetailClick(product)">
                                >
                                <img class="img-fluid" :src="getImageUrl(product.image)" alt="..." />
                                <!-- Overlay jika produk habis -->
                                <div v-if="parseInt(product.is_habis) === 1">
                                    class="position-absolute top-50 start-50 translate-middle d-flex
                                    justify-content-center align-items-center"
                                    style="width: 80px; height: 80px; border-radius: 50%; background-color: rgba(0, 0,
                                    0, 0.7); color: white; font-weight: bold; font-size: 0.8rem;">
                                    Habis
                                </div>
                            </a>
                            <div class="portfolio-caption text-center">
                                <div class="portfolio-caption-heading">[@{{ product.category.name }}]
                                    @{{ product.name }}</div>
                                <a :href="getWhatsappLink(product.name)" @click="trackWhatsAppClick(product)"
                                    target="_blank" class="btn btn-success btn-sm my-1 me-2">
                                    <i class="fa fa-whatsapp me-1"></i> Beli di WA / Info
                                </a>
                                <a :href="product.link_shopee" @click="trackShopeeClick(product)"
                                    class="btn btn-sm mb-1 me-2 mt-1 text-uppercase"
                                    style="background-color: #f1582c; color: white;" target="_blank" rel="noopener">
                                    <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/shopee.svg"
                                        alt="Shopee Icon"
                                        style="width: 16px; height: 16px; margin-right: 6px; filter: brightness(0) invert(1);">
                                    Beli di Shopee
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section bg-light" id="seragam">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">SAATNYA OUTFIT TIM KALIAN NAIK KELAS DAN MAKIN KOMPAK!
                    </h2>

                </div>
                <div class="row">
                    <p>
                        <strong>Butuh Seragam (Model yang sama dalam jumlah banyak) untuk Keluarga/Komunitas/Rekan kerja
                            di momen
                            spesial</strong>? Percayakan
                        pada Produk Fadkhera. Dengan beragam pilihan
                        <strong>model dan design yang modern, memberi kalian semangat baru</strong>, sehingga momen
                        spesial kalian jadi lebih berkesan! <br>
                        <b>Dapatkan harga spesial untuk pembelian model yang sama dalam
                            jumlah banyak.</b>


                    </p>
                    <div class="col-6 col-md-3 col-lg-3 p-2 mb-2">
                        <img :src="getFile('/assets/seragam.webp')" class="img" width="100%">
                    </div>
                    <div class="col-6 col-md-3 col-lg-3 p-2 mb-2">
                        <img :src="getFile('/assets/seragam1.jpeg')" class="img" width="100%">
                    </div>
                    <div class="col-6 col-md-3 col-lg-3 p-2 mb-2">
                        <img :src="getFile('/assets/seragam2.jpeg')" class="img" width="100%">
                    </div>
                    <div class="col-6 col-md-3 col-lg-3 p-2 mb-2">
                        <img :src="getFile('/assets/seragam3.jpeg')" class="img" width="100%">
                    </div>
                    <div class="col-12 text-center">
                        <a :href=" getWhatsappLinkSeragam()" @click="trackSeragamClickWA" class="btn btn-success mt-2">
                            <i class="fa fa-whatsapp me-1"></i>Order Seragam Sekarang</a>
                    </div>
                </div>

            </div>

        </section>
        <!-- Modal Bootstrap -->
        <div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mapModalLabel">Lokasi Toko</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Embed Google Maps -->
                        <div class="ratio ratio-16x9">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m23!1m11!1m3!1d143.00770873843035!2d122.5114838009742!3d-3.998685335666983!2m2!1f0!2f1.6419434329974345!3m2!1i1024!2i768!4f50.84469958573552!4m9!3e0!4m3!3m2!1d-3.9986074!2d122.511354!4m3!3m2!1d-3.9986246!2d122.5113538!5e1!3m2!1sen!2suk!4v1754228293641!5m2!1sen!2suk"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!-- Alamat -->
                        <div class="mt-3">
                            <strong>Alamat:</strong><br>
                            Jalan La Ode Hadi, Lorong Satria / Lorong Al-Ikhlas (Sekitaran UMK / Belakang Fresh Mart
                            Bypass)<br>
                            Kec. Kadia, Kota Kendari
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                        <a :href="getWhatsappLink(selectedProduct.name)" @click="trackWhatsAppClick(selectedProduct)"
                            target="_blank" class="btn btn-success my-3 me-2">
                            <i class="fa fa-whatsapp me-1"></i> Beli di WA / Info
                        </a>
                        <a :href="selectedProduct.link_shopee" @click="trackShopeeClick(product)"
                            class="btn btn-sm mb-1 me-2 mt-1 text-uppercase"
                            style="background-color: #f1582c; color: white;" target="_blank" rel="noopener">
                            <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/shopee.svg"
                                alt="Shopee Icon"
                                style="width: 16px; height: 16px; margin-right: 6px; filter: brightness(0) invert(1);">
                            Beli di Shopee
                        </a>
                        <!-- <a v-if="selectedProduct.is_habis" :href="getWhatsappLinkPO(selectedProduct.name)"
                            @click="trackWhatsAppClick(selectedProduct.name)" target="_blank" class="btn btn-secondary">
                            <i class="fa fa-whatsapp me-1"></i> Ajukan PO
                        </a>
                        <a v-if="!selectedProduct.is_habis" :href="getWhatsappLinkPOUkuran(selectedProduct.name)"
                            @click="trackWhatsAppClick(selectedProduct.name)" target="_blank" class="btn btn-secondary">
                            <i class="fa fa-whatsapp me-1"></i> Request Ukuran
                        </a> -->
                        <p><strong>Harga:</strong> @{{ formatRupiah(selectedProduct.price) }}</p>
                        Ukuran tersedia
                        <ul class="list-group">
                            <li class="list-group-item" v-for="stock in selectedProduct.stocks" :key="stock.size.id">
                                @{{ stock.size.name }}
                                <!-- @{{ stock.stock }} -->
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
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: false,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: false,
    });
    </script>

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
            trackWhatsAppClick(product) {
                if (typeof fbq !== 'undefined') {
                    fbq('track', 'InitiateCheckout', {
                        content_ids: [product.id],
                        content_name: product.name,
                        content_type: 'product',
                        value: product.price,
                        currency: 'IDR'
                    });
                }
            },
            trackShopeeClick(product) {
                if (typeof fbq !== 'undefined') {
                    fbq('trackCustom', 'ShopeeClick', {
                        content_ids: [product.id],
                        content_name: product.name,
                        value: product.price,
                        currency: 'IDR'
                    });

                }
            },
            trackDetailClick(product) {
                if (typeof fbq !== 'undefined') {
                    fbq('trackCustom', 'DetailClick', {
                        content_ids: [product.id],
                        content_name: product.name,
                        value: product.price,
                        currency: 'IDR'
                    });

                }
            },
            trackSeragamClick() {
                if (typeof fbq !== 'undefined') {
                    fbq('trackCustom', 'SeragamClick');
                }
            },
            trackSeragamClickWA() {
                if (typeof fbq !== 'undefined') {
                    fbq('trackCustom', 'SeragamClickWA');
                }
            },
            trackClickWaAdmin() {
                if (typeof fbq !== 'undefined') {
                    fbq('trackCustom', 'WaAdminClick');
                }
            },
            trackClickIg() {
                if (typeof fbq !== 'undefined') {
                    fbq('trackCustom', 'IgClick');
                }
            },
            getWhatsappLink(productName) {
                const phoneNumber = '6285241800852'; // ganti dengan nomor WA kamu tanpa +
                const message =
                    `Bismillah, saya tertarik dengan produk fadkhera - ${productName}. Apakah masih tersedia?`;
                return `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
            },
            getWhatsappLinkPO(productName) {
                const phoneNumber = '6285241800852'; // ganti dengan nomor WA kamu tanpa +
                const message =
                    `Bismillah, saya tertarik dengan produk fadkhera - ${productName} Namun Sudah habis. Apakah bisa PO?`;
                return `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
            },
            getWhatsappLinkPOUkuran(productName) {
                const phoneNumber = '6285241800852'; // ganti dengan nomor WA kamu tanpa +
                const message =
                    `Bismillah, saya tertarik dengan produk fadkhera - ${productName} Namun Ukuran saya kosong. Apakah bisa request ukuran?`;
                return `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
            },
            getWhatsappLinkSeragam() {
                const phoneNumber = '6285241800852'; // ganti dengan nomor WA kamu tanpa +
                const message =
                    `Bismillah, saya ingin seragam untuk keluarga / komunitas. Bagaimana caranya?`;
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
                console.log(featured);
                console.log(others);

                this.featuredProducts = featured;
                this.otherProducts = others;
            },
            getImageUrl(path) {
                if (!path) return '/images/no-image.png'
                return `/storage/${path}`
            },

            getFile(path) {
                return path ? `${path}` : ''
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