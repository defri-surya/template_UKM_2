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
    </section>
    <!-- End Header -->

    <main id="main">
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
                            @forelse ($gallery as $value)
                                <div class="col-lg-3 col-md-4 mb-4">
                                    <div class="gallery-item">
                                        <a href="{{ asset($value->foto) }}" class="glightbox" data-gall="gallery-item">
                                            <img src="{{ asset($value->foto) }}" alt="" class="img-fluid"
                                                style="width:100%; height: 220px; object-fit:cover">
                                        </a>
                                    </div>
                                </div>
                            @empty
                                <div class="col-lg-12 col-md-12 mb-4">
                                    <div class="gallery-item text-center">
                                        <h4>Gallery Tidak Tersedia !</h4>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="d-block d-flex justify-content-center">
            {{ $gallery->links() }}
        </div>
    </main>
    <!-- End #main -->
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
