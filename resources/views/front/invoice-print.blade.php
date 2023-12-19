<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice</title>

    <style>
        .table-invoice {
            border-collapse: collapse;
            width: 100%;
        }

        .table-invoice th,
        .table-invoice td {
            padding: 8px;
        }

        .pre {
            text-align: left;
            width: 40%;
        }

    </style>
</head>

<body class="hold-transition sidebar-mini">

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <table border="0">
                            <tr>
                                <td>
                                    <h4>
                                        {{-- <img src="{{ asset('images/nyawiji-modified.png') }}"
                                            class="navbar-brand-img h-100" alt="main_logo"
                                            style="width: 30px; height: 30px"> --}} UKM Agung Jemparingan
                                    </h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4><small class="float-right">Tanggal Transaksi :
                                            {{ Carbon\Carbon::parse($nota->tgl_transaksi)->isoFormat('D MMMM Y') }}</small>
                                    </h4>
                                </td>
                            </tr>
                        </table>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <table border="0">
                        <tr>
                            <td>
                                Dari :
                                <address>
                                    <strong>UKM Agung Jemparingan</strong><br>
                                    {{ $data->alamat }}<br>
                                    Phone : {{ $data->phone }}<br>
                                    Email : {{ $data->email }}
                                </address>
                            </td>
                            <td>
                                Kepada :
                                <address>
                                    <strong>{{ $nota->nama_customer }}</strong><br>
                                    <p>{{ $nota->alamat_customer }}</p>
                                    Phone : {{ $nota->tlp_customer }}<br>
                                    Provinsi : {{ $nota->provinsi }}<br>
                                    Kabupaten : {{ $nota->kabupaten }}
                                </address>
                            </td>
                        </tr>
                    </table>
                    <table border="0" align="center">
                        <tr>
                            <td>
                                <b>Kode Invoice #{{ $nota->kode_invoice }}</b>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Jasa Kirim :</b> {{ $nota->kurir }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Status Pembayaran :</b>
                                @if ($nota->status_pembayaran == 'Menunggu Pembayaran')
                                    <span style="color: red">{{ $nota->status_pembayaran }}</span>
                                @endif
                                @if ($nota->status_pembayaran == 'Terbayar')
                                    <span style="color: green">{{ $nota->status_pembayaran }}</span>
                                @endif
                            </td>
                        </tr>
                    </table>
                    <br><br>
                    <table class="table-invoice" border="1" align="center">
                        <thead align="center">
                            <tr>
                                <th>Qty</th>
                                <th>Foto</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody align="center">
                            @foreach ($nota->detailtransaksi as $item)
                                <tr>
                                    <td>{{ $item['qty'] }}</td>
                                    <td>
                                        <img src="{{ 'data:image/png;base64,' . base64_encode(file_get_contents(@$item['foto'])) }}"
                                            alt="" style="width: 80px; height: 80px; object-fit: cover">
                                    </td>
                                    <td>{{ $item['nama_produk'] }}</td>
                                    <td>@currency($item['harga'] * $item['qty'])</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <table class="pre" align="right">
                        <tr>
                            <td><b>Subtotal </b></td>
                            <td><b> @currency($nota->subtotal)</b></td>
                        </tr>
                        <tr>
                            <td><b>Ongkos Kirim </b></td>
                            <td><b> @currency($nota->ongkir)</b></td>
                        </tr>
                        <tr>
                            <td><b>Total </b></td>
                            <td><b> @currency($nota->total_harga)</b></td>
                        </tr>
                    </table>

                    <table border="0">
                        <tr>
                            <td>
                                <p class="lead"><b>Informasi Pembayaran :</b></p>
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
                            </td>
                            <td></td>
                        </tr>
                    </table>

                </div>
                <!-- /.col -->
                <div class="col-6">

                    <div class="table-responsive">

                    </div>
                </div>
                <!-- /.col -->
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
</body>

</html>
