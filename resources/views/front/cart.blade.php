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
    <main id="main">
        <section id="cart_items">
            <div class="container">
                <div class="section-title">
                    <h2><i class="fas fa-shopping-cart"></i> Keranjang Belanja</h2>
                </div>
                <div>
                    <ol class="breadcrumb" style="background-color: none">
                        <li><a href="{{ route('ukm') }}" style="color: #000; text-decoration: none;"><i
                                    class="fas fa-arrow-left">&nbsp;Belanja
                                    Lagi</i></a>
                        </li>
                    </ol>
                </div>
                <form action="{{ route('proses.orderbeli') }}" method="POST">
                    @csrf
                    <div class="table-responsive cart_info">
                        <table class="table table-condensed">
                            <thead style="color:#000">
                                <tr class="cart_menu">
                                    <td class="image" align="center" colspan="2">Item Produk</td>
                                    <td class="price">QTY</td>
                                    <td class="total">Harga</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody style="color:#000">
                                @forelse ($carts as $key => $item)
                                    <tr>
                                        <td class="cart_product">
                                            <img src="{{ asset($item['foto']) }}" alt=""
                                                style="width: 80px; height: 80px; object-fit: cover">
                                        </td>
                                        <td>
                                            <h5>{{ $item['nama'] }}</h5>
                                        </td>
                                        <td class="cart_description">
                                            <p>
                                                <strong>{{ $item['qty'] }}</strong>
                                            </p>
                                        </td>
                                        <td class="cart_total">
                                            <p class="cart_total_price">Rp.
                                                {{ number_format($item['harga'] * $item['qty']) }}</p>
                                        </td>
                                        <td class="cart_delete" style="margin-right: 10px">
                                            <a class="cart_quantity_delete" href="{{ route('hapus.cart', $key) }}"><i
                                                    class="fas fa-times"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">
                                            <p><i>Keranjang Masih Kosong</i></p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
            </div>
        </section>
        <!--/#cart_items-->

        <section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">
                <hr>
                <div class="section-title">
                    <h2>Data Pembeli</h2>
                </div>
                <div class="row">
                    <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 form-group">
                                    <input type="text" name="nama_customer" class="form-control" id="namacust"
                                        placeholder="Nama Lengkap" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" required>
                                </div>
                                <div class="col-lg-6 col-md-6 form-group mt-3 mt-md-0">
                                    <input type="number" class="form-control" name="tlp_customer" id="no_tlp"
                                        placeholder="Nomor Telepon" data-rule="email" data-msg="Please enter a valid Number"
                                        required>
                                </div>
                                <div class="col-lg-6 col-md-6 form-group mt-3">
                                    <select class="form-control" name="province_id" id="province_id">
                                        <option>-- Pilih Provinsi --</option>
                                        @foreach ($provinsi as $row)
                                            <option value="{{ $row['province_id'] }}"
                                                namaprovinsi="{{ $row['province'] }}">{{ $row['province'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 form-group mt-3">
                                    <select class="form-control" name="kota_id" id="kota_id">
                                        <option>-- Pilih Kabupaten --</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mt-3 mb-3">
                                <textarea class="form-control" name="alamat_customer" rows="5" placeholder="Alamat" required></textarea>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-6 form-group">
                                    <select class="form-control" name="kurir" id="kurir">
                                        <option>-- Pilih Pengiriman --</option>
                                        <option value="jne">JNE</option>
                                        <option value="tiki">TIKI</option>
                                        <option value="pos">POS INDONESIA</option>
                                        <option value="Ambil di Outlet (COD)">Ambil di Outlet (COD)</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 form-group mt-3 mt-md-0">
                                    <select class="form-control" name="layanan" id="layanan">
                                        <option>-- Pilih Layanan --</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="total_area">
                                <input type="hidden" id="hargatotal" name="totalharga">
                                <input type="hidden" id="ongkoskirim" name="ongkoskirim">
                                <input type="hidden" id="nama_provinsi" name="provinsi">
                                <input type="hidden" id="nama_kota" name="namakota">
                                <input type="hidden" value="{{ $berat }}" name="totalberat">
                                <input type="hidden" value="{{ $jmlqty }}" name="totalqty">
                                <input type="hidden" value="{{ $totalprice }}" name="subtotal">
                                <div class="text-center">
                                    <p style="text-decoration: none">Sub Total Pembelian <br><strong>
                                            <span>@currency($totalprice)</span></strong></p>
                                    <hr>
                                    <p style="text-decoration: none">Biaya Ongkir <br><strong>
                                            <span id="ongkir"></span></strong>
                                    </p>
                                    <hr>
                                    <p style="text-decoration: none">Total Pembelian <br><strong>
                                            <span id="totalharga"></span></strong></p>
                                    <hr>
                                </div>
                                <div class="text-center mt-4"><button type="submit" class="btn btn-outline-warning"
                                        style="border-radius: 20px">Check Out</button></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section><!-- End Book A Table Section -->
    </main>
@endsection

@push('script')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            //ini ketika provinsi tujuan di klik maka akan eksekusi perintah yg kita mau
            //name select nama nya "provinve_id" kalian bisa sesuaikan dengan form select kalian
            $('select[name="province_id"]').on('change', function() {
                // membuat variable namaprovinsiku untyk mendapatkan atribut nama provinsi
                var namaprovinsiku = $("#province_id option:selected").attr("namaprovinsi");
                // menampilkan hasil nama provinsi ke input id nama_provinsi
                $("#nama_provinsi").val(namaprovinsiku);

                // kita buat variable provincedid untk menampung data id select province
                let provinceid = $(this).val();
                //kita cek jika id di dpatkan maka apa yg akan kita eksekusi
                if (provinceid) {
                    // jika di temukan id nya kita buat eksekusi ajax GET
                    jQuery.ajax({
                        // url yg di root yang kita buat tadi
                        url: "/kota/" + provinceid,
                        // aksion GET, karena kita mau mengambil data
                        type: 'GET',
                        // type data json
                        dataType: 'json',
                        // jika data berhasil di dapat maka kita mau apain nih
                        success: function(data) {
                            // jika tidak ada select dr provinsi maka select kota kososng / empty
                            // $('select[name="kota_id"]').empty();
                            // jika ada kita looping dengan each
                            $.each(data, function(key, value) {
                                // perhtikan dimana kita akan menampilkan data select nya, di sini saya memberi name select kota adalah kota_id
                                $('select[name="kota_id"]').append('<option value="' +
                                    value.city_id + '" namakota="' + value.type +
                                    ' ' + value.city_name + '">' + value.type +
                                    ' ' + value.city_name + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="kota_id"]').empty();
                }
            });
            //memberikan action ketika select name kota_id di select
            $('select[name="kota_id"]').on('change', function() {
                // membuat variable namakotaku untyk mendapatkan atribut nama kota
                var namakotaku = $("#kota_id option:selected").attr("namakota");
                // menampilkan hasil nama provinsi ke input id nama_provinsi
                $("#nama_kota").val(namakotaku);
            });
        });
    </script>

    <script>
        var berat = <?php echo json_encode($berat); ?>;
        var totalan = <?php echo json_encode($totalprice); ?>;
        $('select[name="kurir"]').on('change', function() {
            // kita buat variable untuk menampung data data dari  inputan
            // name city_origin di dapat dari input text name city_origin
            // let origin = $("input[name=city_origin]").val();
            // name kota_id di dapat dari select text name kota_id
            let destination = $("select[name=kota_id]").val();
            // name kurir di dapat dari select text name kurir
            let courier = $("select[name=kurir]").val();
            // name weight di dapat dari select text name weight
            // let weight = $("input[name=weight]").val();
            // alert(courier);
            const formatRupiah = (money) => {
                return new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    minimumFractionDigits: 0
                }).format(money);
            }

            //jika kurir yang dipilih adalah cod maka form layanan hidden dan totalharga diambil dari subtotal
            if (courier == 'Ambil di Outlet (COD)') {
                $('#layanan').hide();

                var ongkoskirim = 0;
                console.log(ongkoskirim);
                document.getElementById('ongkir').innerHTML = formatRupiah(ongkoskirim);
                $("#ongkoskirim").val(ongkoskirim);

                console.log(totalan);
                document.getElementById('totalharga').innerHTML = formatRupiah(totalan);
                $("#hargatotal").val(totalan);
            } else {
                $('#layanan').show();
            }

            if (courier) {
                jQuery.ajax({
                    url: "/origin=" + 39 + "&destination=" + destination + "&weight=" + berat +
                        "&courier=" + courier,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        // $('select[name="layanan"]').empty();
                        // ini untuk looping data result nya
                        $.each(data, function(key, value) {
                            // ini looping data layanan misal jne reg, jne oke, jne yes
                            $.each(value.costs, function(key1, value1) {
                                // ini untuk looping cost nya masing masing
                                // silahkan pelajari cara menampilkan data json agar lebi paham
                                $.each(value1.cost, function(key2, value2) {
                                    $('select[name="layanan"]').append(
                                        '<option value="' + value2.value +
                                        '">' + value1.service + '-' + value1
                                        .description + '-' + value2.value +
                                        '</option>');
                                });
                            });
                        });
                    }
                });
            } else {
                $('select[name="layanan"]').empty();
            }
        });
    </script>

    // get ongkos
    <script>
        var totalan = <?php echo json_encode($totalprice); ?>;
        $('select[name="layanan"]').on('change', function() {

            const formatRupiah = (money) => {
                return new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    minimumFractionDigits: 0
                }).format(money);
            }
            // console.log(formatRupiah(15000));

            // ongkir
            var ongkos = $("#layanan option:selected").attr("value");
            document.getElementById('ongkir').innerHTML = formatRupiah(ongkos);
            $("#ongkoskirim").val(ongkos);

            // totalbayar
            var totalharga = parseInt(ongkos) + parseInt(totalan);
            console.log(totalharga);
            document.getElementById('totalharga').innerHTML = formatRupiah(totalharga);
            $("#hargatotal").val(totalharga);
        });
    </script>
@endpush
