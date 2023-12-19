@extends('layouts.home')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        a {
            color: #0d6efd;
            text-decoration: none;
        }

    </style>
@endpush

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

    <!-- Profile UKM -->
    <main id="main">
        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu section-bg">
            <div class="choose-us-area pt-70 pb-70" id="page">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-12 text-center mb-5">
                            <div class="section-title">
                                <h4>Produk Kami</h4>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                @foreach ($kategoriproduk as $count => $value)
                                    <li class="nav-item">
                                        <span
                                            class="nav-link @if ($count == 0) active @endif d-flex d-block justify-content-center"
                                            id="pills-{{ $value->id }}-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-{{ $value->id }}" type="button" role="tab"
                                            aria-controls="pills-{{ $value->id }}" aria-selected="false"
                                            style="font-size: 14px">{{ $value->nama }}
                                        </span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div> --}}

                    <div class="container mt-3">
                        <div class="tab-content" id="pills-tabContent mb-5">
                            <div class="row menu-container">
                                <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                                    @forelse ($produk as $item => $product)
                                        <div class="col">
                                            <div class="card h-100">
                                                <img src="{{ asset($product->foto) }}" class="card-img-top"
                                                    alt="" style="width: 100%; height: 250px; object-fit:cover">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $product->nama }}</h5>
                                                    <h6 class="card-title">@currency($product->harga)</h6>
                                                    <p class="card-text">
                                                        {{ \Illuminate\Support\Str::limit($product->deskripsi, 185, $end = '...') }}
                                                    </p>
                                                </div>
                                                <div class="card-footer">

                                                    <small class="text-muted">
                                                        <div class="blog-btn">
                                                            <a href="{{ route('detailproduk', $product->slug) }}"
                                                                class="btn btn-inline read-more-btn"><i
                                                                    class="fas fa-arrow-right"></i>Selengkapnyaa</a>
                                                        </div>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                            {{-- @forelse ($produk as $count => $item)
                                <div class="tab-pane fade show @if ($count == 0) active @endif"
                                    id="pills-{{ $item->id }}" role="tabpanel"
                                    aria-labelledby="pills-{{ $item->id }}-tab">
                                    
                                </div>
                            @empty
                            @endforelse --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section id="menu" class="menu section-bg">
            <div class="choose-us-area pt-70 pb-70" id="page">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-12 text-center mb-5">
                            <div class="section-title">
                                <h4>Katalog Produk</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                @foreach ($kategoriproduk as $count => $value)
                                    <li class="nav-item">
                                        <span
                                            class="nav-link @if ($count == 0) active @endif d-flex d-block justify-content-center"
                                            id="pills-{{ $value->id }}-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-{{ $value->id }}" type="button" role="tab"
                                            aria-controls="pills-{{ $value->id }}" aria-selected="false"
                                            style="font-size: 14px">{{ $value->nama }}
                                        </span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="container mt-3">
                        <div class="tab-content" id="pills-tabContent mb-5">
                            @forelse ($produk as $count => $item)
                                <div class="tab-pane fade show @if ($count == 0) active @endif"
                                    id="pills-{{ $item->id }}" role="tabpanel"
                                    aria-labelledby="pills-{{ $item->id }}-tab">
                                    <div class="row menu-container">
                                        <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                                            @forelse ($item->produk as $product)
                                                <div class="col">
                                                    <div class="card h-100">
                                                        <img src="{{ asset($product->foto) }}" class="card-img-top"
                                                            alt="" style="width: 100%; height: 250px; object-fit:cover">
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $product->nama }}</h5>
                                                            <h6 class="card-title">@currency($product->harga)</h6>
                                                            <p class="card-text">
                                                                {{ \Illuminate\Support\Str::limit($product->deskripsi, 185, $end = '...') }}
                                                            </p>
                                                        </div>
                                                        <div class="card-footer">

                                                            <small class="text-muted">
                                                                <div class="blog-btn">
                                                                    <a href="{{ route('detailproduk', $product->slug) }}"
                                                                        class="btn btn-inline read-more-btn"><i
                                                                            class="fas fa-arrow-right"></i>Selengkapnyaa</a>
                                                                </div>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- End Menu Section -->
        <div class="d-block d-flex justify-content-center">
            {{-- {{ $produk->links() }} --}}
        </div>
    </main><!-- End #main -->
    <!-- End Profile UKM -->
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
@endpush
