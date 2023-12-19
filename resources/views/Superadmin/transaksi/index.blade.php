@extends('layouts.purple')

@section('content')
    <div class="row" id="proBanner"></div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Transaksi</h4> <br>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th> Kode Invoice </th>
                                <th> Tanggal Transaksi </th>
                                <th> Total Harga </th>
                                <th> Status </th>
                                <th> Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($transaksi as $item)
                                <tr>
                                    <td>{{ $item->kode_invoice }}</td>
                                    <td>{{ Carbon\Carbon::parse($item->tgl_transaksi)->isoFormat('D MMMM Y') }}</td>
                                    <td>@currency($item->total_harga)</td>
                                    <td>
                                        @if ($item->status_pembayaran == 'Menunggu Pembayaran')
                                            <span style="color: red">{{ $item->status_pembayaran }}</span>
                                        @endif
                                        @if ($item->status_pembayaran == 'Lunas')
                                            <span style="color: green">{{ $item->status_pembayaran }}</span>
                                        @endif
                                    </td>
                                    <td> <a href="{{ route('transaksi.show', $item->id) }}"
                                            class="btn btn-gradient-primary btn-sm">Invoice <i
                                                class="mdi mdi-file-check btn-icon-append"></i></a> </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center"><i>Data tidak tersedia</i></td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
