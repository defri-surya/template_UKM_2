<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('front') }}/invoice/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('front') }}/invoice/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="callout callout-info">
                        <h5><i class="fas fa-info"></i> Bukti Transaksi Pembelian</h5>
                    </div>

                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    {{-- <img src="{{ asset('images/nyawiji-modified.png') }}"
                                        class="navbar-brand-img h-100" alt="main_logo"
                                        style="width: 30px; height: 30px"> --}} UKM Agung Jemparingan
                                    <small class="float-right">Tanggal Transaksi :
                                        {{ Carbon\Carbon::parse($nota->tgl_transaksi)->isoFormat('D MMMM Y') }}</small>
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                Dari :
                                <address>
                                    <strong>UKM Agung Jemparingan</strong><br>
                                    {{ $data->alamat }}<br>
                                    Phone : {{ $data->phone }}<br>
                                    Email : {{ $data->email }}
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                Kepada :
                                <address>
                                    <strong>{{ $nota->nama_customer }}</strong><br>
                                    <p>{{ $nota->alamat_customer }}</p>
                                    Phone : {{ $nota->tlp_customer }}<br>
                                    Provinsi : {{ $nota->provinsi }}<br>
                                    Kabupaten : {{ $nota->kabupaten }}
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                <b>Kode Invoice #{{ $nota->kode_invoice }}</b><br>
                                <br>
                                <b>Jasa Kirim :</b> {{ $nota->kurir }}<br>
                                <b>Status Pembayaran :</b>
                                @if ($nota->status_pembayaran == 'Menunggu Pembayaran')
                                    <span style="color: red">{{ $nota->status_pembayaran }}</span>
                                @endif
                                @if ($nota->status_pembayaran == 'Terbayar')
                                    <span style="color: green">{{ $nota->status_pembayaran }}</span>
                                @endif
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Qty</th>
                                            <th>Foto</th>
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    @foreach ($nota->detailtransaksi as $item)
                                        <tbody>
                                            <tr>
                                                <td>{{ $item['qty'] }}</td>
                                                <td>
                                                    <img src="{{ asset($item['foto']) }}" alt=""
                                                        style="width: 80px; height: 80px; object-fit: cover">
                                                </td>
                                                <td>{{ $item['nama_produk'] }}</td>
                                                <td>@currency($item['harga'] * $item['qty'])</td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-6">
                                <p class="lead">Informasi Pembayaran :</p>
                                {{-- <img src="{{ asset('front') }}/dist/img/credit/visa.png" alt="Visa">
                                <img src="{{ asset('front') }}/dist/img/credit/mastercard.png" alt="Mastercard">
                                <img src="{{ asset('front') }}/dist/img/credit/american-express.png"
                                    alt="American Express">
                                <img src="{{ asset('front') }}/dist/img/credit/paypal2.png" alt="Paypal"> --}}

                                <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                    Segera lakukan pembayaran dalam waktu 1x24 jam. Jika pembayaran dalam waktu 1x24 jam
                                    tidak dilakukan, maka transaksi akan dibatalkan. <br>
                                    Setelah melakukan pembayaran, kirim bukti pembayaran melalui WhatsApp ke nomor :
                                    <br>
                                    <b>{{ $data->phone }}</b> <br>
                                    Atau melalui link WhatsApp di bawah ini : <br>
                                    <a href="https://wa.me/{{ $data->phone }}?text=Konfirmasi%20pembayaran%20untuk%20kode%20Invoice%20{{ $data->kode_invoice }}%20"
                                        target="_blank" class="btn btn-success"><i
                                            class="fab fa-whatsapp"></i>&nbsp;WhatsApp</a>
                                </p>
                            </div>
                            <!-- /.col -->
                            <div class="col-6">
                                {{-- <p class="lead">Amount Due 2/22/2014</p> --}}

                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>Subtotal</th>
                                            <td>@currency($nota->subtotal)</td>
                                        </tr>
                                        <tr>
                                            <th>Ongkos Kirim</th>
                                            <td>@currency($nota->ongkir)</td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td>@currency($nota->total_harga)</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print mt-5">
                            <div class="col-12">
                                <a href="{{ route('ukm') }}" rel="noopener" class="btn btn-primary float-start"><i
                                        class="fas fa-arrow-left"></i>
                                    Kembali</a>
                                <a href="{{ route('print-invoice', $nota->id) }}" rel="noopener" target="_blank"
                                    class="btn btn-warning float-right"><i class="fas fa-file-download"></i> Unduh
                                    Invoice</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('front') }}/invoice/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('front') }}/invoice/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('front') }}/invoice/dist/js/adminlte.min.js"></script>
</body>

</html>
