@extends('layouts.home')

@section('content')
    <!-- Start Slider Area -->
    <div class="slider-area ">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="slider-carousel owl-carousel">
                        <div class="single-slider text-center"
                            style="background: url({{ asset($slider->foto_1) }}) center center; background-size:cover; position:relative">
                        </div>
                        <div class="single-slider text-center"
                            style="background: url({{ asset($slider->foto_2) }}) center center; background-size:cover; position:relative">
                        </div>
                        <div class="single-slider text-center"
                            style="background: url({{ asset($slider->foto_3) }}) center center; background-size:cover; position:relative">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->

    <main id="main">
        <!-- Start Icon Box Area -->
        <div class="icon-box-area pt-70 pb-70" id="feature">
            <div class="container">
                <div class="section-title">
                    <h4 class="text-center mb-5">Tentang Kami</h4>
                </div>
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2 mb-5" data-aos="zoom-in" data-aos-delay="100">
                        <h3 v>Tentang Kami</h3>
                        <li><i></i> {{ $data->deskripsi }}</li>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>Ecommarce PT Kala Citra Nuswantara</h3>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> {{ $data->alamat }}</li>
                            <li><i class="fas fa-phone"></i> {{ $data->phone }}</li>
                            <li><i class="fas fa-envelope"></i> {{ $data->email }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- data produk --}}
        <div class="icon-box-area pt-70 pb-70" id="feature">
            <div class="container">
                <div class="section-title">
                    <h4 class="text-center mb-5">Produk Kami</h4>
                </div>
                <div class="row">
                    @forelse ($produk as $item)
                        <div class="col-lg-4">
                            <div class="single-icon-box" style="background-image: url({{ asset($item->foto) }})">
                                <div class="icon-box-content">
                                    <h6 class="iconbox-content-heading"><i class="far fa-chart-bar"></i> {{ $item->nama }}
                                    </h6>
                                    <div class="iconbox-content-body">
                                        <p>{{ \Illuminate\Support\Str::limit($item->deskripsi, 200, $end = '...') }}</p>
                                        <a class="btn btn-inline read-more-btn"
                                            href="{{ route('detailproduk', $item->slug) }}">
                                            <i class="fas fa-arrow-right"></i>
                                            Selengkapnya
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <span><i>Data Tidak Tersedia</i></span>
                    @endforelse
                </div>
                <br />
                <div class="blog-btn text-center">
                    <a href="{{ route('katalogproduk') }}" class="btn btn-outline-primary" style="border-radius: 40px"><i
                            class="fas fa-arrow-right"></i> Selengkapnya</a>
                </div>
            </div>
        </div>
        <!-- End Icon Box Area -->

        <!-- Start Why Choose Us Area -->
        <div class="choose-us-area pt-70 pb-70" id="page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center mb-5">
                        <div class="section-title">
                            <h4>Video You Tube</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="video-img-thumbnail text-center"
                            style="background: url({{ asset($slider->foto_1) }}) center center; height: 450px; background-size:cover; position:relative">
                            <a class="glightbox video-play" href="{{ $youtube->video }}">
                                <i class="far fa-play-circle"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Why Choose Us Area -->

        <!-- ======= Gallery ======= -->
        <section id="gallery" class="gallery">
            <div class="choose-us-area pt-70 pb-70" id="page">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-12 text-center mb-5">
                            <div class="section-title">
                                <h4>Gallery</h4>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
                        <div class="row g-0">
                            @foreach ($gallery as $item)
                                <div class="col-lg-3 col-md-4 mb-4">
                                    <div class="gallery-item">
                                        <a href="{{ asset($item->foto) }}" class="glightbox" data-gall="gallery-item">
                                            <img src="{{ asset($item->foto) }}" alt="" class="img-fluid"
                                                style="width:100%; height: 220px; object-fit:cover">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="blog-btn text-center">
                            <a href="{{ route('gallery') }}" class="btn btn-outline-primary" style="border-radius: 40px"><i
                                    class="fas fa-arrow-right"></i> Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Gallery -->

        <!-- ======= Peta Lokasi ======= -->
        <section id="contact" class="contact">
            <div class="choose-us-area pt-70 pb-70" id="page">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-12 text-center mb-5">
                            <div class="section-title">
                                <h4>Peta Lokasi</h4>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up">
                        <iframe style="border:0; width: 100%; height: 350px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.4168605459813!2d110.44062691450834!3d-7.745531378934938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5bce9857fa8b%3A0xae9c86cd3964854a!2sBlk.%20A%2C%20Sempu%2C%20Wedomartani%2C%20Kec.%20Ngemplak%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta%2055584!5e0!3m2!1sen!2sid!4v1650906356754!5m2!1sen!2sid"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Peta Lokasi -->

        <section id="contact" class="contact">
            <div class="choose-us-area pt-70 pb-70" id="page">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-12 text-center mb-5">
                            <div class="section-title">
                                <h4>FAQ</h4>
                            </div>
                        </div>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <strong>
                                        Bagaimana cara melakukan pembelian / pemesanan barang ?
                                    </strong>
                                </h5>
                                <a type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne" style="float: right">
                                    <i class=" fas fa-angle-down"></i>
                                </a>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Cara pesan/beli barang bisa Anda lihat secara lengkap pada <strong>Cara
                                        Pembelian</strong> yang berada di bagian paling bawah website ini (Bagian
                                    <strong>FEATURES</strong>).
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <strong>
                                        Apakah total harga yang tertera pada akhir proses pemesanan ("checkout") selesai
                                        adalah harga akhir yang harus saya bayar. Tidak ada tagihan lain ?
                                    </strong>
                                </h5>
                                <a type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                                    aria-controls="collapseTwo" style="float: right">
                                    <i class=" fas fa-angle-down"></i>
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Tidak. Harga yang tertera di kasir/checkout ketika proses pemesanan sukses/selesai
                                    adalah harga yang sudah termasuk ongkir (ongkos kirim). Bila Anda berbelanja secara
                                    online melalui website ini, sistem secara otomatis mencantumkan/memasukkan ongkos kirim
                                    dalam harga total.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <strong>
                                        Bagaimana cara pembayarannya ?
                                    </strong>
                                </h5>
                                <a type="button" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="true" aria-controls="collapseThree" style="float: right">
                                    <i class=" fas fa-angle-down"></i>
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Untuk penentuan metode pambayaran Anda harus menanyakan pada Admin(Pengelola) via
                                    Whatsapp. Kami telah menyantumkan link Whatsapp pada halaman Invoice/Bukti Transaksi.
                                    Untuk informasi mengenai metode pembayaran bisa ditanyakan melalui kontak langsung
                                    dengan kami pada link Whatsapp yang sudah kami sediakan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Peta Lokasi -->
    </main><!-- End #main -->
@endsection

@push('script')
    <script>
        /**
         * Initiate glightbox 
         */
        const glightbox = GLightbox({
            selector: '.glightbox'
        });
    </script>
@endpush
