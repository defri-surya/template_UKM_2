<!-- Start Footer Area -->
<footer class="footer-area pt-60 pb-60 bg-white" id="contact-us" style="border-top: #000 2px solid">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <img src="{{-- {{ asset('front') }}/LogoJemparingan.png --}}" alt="" style="max-width: 200px">
                    </div>
                    <div class="footer-dec">
                        <p>{{ $dataProfil->alamat }}</p>
                    </div>
                    <ul class="social-links">
                        {{-- <li><a href="{{ $data->fb }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li> --}}
                        @foreach ($arraySosmed as $item)
                            <li><a href="{{ $item }}" target="_blank"><i class="fab fa-instagram"></i></a>
                            </li>
                        @endforeach
                        {{-- <li><a href="{{ $data->ytb }}" target="_blank"><i class="fab fa-youtube"></i></a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <div class="widget-title">
                        <h6>Features</h6>
                    </div>
                    <ul class="footer-menu">
                        <li><a href="{{ route('ukm') }}">Home</a></li>
                        <li><a href="{{ route('profil') }}">Profile</a></li>
                        <li><a href="{{ route('katalogproduk') }}">Produk</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                        {{-- <li><a href="#contact-us">Contact</a></li> --}}
                        {{-- <li><a href="#" data-toggle="modal" data-target="#exampleModalScrollable">Terms of Service</a> --}}
                        </li>
                        <li><a href="#" data-toggle="modal" data-target="#exampleModalScrollable1">Cara
                                Pembelian</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Modal Terms Of Service -->
            <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Terms of Service</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Bagian 1. Ketentuan Umum
                            <br><br>
                            Pasal 1. Definisi<br>
                            Persetujuan<br>
                            Perjanjian Penggunaan Toko.<br>
                            Layanan Dasar<br>
                            Pembeli<br>
                            Seseorang yang membuat penawaran untuk membeli barang sesuai dengan prosedur yang ditentukan
                            oleh Kami, setelah memahami dan menerima semua syarat dan ketentuan Perjanjian ini dan
                            Kebijakan Privasi.<br>
                            Pengguna<br>
                            “Pengguna” secara kolektif mengacu pada orang yang mengambil, melihat atau menggunakan
                            gambar, teks, desain, logo, video, program, ide atau informasi lain (“Konten”) yang
                            disediakan oleh Kami melalui Layanan Dasar, setelah memahami dan menerima semua syarat dan
                            ketentuan Perjanjian ini dan Kebijakan Privasi.<br><br>
                            Pasal 2. Penerapan Persetujuan<br>
                            Kami telah menetapkan Perjanjian ini untuk memungkinkan Pengguna menggunakan Layanan Dasar
                            yang Kami sediakan di Internet. Dengan mulai menggunakan Layanan Dasar, Pengguna dianggap
                            telah menerima syarat dan ketentuan Perjanjian ini.
                            <br><br>
                            Pasal 3. Perubahan Perjanjian Ini<br>
                            Jika dianggap perlu, Kami dapat mengubah Perjanjian ini dalam lingkup tujuan Layanan Dasar.
                            Jika terjadi perubahan pada Perjanjian ini, kami akan memberi tahu Pengguna dan Pembeli,
                            sebelumnya, tentang syarat dan ketentuan yang diubah dari Perjanjian ini dan tanggal efektif
                            amandemen tersebut, dengan mempostingnya di situs web Kami atau dengan cara lain yang
                            sesuai. Pengguna akan dianggap telah menerima Perjanjian yang diubah jika Pengguna tersebut
                            menggunakan Layanan Dasar pada atau setelah tanggal efektif tersebut.
                            <br><br>
                            Bagian 2. Pembelian Komoditas, dll.<br><br>
                            Pasal 4. Pembelian Komoditas<br>
                            Pengguna dapat membeli komoditas dari Kami dengan menggunakan Layanan Dasar.
                            Pengguna yang ingin membeli komoditas dapat mengajukan pembelian tersebut sesuai dengan
                            prosedur yang ditentukan di tempat lain.<br>
                            Sesuai dengan aplikasi tersebut, setelah memverifikasi alamat pengiriman, isi pesanan,
                            informasi lain, dll. yang dimasukkan dan didaftarkan oleh Pengguna, Pengguna harus mengklik
                            tombol "Pesan". Kontrak pembelian antara Pengguna dan Kami sehubungan dengan komoditas
                            tersebut dianggap selesai sejak surat konfirmasi Kami mencapai Pengguna tersebut.
                            Terlepas dari ketentuan yang ditetapkan dalam pasal sebelumnya, jika terjadi tindakan yang
                            salah atau tidak pantas, Kami dapat membatalkan atau membatalkan kontrak pembelian atau
                            mengambil tindakan lain apa pun yang sesuai.<br>
                            Anak di bawah umur tidak boleh menggunakan Layanan Dasar atau melakukan pembelian tanpa
                            persetujuan dari perwakilan hukum yang kompeten, yang diberikan sebelumnya.<br><br>
                            Pasal 5. Perubahan pada Informasi Terdaftar<br>
                            Dalam hal terjadi perubahan, secara keseluruhan atau sebagian, pada nama dan/atau alamat
                            yang dimasukkan oleh pembeli selama pembelian dan/atau informasi lain yang disampaikan oleh
                            pembeli tersebut kepada Kami, pembeli tersebut harus segera memberi tahu Kami tentang
                            perubahan tersebut. Terlepas dari pendaftaran perubahan tersebut, setiap transaksi yang
                            telah diproses sebelum pendaftaran perubahan tersebut harus dipenuhi berdasarkan informasi
                            sebelum pendaftaran perubahan.
                            <br><br>
                            Pasal 6. Pembayaran<br>
                            Jumlah pembayaran barang adalah total dari harga jual barang yang terdaftar di website Kami,
                            pajak konsumsi, biaya pengiriman, dan komisi.<br>
                            Pembayaran untuk barang yang dibeli melalui Layanan Dasar hanya dapat dilakukan dengan salah
                            satu metode pembayaran yang ditentukan oleh Kami.<br>
                            Pembayaran dengan kartu kredit tunduk pada ketentuan yang disepakati secara terpisah antara
                            Pembeli dan perusahaan kartu kredit. Jika timbul perselisihan sehubungan dengan penggunaan
                            kartu kredit antara Pembeli dan perusahaan kartu kredit, Pembeli dan perusahaan kartu kredit
                            bertanggung jawab untuk menyelesaikan perselisihan di antara mereka sendiri.<br>
                            Jika alat pembayaran ditujukan untuk Layanan Dasar dan jika perjanjian terpisah (termasuk
                            perjanjian apa pun dengan syarat dan ketentuan alat pembayaran) dibuat antara Pembeli dan
                            perusahaan pembayaran yang memiliki alat pembayaran, Pembeli harus tunduk pada syarat-syarat
                            perjanjian terpisah yang dibuat antara Pembeli dan perusahaan pembayaran. Jika timbul
                            perselisihan sehubungan dengan alat pembayaran tersebut antara Pembeli dan perusahaan
                            pembayaran, Pembeli dan perusahaan pembayaran bertanggung jawab untuk menyelesaikan
                            perselisihan di antara mereka sendiri.<br><br>
                            Pasal 7. Pengembalian<br>
                            Kami menangani pengembalian dari Pembeli sesuai dengan "Item Ketentuan Khusus tentang
                            Pengembalian" yang terkandung dalam Undang-Undang Transaksi Komersial Khusus yang diposting
                            di situs Kami.
                            <br><br>
                            Bagian 3. Perlakuan terhadap Informasi Pribadi<br><br>
                            Pasal 8. Penanganan Informasi Pribadi<br>
                            Kami menangani informasi pribadi sesuai dengan Kebijakan Privasi Kami, yang ditetapkan di
                            tempat lain.
                            <br><br>
                            Bagian 4. Tanggung Jawab Terkait Penggunaan<br><br>
                            Pasal 9. Larangan<br>
                            Dalam menggunakan Layanan Dasar, Pengguna dan Pembeli dilarang terlibat dalam salah satu
                            tindakan yang tercantum di bawah ini.<br>
                            Setiap tindakan yang menyebabkan atau mungkin menyebabkan masalah, kerugian, atau kerusakan
                            pada Pengguna lain, pihak ketiga, atau Kami.
                            Setiap tindakan yang melanggar atau kemungkinan akan melanggar hak Kami atau pihak ketiga,
                            seperti hak cipta, hak paten, atau hak lainnya. Hak kekayaan intelektual, hak pribadi, hak
                            potret, hak privasi, dan hak publisitas.<br>
                            Setiap tindakan yang melanggar atau kemungkinan besar melanggar ketertiban umum dan standar
                            kesusilaan serta undang-undang dan tata cara lainnya. Untuk menggunakan Konten apa pun yang
                            diperoleh melalui Layanan Dasar di luar batas penggunaan pribadi.<br>
                            Untuk mereproduksi, menjual, menerbitkan, mendistribusikan, atau mengungkapkan kepada
                            publik, melalui Pengguna lain atau pihak ketiga lainnya, Konten apa pun yang diperoleh
                            melalui Layanan Dasar, atau tindakan apa pun yang serupa dengan hal-hal di atas.
                            Setiap tindakan yang menghalangi pengoperasian Layanan Dasar atau layanan lain apa pun yang
                            disediakan oleh Kami.<br>
                            Setiap tindakan yang secara wajar dianggap oleh Kami menyebabkan kerusakan atau hilangnya
                            reputasi Kami.<br>
                            Tindakan lain yang dianggap tidak pantas oleh Kami.<br><br>
                            Bagian 5. Penafian<br><br>
                            Pasal 10. Penafian<br>
                            Kami tidak bertanggung jawab atas segala kerusakan yang ditimbulkan oleh pihak ketiga
                            sebagai akibat dari pelanggaran Perjanjian ini oleh Pengguna atau Pembeli.
                            Kami tidak menjamin kelengkapan, keakuratan, keandalan, kegunaan, atau aspek lain apa pun
                            dari: (i) konten Layanan Dasar; atau (ii) setiap informasi yang diperoleh Pengguna atau
                            Pembeli melalui Layanan Dasar.<br>
                            Kami secara umum tidak menerima tanggung jawab apa pun kepada Pengguna atau Pembeli atas
                            kerusakan apa pun yang timbul dari penggunaan Layanan Dasar oleh mereka, Kami juga tidak
                            berkewajiban untuk memberi kompensasi kepada Pengguna atau Pembeli atas kerusakan
                            tersebut.<br>
                            Namun, jika penafian ini tidak berlaku karena alasan seperti kontrak yang dilaksanakan
                            antara Pengguna atau Pembeli dan Kami berdasarkan Perjanjian ini merupakan Kontrak Konsumen
                            sebagaimana didefinisikan dalam Pasal 2, ayat 3 Undang-Undang Kontrak Konsumen (UU No. 61
                            Tahun 2000), ketentuan Perjanjian ini yang dengan cara lain membebaskan Kami dari tanggung
                            jawab Kami tidak akan berlaku. Jika kontrak yang dilaksanakan berdasarkan Perjanjian ini
                            merupakan Kontrak Konsumen dan jika Kami bertanggung jawab atas kerusakan karena wanprestasi
                            atau kesalahan, maka Kami akan bertanggung jawab atas kerusakan hingga jumlah yang
                            dibayarkan oleh Pengguna atau Pembeli kepada Kami berdasarkan Perjanjian ini untuk jangka
                            waktu satu tahun sebelum tanggal terjadinya kerusakan, kecuali kerusakan tersebut disebabkan
                            oleh kesengajaan atau kelalaian besar dari pihak Kami.<br>
                            Jika Pembeli gagal atau menolak untuk menerima barang, atau jika Pembeli tidak dapat
                            menerima barang karena ketidakhadirannya yang lama, atau jika alamat pengiriman Pembeli
                            tidak diketahui, atau jika Pembeli tidak dapat menerima barang karena alasan lain pada
                            bagian dari Pembeli, maka Kami akan memenuhi kewajiban Kami untuk mengirimkan barang-barang
                            tersebut melalui cara-cara seperti menghubungi rincian kontak yang didaftarkan oleh Pembeli
                            dan membawa atau mengirimkan barang-barang tersebut ke alamat pengiriman yang ditentukan
                            oleh Pembeli selama pembelian barang, dimana Kami akan dibebaskan dari kewajiban
                            tersebut.<br><br>
                            Bagian 6. Ketentuan Lain-lain<br><br>
                            Pasal 11. Hak Cipta dan Hak atas Kekayaan Intelektual<br>
                            Semua Konten yang disediakan oleh Layanan Dasar diberikan secara eksklusif kepada Kami atau
                            pihak ketiga yang berwenang. Jika masalah timbul karena pelanggaran pasal ini antara
                            Pengguna atau Pembeli dan pihak ketiga, Pengguna atau Pembeli tersebut harus memikul
                            tanggung jawab dan biaya untuk penyelesaian tanpa menyebabkan kerusakan, kehilangan, atau
                            kerugian kepada Kami.
                            <br><br>
                            Pasal 12. Peraturan Perundang-undangan yang Berlaku<br><br>
                            Perjanjian ini tunduk pada semua hukum dan peraturan negara Jepang.
                            <br><br>
                            Pasal 13. Negosiasi dan Pengadilan Yurisdiksi<br>
                            Kami dan Pengguna atau Pembeli yang relevan, sesuai dengan keadaannya, akan berusaha untuk
                            segera menyelesaikan melalui konsultasi, sesuai dengan prinsip itikad baik, setiap masalah
                            yang tidak disebutkan di sini atau pertanyaan apa pun yang muncul terkait interpretasi
                            Perjanjian ini. Telah disepakati sebelumnya bahwa pengadilan yang memiliki yurisdiksi atas
                            lokasi Kami akan memiliki yurisdiksi eksklusif sebagai pengadilan tingkat pertama atas semua
                            perselisihan yang terkait dengan Perjanjian ini.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Cara Pembelian -->
            <div class="modal fade" id="exampleModalScrollable1" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Cara Pembelian</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Pilih produk yang ingin dibeli, lalu klik tombol <strong>"Selengkapnya"</strong>, terdapat
                            opsi tombol yaitu <strong>"Masukkan Keranjang"</strong> & <strong>"Beli Melalui
                                Marketplace"</strong>, jika ingin membeli produk melalaui website ini maka klik tombol
                            <strong>"Masukkan Keranjang"</strong>, jika ingin menambah produk klik <strong>"Belanja
                                Lagi"</strong>, setelah itu lengkapi <strong>Form Data Pembeli</strong> yang tersedia,
                            kemudian klik <strong>"Checkout"</strong>, setelah muncul halaman <strong>"Invoice"</strong>
                            Klik tombol <strong>"Whatsapp"</strong> untuk menghubungi Admin(Pengelola) guna melakukan
                            konfirmasi transaksi dan melakukan pembayaran.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="col-lg-4 col-md-6 text-center">
                <div class="footer-widget">
                    <div class="widget-title">
                        <h6>Support By</h6>
                    </div>
                    <div class="address-line">
                        <img src="{{ asset('front') }}/Lambang_Kabupaten_Sleman.png" alt=""
                            style="max-width:100px; margin-bottom:10px">
                        <h6 style="color: #000">PT KALA CITRA NUSWANTARA<br>Kabupaten Sleman</h5>
                        <h6 style="color: #000">Dinas Koperasi, Usaha Kecil dan Menengah<br>Kabupaten Sleman</h5>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</footer>
<!-- End Footer Area -->
<!-- End Copyright Area -->
<div class="copyright-area black-bg">
    <div class="container">
        <div class="row ">
            <div class="col-12 text-center">
                <div class="copyright-area ">
                    <p>Copyright © {{ date('Y') }} <strong><span>PT KALA CITRA NUSWANTARA</span></strong>. All
                        Rights
                        Reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Copyright Area -->
