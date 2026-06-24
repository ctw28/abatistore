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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- custom css -->
    <link href="{{ asset('css/abati.css') }}" rel="stylesheet">
    <!-- jika online aktifkan analytics (Google Analytics & Meta Pixel) -->
    @if(app()->environment('production'))
    @include('admin.layouts.analytics')
    @endif
    <script>
    document.addEventListener("DOMContentLoaded", function() {

        let modal = new bootstrap.Modal(
            document.getElementById('infoModal')
        );

        setTimeout(function() {
            modal.show();
        }, 1000);

    });
    </script>
</head>

<body id="page-top">
    <div id="app">
        <header class="masthead">
            <div class="container">
                <img src="{{asset('logo-abati-store-white.png')}}" class="mb-1" width="150">
                <br><span style="text-transform: uppercase;">Agen Resmi <b>Fadkhera</b></span>
                <!-- <div class="masthead-subheading">Pakaian adalah Akhlak!</div> -->
                <div class="masthead-heading text-uppercase mt-4">Berikan yang <span
                        style="color:rgb(250, 255, 174)"><b>terbaik</b></span> dalam
                    <span style="color:rgb(250, 255, 174)">ibadah</span> dan <span
                        style="color:rgb(250, 255, 174)">keseharianmu</span>
                </div>
                <a class="btn btn-danger btn-xl text-uppercase btn-bounce" href="#portofolio"><i
                        class="fa fa-angle-double-down me-1"></i>Selengkapnya</a>

                <div class="d-flex flex-wrap justify-content-center gap-2 mt-3 mb-3">

                    <a class="btn btn-light text-uppercase" @click="trackClickWaAdmin"
                        href="https://wa.me/message/A6U3BRVQCID3K1">
                        <i class="fa fa-whatsapp me-1"></i> WA Admin
                    </a>

                    <a class="btn btn-light text-uppercase" @click="trackClickIg"
                        href="https://www.instagram.com/fadkhera.kendari/" target="_blank">
                        <i class="fa fa-instagram me-1"></i> Instagram
                    </a>

                    <a class="btn btn-light text-uppercase" @click="trackClickTiktok"
                        href="https://www.tiktok.com/@fadkhera.kendari" target="_blank">
                        <i class="fa fa-tiktok me-1"></i> Tiktok
                    </a>

                </div>
                <a class="btn btn-secondary text-uppercase me-2" href="#seragam" @click="trackSeragamClick">
                    <!-- <i class="bi bi-person-badge me-1"></i>  -->
                    Butuh
                    Seragam?
                </a>
                <button class="btn btn-info text-uppercase" data-bs-toggle="modal" data-bs-target="#mapModal"><i
                        class="fa fa-map-marker me-1"></i> Lokasi Toko</button>

            </div>
        </header>
        <section class="py-5 bg-light" id="portofolio">
            <div class="container">
                <h2 class="text-center mb-4">Kenapa Harus Fadkhera?</h2> <!-- Keunggulan -->
                <div class="row g-4">
                    <!-- 1 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="bg-white p-4 shadow rounded text-center h-100"> <img
                                :src="getFile('/assets/design.webp')" alt="Desain Modern" class="mb-3"
                                style="width: 100%; height: auto;">
                            <h5 class="fw-semibold">Desain Modern & Syar'i</h5>
                            <p class="text-muted">Designnya membuatmu selalu tampil fresh dan tentunya tetap syar'i –
                                sangat cocok untuk ibadah, kerja, kajian, dan lebaran.</p>
                        </div>
                    </div> <!-- 2 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="bg-white p-4 shadow rounded text-center h-100"> <img
                                :src="getFile('/assets/bahan.webp')" alt="Bahan Premium" class="mb-3"
                                style="width: 100%; height: auto;">
                            <h5 class="fw-semibold">Bahan Premium</h5>
                            <p class="text-muted">Shining – soft touch dengan material tebal dan adem, nyaman seharian.
                            </p>
                        </div>
                    </div> <!-- 4 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="bg-white p-4 shadow rounded text-center h-100"> <img
                                :src="getFile('/assets/potongan.webp')" alt="Modern Fit" class="mb-3"
                                style="width: 100%; height: auto;">
                            <h5 class="fw-semibold">Potongan Modern Fit</h5>
                            <p class="text-muted">Ukuran pas di badan, antara reguler dan slim fit – pas dan tetap
                                nyaman. </p>
                        </div>
                    </div> <!-- 5 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="bg-white p-4 shadow rounded text-center h-100"> <img
                                :src="getFile('/assets/setrika.webp')" alt="Mudah Disetrika" class="mb-3"
                                style="width: 100%; height: auto;">
                            <h5 class="fw-semibold">Tidak Mudah Kusut</h5>
                            <p class="text-muted">Mudah di setrika dan Tidak mudah kusut – tetap rapi meski dipakai
                                beraktivitas seharian. </p>
                        </div>
                    </div> <!-- 3 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="bg-white p-4 shadow rounded text-center h-100"> <img
                                :src="getFile('/assets/kerah.webp')" alt="Motif Eksklusif" class="mb-3"
                                style="width: 100%; height: auto;">
                            <h5 class="fw-semibold">Kerah Spread Collar</h5>
                            <p class="text-muted">Desain kerah baju yang memberi kesan rapi, gagah, dan elegan. </p>
                        </div>
                    </div> <!-- 6 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="bg-white p-4 shadow rounded text-center h-100"> <img
                                :src="getFile('/assets/tokoh.jpeg')" alt="Dipercaya Tokoh" class="mb-3"
                                style="width: 100%; height: auto;">
                            <h5 class="fw-semibold">Dipercaya Ustadz & Tokoh Ternama</h5>
                            <p class="text-muted">Telah dipakai oleh banyak ustadz dan tokoh muslim ternama di
                                Indonesia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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

                <!-- HEADER -->
                <div class="text-center mb-4">
                    <h2 class="section-heading text-uppercase">KATALOG</h2>

                    <img :src="getFile('/assets/open.jpeg')" class="img mb-3" width="100%">

                    <h6 class="text-muted">
                        <b>[Beli via WhatsApp]</b> — Cepat & bisa tanya langsung <br>
                        <b>[Beli via Shopee]</b> — Aman & fleksibel
                    </h6>
                </div>

                <!-- FILTER WRAPPER (STICKY) -->
                <div class="sticky-filter bg-light py-2 mb-3">

                    <!-- KATEGORI -->
                    <div class="text-center mb-2">
                        <button class="btn btn-sm me-2 mb-2"
                            :class="selectedCategory === null ? 'btn-dark' : 'btn-outline-dark'"
                            @click="changeCategory(null)">
                            Semua
                        </button>

                        <button v-for="cat in categories" :key="cat.id" class="btn btn-sm me-2 mb-2"
                            :class="selectedCategory === cat.id ? 'btn-dark' : 'btn-outline-dark'"
                            @click="changeCategory(cat.id)">
                            @{{ cat.name }}
                        </button>
                        <button class="btn btn-sm me-2 mb-2"
                            :class="stockFilter === 'out' ? 'btn-dark' : 'btn-outline-dark'"
                            @click="changeStock('out')">
                            Habis
                        </button>
                    </div>

                </div>
                <!-- PRODUK -->
                <div class="row">
                    <div class="col-6 col-md-4 mb-4" v-for="product in visibleProducts" :key="product.id">

                        <div class="card h-100 shadow-sm border-0"
                            @click="openModal(product); trackDetailClick(product)" style="cursor: pointer;">

                            <!-- BADGE -->
                            <div style="position:absolute; top:10px; right:10px; z-index:10;">
                                <span v-if="!product.is_habis" class="badge bg-success" style="font-size: 0.6rem;">
                                    Ready
                                </span>
                                <span v-else class="badge bg-dark" style="font-size: 0.6rem;">
                                    Habis
                                </span>
                            </div>

                            <!-- IMAGE -->
                            <div style="position: relative;">
                                <img class="card-img-top" :src="getImageUrl(product.image)">

                                <!-- Overlay habis -->
                                <div v-if="product.is_habis"
                                    class="position-absolute top-50 start-50 translate-middle text-white fw-bold"
                                    style="background: rgba(0,0,0,0.7); padding:10px 15px; border-radius:10px;">
                                    HABIS
                                </div>
                            </div>

                            <!-- INFO -->
                            <div class="card-body text-center">
                                <small class="text-muted">@{{ product.category.name }}</small>
                                <div class="fw-bold">@{{ product.name }}</div>
                                <div class="text-dark">@{{ formatRupiah(product.price) }}</div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- LOAD MORE -->
                <div class="text-center mt-3" v-if="visibleCount < filteredProducts.length">
                    <button class="btn btn-dark" @click="loadMore">
                        Muat Lebih Banyak
                    </button>
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
                    <div class="modal-body text-center">
                        <!-- Alamat -->
                        <div class="mb-3">
                            <strong>Alamat:</strong><br>
                            Jalan La Ode Hadi, Lorong Satria Kel. Wowawanggu Kec. Kadia, Kota Kendari <br>
                            <b>(Bagian Bypass Pasar Baru, lihat map atau video untuk lebih jelasnya)</b>
                        </div>
                        <!-- Embed Google Maps -->
                        <div class="ratio ratio-16x9">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m23!1m11!1m3!1d143.00770873843035!2d122.5114838009742!3d-3.998685335666983!2m2!1f0!2f1.6419434329974345!3m2!1i1024!2i768!4f50.84469958573552!4m9!3e0!4m3!3m2!1d-3.9986074!2d122.511354!4m3!3m2!1d-3.9986246!2d122.5113538!5e1!3m2!1sen!2suk!4v1754228293641!5m2!1sen!2suk"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div
                            class="mt-3 d-flex flex-column flex-sm-row justify-content-center align-items-center gap-2">

                            <a href="https://www.google.com/maps?q=-3.9986246,122.5113538" target="_blank"
                                class="btn btn-success btn-sm w-100 w-sm-auto">
                                <i class="bi bi-geo-alt-fill me-1"></i>
                                Buka di Google Maps
                            </a>

                            <a href="https://www.google.com/maps/dir/?api=1&destination=-3.9986246,122.5113538"
                                target="_blank" class="btn btn-secondary btn-sm w-100 w-sm-auto">
                                <i class="bi bi-compass me-1"></i>
                                Petunjuk Arah Google Maps
                            </a>

                        </div>
                        <div class="mt-4">
                            <strong>Video Lokasi:</strong>
                            <div class="ratio ratio-9x16 mt-2">
                                <blockquote class="tiktok-embed"
                                    cite="https://www.tiktok.com/@fadkhera.kendari/video/7608130662645681416"
                                    data-video-id="7608130662645681416" style="max-width: 605px;min-width: 325px;">
                                    <section> <a target="_blank" title="@fadkhera.kendari"
                                            href="https://www.tiktok.com/@fadkhera.kendari?refer=embed">@fadkhera.kendari</a>
                                        <p></p> <a target="_blank" title="♬ original sound  - Fadkhera Kendari"
                                            href="https://www.tiktok.com/music/original-sound-Fadkhera-Kendari-7608130722712980225?refer=embed">♬
                                            original sound - Fadkhera Kendari</a>
                                    </section>
                                </blockquote>
                                <script async src="https://www.tiktok.com/embed.js"></script>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL PRODUCT -->
        <div class="modal fade" id="productModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">

                    <!-- HEADER -->
                    <div class="modal-header">
                        <h6 class="modal-title">@{{ selectedProduct.name }}</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" @click="stopSlide"></button>
                    </div>

                    <!-- BODY -->
                    <div class="modal-body">

                        <!-- IMAGE SLIDER -->
                        <div class="text-center mb-3 position-relative">
                            <img :src="getImageUrl(activeImage)" class="img-fluid rounded"
                                style="max-height:300px; object-fit:cover;">

                            <!-- NAV -->
                            <button class="btn btn-dark btn-sm position-absolute top-50 start-0 translate-middle-y"
                                @click="prevImage">
                                ‹
                            </button>
                            <button class="btn btn-dark btn-sm position-absolute top-50 end-0 translate-middle-y"
                                @click="nextImage">
                                ›
                            </button>
                        </div>

                        <!-- INFO -->
                        <div class="text-center">
                            <div class="text-muted mb-1">
                                @{{ selectedProduct.category?.name }}
                            </div>

                            <h5 class="fw-bold">@{{ selectedProduct.name }}</h5>

                            <div class="mb-2 fs-5">
                                @{{ formatRupiah(selectedProduct.price) }}
                            </div>

                            <!-- STATUS -->
                            <div class="mb-2">
                                <span v-if="!selectedProduct.is_habis" class="badge bg-success">
                                    Ready Stok
                                </span>
                                <span v-else class="badge bg-dark">
                                    Stok Habis
                                </span>
                            </div>
                            <!-- UKURAN -->
                            <div v-if="selectedProduct.stocks?.length" class="mb-3">

                                <small class="text-muted d-block mb-2">
                                    Ukuran tersedia:
                                </small>

                                <span v-for="item in selectedProduct.stocks" :key="item.id"
                                    class="badge bg-light text-dark border me-1">

                                    @{{ item.size.name }}

                                </span>

                            </div>
                            <!-- INFO TAMBAHAN -->
                            <small class="text-muted d-block mb-3">
                                Mohon Chat untuk memastikan kembali ukuran & ketersediaan 🙌
                            </small>
                        </div>

                    </div>

                    <!-- FOOTER CTA -->
                    <div class="modal-footer flex-column">

                        <!-- WA (PRIMARY) -->
                        <a :href="getWhatsappLink(selectedProduct.name)" @click="trackWhatsAppClick(selectedProduct)"
                            target="_blank" class="btn btn-success w-100 mb-2">
                            <i class="fa fa-whatsapp me-1"></i>
                            Tanya / Beli via WhatsApp
                        </a>

                        <!-- SHOPEE (SECONDARY) -->
                        <!-- <a v-if="selectedProduct.link_shopee" :href="selectedProduct.link_shopee"
                            @click="trackShopeeClick(selectedProduct)" target="_blank" class="btn w-100"
                            style="background:#f1582c; color:white;">

                            <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/shopee.svg"
                                style="width:16px; margin-right:6px; filter: brightness(0) invert(1);">
                            Beli di Shopee
                        </a> -->

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
        <!-- Modal Informasi Terbaru -->
        <div class="modal fade" id="infoModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0 shadow-lg">

                    <div class="modal-header border-0 text-center">
                        <h5 class="modal-title fw-bold">
                            ✨ Info ABATI STORE ✨
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>


                    <div class="modal-body text-center">
                        <h4 class="fw-bold">
                            Alhamdulillah 🤲
                        </h4>


                        <h5>
                            ABATI STORE dipercaya menyediakan seragam di salah satu pondok pesantren di kota Kendari.
                            <br>
                        </h5>


                        <p class="text-muted">
                            Terima kasih atas kepercayaan
                            telah memilih kami.
                        </p>
                        <img src="{{asset('assets/pelanggan/728606784_17903583423445903_6750163565435512460_n.jpg')}}"
                            class="info-image mb-3">





                        <a href="#seragam" data-bs-dismiss="modal" class="btn btn-danger">
                            Butuh Seragam?
                        </a>

                    </div>


                </div>
            </div>
        </div>

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

                // NEW
                categories: [],
                selectedCategory: null,
                visibleCount: 500,

                activeImageIndex: 0,
                slideInterval: null,
                showOutOfStock: false,
                stockFilter: 'available', // default: tampil yang ada stok

            }
        },

        mounted() {
            this.fetchProducts();
        },

        computed: {
            filteredProducts() {
                let all = [...this.featuredProducts, ...this.otherProducts];

                // 🔥 PRIORITAS: kalau mode HABIS
                if (this.stockFilter === 'out') {
                    return all.filter(p => p.is_habis);
                }

                // mode normal
                if (this.selectedCategory) {
                    all = all.filter(p => p.category.id === this.selectedCategory);
                }

                // hanya tampil yang tersedia
                all = all.filter(p => !p.is_habis);

                return all;
            },

            visibleProducts() {
                return this.filteredProducts.slice(0, this.visibleCount);
            },

            allImages() {
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

            changeStock(type) {
                this.stockFilter = type;
                this.selectedCategory = null; // 🔥 reset kategori
            },
            // 🔥 FILTER
            changeCategory(catId) {
                this.stockFilter = 'available'
                this.selectedCategory = catId;
                this.visibleCount = 500; // reset load more
            },

            loadMore() {
                this.visibleCount += 500;
            },

            // 🔥 TRACKING
            trackWhatsAppClick(product) {
                if (typeof fbq !== 'undefined') {
                    fbq('track', 'InitiateCheckout', {
                        content_ids: [product.id],
                        content_name: product.name,
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

            // 🔥 WHATSAPP
            getWhatsappLink(productName) {
                const phoneNumber = '6285241800852';
                const message = `Bismillah kak, saya mau pesan ${productName}. Masih ready?`;
                return `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
            },

            // 🔥 MODAL
            openModal(product) {
                this.selectedProduct = product;
                this.activeImageIndex = 0;
                this.startSlide();

                const modal = new bootstrap.Modal(document.getElementById('productModal'));
                modal.show();
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
                }, 5000);
            },

            stopSlide() {
                clearInterval(this.slideInterval);
            },

            // 🔥 FETCH DATA
            async fetchProducts() {
                let url = "{{route('product.index')}}";

                const featured = await fetch(`${url}?is_featured=1`).then(res => res.json());
                const others = await fetch(`${url}?is_featured=0`).then(res => res.json());

                this.featuredProducts = featured;
                this.otherProducts = others;

                // ambil kategori unik
                const allProducts = [...featured, ...others];
                const uniqueCategories = {};

                allProducts.forEach(p => {
                    uniqueCategories[p.category.id] = p.category;
                });

                this.categories = Object.values(uniqueCategories);
            },

            // 🔥 HELPER
            getImageUrl(path) {
                if (!path) return '/assets/no-image.png';
                return `/storage/${path}`;
            },

            getFile(path) {
                return path ? `${path}` : '';
            },

            formatRupiah(value) {
                const number = Number(value);
                if (isNaN(number)) return value;
                return 'Rp ' + number.toLocaleString('id-ID');
            },
            getWhatsappLinkSeragam() {
                const phoneNumber = '6285241800852'; // ganti dengan nomor WA kamu tanpa +
                const message =
                    `Bismillah, saya ingin seragam untuk keluarga / komunitas. Bagaimana caranya?`;
                return `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
            },
        },

        beforeUnmount() {
            this.stopSlide();
        }

    }).mount('#app');
    </script>
</body>

</html>