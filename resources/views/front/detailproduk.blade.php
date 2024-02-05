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
                    <h2>Detail Produk</h2>
                </div>
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="slider-carousel owl-carousel">
                        @if ($produk->foto != null && $produk->foto2 != null && $produk->foto3 != null)
                            <div class="single-slider text-center"
                                style="background: url({{ asset($produk->foto) }}) center center; background-size:cover; position:relative">
                            </div>
                            <div class="single-slider text-center"
                                style="background: url({{ asset($produk->foto2) }}) center center; background-size:cover; position:relative">
                            </div>
                            <div class="single-slider text-center"
                                style="background: url({{ asset($produk->foto3) }}) center center; background-size:cover; position:relative">
                            </div>
                        @else
                            <div class="single-slider text-center"
                                style="background: url({{ asset('front/noimageavailable.png') }}) center center; background-size:cover; position:relative">
                            </div>
                            <div class="single-slider text-center"
                                style="background: url({{ asset('front/noimageavailable.png') }}) center center; background-size:cover; position:relative">
                            </div>
                            <div class="single-slider text-center"
                                style="background: url({{ asset('front/noimageavailable.png') }}) center center; background-size:cover; position:relative">
                            </div>
                        @endif
                    </div>
                    {{-- <div class="row event-item">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <img src="{{ asset($produk->foto) }}" class="img-fluid" alt=""
                                style="width: 100%; height: 400px">
                        </div>
                        <div class="col-lg-2"></div>
                    </div> --}}
                    <div class="row event-item mt-5">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8 pt-4 pt-lg-0 content">
                            <h3>{{ $produk->nama }}</h3>
                            <div class="price">
                                <p>
                                    <span>
                                        @if ($produk->harga == '-')
                                            Rp. -
                                        @else
                                            @currency($produk->harga)
                                        @endif
                                    </span>
                                    {{-- @currency($val->harga) --}}
                                </p>
                            </div>
                            <span style="text-align: justify">
                                {!! $produk->deskripsi !!}
                            </span>
                            <div class="btns d-flex d-block justify-content-center mb-5 mt-3">
                                {{-- <form action="{{ route('keranjangbeli') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="produkid" value="{{ $produk->id }}">
                                    <button type="submit" class="btn btn-outline-primary"
                                        style="border-radius: 20px">Masukkan Keranjang</button>
                                </form> --}}
                                <a href="https://wa.me/{{ $dataLink->wa_admin }}" target="_blank"
                                    class="btn btn-outline-primary mr-1" style="border-radius: 20px"> <span
                                        style="vertical-align:center">
                                        WhatsApp </span>
                                </a>
                                @foreach ($arrayLink as $dataLinkItem)
                                    <a href="{{ $dataLinkItem }}" target="_blank" class="btn btn-outline-primary mr-1"
                                        style="border-radius: 20px"> <span style="vertical-align:center">
                                            Order In Marketplace </span>
                                    </a>
                                @endforeach
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
