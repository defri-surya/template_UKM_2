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
                        <h5><i class="fas fa-info"></i> Detail Invoice</h5>
                    </div>

                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    {{-- <img src="{{ asset('images/nyawiji-modified.png') }}"
                                        class="navbar-brand-img h-100" alt="main_logo"
                                        style="width: 30px; height: 30px"> --}} GIRIWANGI
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
                                    <strong>GIRIWANGI</strong><br>
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
                                @if ($nota->status_pembayaran == 'Lunas')
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
                            </div>
                            <!-- /.col -->
                            <div class="col-6">

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
                        <div class="d-flex d-block justify-content-center">
                            <a href="{{ route('transaksi.index') }}" rel="noopener" class="btn btn-primary mr-3"><i
                                    class="fas fa-arrow-left"></i>
                                Kembali</a>
                            @if ($nota->status_pembayaran == 'Menunggu Pembayaran')
                                <form action="{{ route('transaksi.update', $nota->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-success" type="submit"><i class="fas fa-check"></i>&nbsp;
                                        Verifikasi Pembayaran</button>
                                </form>
                            @endif
                            @if ($nota->status_pembayaran == 'Lunas')
                                <form action="{{ route('transaksi.update', $nota->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-success" type="submit" hidden><i
                                            class="fas fa-check"></i>&nbsp;
                                        Verifikasi Pembayaran</button>
                                </form>
                            @endif
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
