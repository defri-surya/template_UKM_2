@extends('layouts.home')

@section('content')
    <!-- ======= Header ======= -->
    <section {{-- id="hero" class="d-flex align-items-center" --}}>
        {{-- <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <h1><span>Giriwangi</span></h1>
                    <h2>Delivering great food for more than 18 years!</h2>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in"
                    data-aos-delay="200">
                    <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="glightbox play-btn"></a>
                </div>

            </div>
        </div> --}}
    </section><!-- End Header -->

    <!-- Detail Produk -->
    <main id="main">
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Detail Produk Unggulan</h2>
                </div>

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row event-item">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <img src="{{ asset($produkunggulan->foto) }}" class="img-fluid" alt=""
                                style="max-width: 100%">
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                    <div class="row event-item mt-5">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8 pt-4 pt-lg-0 content">
                            <h3>{{ $produkunggulan->nama }}</h3>
                            <div class="price">
                                <p><span>
                                        @if ($produkunggulan->harga == '-')
                                            Rp. -
                                        @else
                                            @currency($produkunggulan->harga)
                                        @endif
                                    </span></p>
                            </div>
                            <span style="text-align: justify">
                                {!! $produkunggulan->deskripsi !!}
                            </span>
                            <div class="btns d-flex d-block justify-content-center mb-5 mt-3">
                                <form action="{{ route('keranjangbeli') }}" method="POST">
                                    @csrf
                                    {{-- <input type="hidden" name="produkid" value="{{ $produkunggulan->id }}">
                                    <button type="submit" class="btn btn-outline-primary"
                                        style="border-radius: 20px">Masukkan Keranjang</button> --}}
                                </form>
                                {{-- <a href="#menu" class="btn btn-outline-primary" style="border-radius: 20px">Beli Melalui
                                    Shopee</a> --}}
                                <a href="https://wa.me/{{ $data->phone }}" target="_blank"
                                    class="btn btn-outline-primary " style="border-radius: 20px"> <span
                                        style="vertical-align:center">
                                        Order Now </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                    </div><!-- End testimonial item -->
                </div>
            </div>
        </section><!-- End Events Section -->
    </main><!-- End #main -->
    <!-- End Detail Produk -->
@endsection
