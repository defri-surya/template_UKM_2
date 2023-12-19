@extends('layouts.home')

@section('content')
    <!-- ======= Header ======= -->
    <section {{-- id="hero" class="d-flex align-items-center" --}}>
        {{-- <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <h1><span>UKM Agung Jemparingan</span></h1>
                    <h2>Delivering great food for more than 18 years!</h2>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in"
                    data-aos-delay="200">
                    <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="glightbox play-btn"></a>
                </div>

            </div>
        </div> --}}
    </section><!-- End Header -->

    <!-- Profile UKM -->
    <main id="main">
        <section id="about" class="about">
            <div class="icon-box-area pt-70 pb-70" id="feature">
                <div class="container">
                    <div class="section-title">
                        <h4 class="text-center mb-5">Tentang Kami</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 order-1 order-lg-2 mb-5" data-aos="zoom-in" data-aos-delay="100">
                            <h3>Tentang Kami</h3>
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
        </section>
    </main>
    <!-- End #main -->
@endsection
