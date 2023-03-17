@extends('layouts.transaction')

@section('container')
    <div class="product-information-container">
        <div class="img-and-share">
            <img src="{{ asset('assets/Transaction/gambar_kue.jpg') }}" alt="Gambar Kue" width="534px" height="509px">
            <div class="share-button">
                <div class="share-text">Share</div>
                <img src="{{ asset('assets/Transaction/share.jpg') }}" alt="Gambar Share" width="20px" height="16px">
            </div>
        </div>
            
        <div>
            <div class="brand-title"><b>Uni Cake</b></div>
            <div class="sold">120 Terjual</div>
            <div class="harga">Rp.50.000 - Rp.130.000</div>
            <div class="detail-container">
                <div class="detail-lists">
                    <div>Protection</div>
                    <div class="list-pengiriman">Pengiriman</div>
                    <div class="list-ukuran">Ukuran</div>
                    <div>Tipe Pembayaran</div>
                    <div>Kuantitas</div>
                    <div class="fav-button">
                        <img src="{{ asset('assets/Transaction/favorit.jpg') }}" alt="Gambar Hati" width="25px" height="20px">
                        <div class="fav-text">Favorit</div>
                    </div>
                </div>

                <div class="detail-isi">
                    <div>Proteksi Kerusakan Kue <button class="proteksi-info"><b>?</b></button></div>
                    <div>
                        <div>Pilih Pengirim <button class="show-dropdown">&#9660;</button></div>
                        <div class="alamat-pengiriman">Pengiriman Dari Alamat_Penjual ke Alamat_Pembeli</div>
                        <div>Ongkos Kirim    Rp0</div>
                    </div>
                    <div class="detail-ukuran">
                        <button class="button-ukuran">Kecil 20x10</button>
                        <button class="button-ukuran">Sedang 20x10</button>
                        <button class="button-ukuran">Besar 20x10</button>
                    </div>
                    <div>Pilih Pembayaran <button class="show-dropdown">&#9660;</button></div>
                    <div class="quantity">
                        <button class="quantity-button">-</button>
                        <div class="quantity-text">1</div>
                        <button class="quantity-button">+</button>
                    </div>
                    <div class="buy-button">Beli Sekarang</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-info-toko">
        <img src="{{ asset('assets/Transaction/gambar_toko.jpg') }}" alt="Gambar Toko" width="58px" height="50px">
        <div>
            <div class="nama-toko">UnicornGroup</div>
            <div class="jumlah-terjual">120 Terjual</div>
        </div>
        <div class="lihat-toko">Lihat Toko</div>
    </div>

    <div class="deskripsi-produk">
        <div class="teks-deskripsi">Deskripsi: </div>
        <div>Bahan: </div>
            <div>1. 210 gram tepung serbaguna</div>
            <div>2. 400 gram gula pasir</div>
            <div>3. 90 gram cokelat bubuk tanpa pemanis</div>
            <div>4. 1 <sup>1</sup>/<sub>2</sub> sdt baking powder</div>
            <div>5. 1 <sup>1</sup>/<sub>2</sub> sdt soda kue</div>
            <div>6. 1 sdt garam</div>
            <div>7. 2 butir telur besar</div>
            <div>8. 250 ml susu</div>
            <div>9. 120 ml minyak sayur</div>
            <div>10. 1 <sup>1</sup>/<sub>2</sub> ekstrak vanila</div>
            <div>11. 250 ml air mendidih</div>
        <div class="paragraf-deskripsi">
            Kue Ini dibuat dengan  memanaskan susu cair, mentega dan gula sampai meleleh menggunakan api kecil mencegah bahan-Bahan menjadi gosong dan lengket. lalu di masukan ke dalam wadah lain dengan campuran telur, dan pasta coklat lalu di kocok. kemudian di campurkan ke dalam tepung terigu, coklat bubuk, baking powder dan soda kue diaduk hingga rata dengan pengaduk sehingga tidak ada gelembung dan warna menjadi merata lalu di kukus di dalem oven dengan suhu tinggi diamkan kurang lebih 25 menit sehingga matang sempurna dan mengembang dengan sempurna. dan di hias sedemikian rupa dengan bahan dan kerajingan tangan yang berkualitas.
        </div>
    </div>
@endsection