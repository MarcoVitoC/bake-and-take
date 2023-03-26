@extends('layouts.user')

@section('container')
    <div class="main-container">
        <div class="product-information-container">
            <div class="img-and-share">
                <img src="{{ asset('assets/Transaction/gambar_kue.jpg') }}" alt="Gambar Kue" width="534px" height="428.67px" class="img-kue">
                <div class="share-button">
                    <div class="share-text">Share</div>
                    <img src="{{ asset('assets/Transaction/share.jpg') }}" alt="Gambar Share" width="20px" height="16px">
                </div>
            </div>
                
            <div>
                <div class="brand-title"><b>Uni Cake</b></div>
                <div class="sold">120 Terjual</div>
                <div class="harga">Rp.130.000</div>
                <div class="detail-container">
                    <div class="detail-lists">
                        <div>Protection</div>
                        <div class="list-pengiriman">Pengiriman</div>
                        <div>Tipe Pembayaran</div>
                        <div>Kuantitas</div>
                        <div class="fav-button">
                            <img src="{{ asset('assets/Transaction/favorit.jpg') }}" alt="Gambar Hati" width="25px" height="20px">
                            <div class="fav-text">Favorit</div>
                        </div>
                    </div>

                    <div class="detail-isi">
                        <div>Proteksi Kerusakan Kue <button class="proteksi-info"><b>?</b></button></div>
                        <div class="alamat-pengiriman">Pengiriman Menuju Alamat_Pembeli</div>
                        <div>Transfer</div>
                        <div class="quantity">
                            <button class="quantity-button" id="decrease">-</button>
                            <div class="quantity-text">1</div>
                            <button class="quantity-button" id="increase">+</button>
                        </div>
                        <a href="transaction/konfirmasi-pembayaran"><div class="buy-button">Beli Sekarang</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="deskripsi-produk">
            <div class="teks-deskripsi">Deskripsi: </div>
            <div>Bahan: </div>
            <div class="deskripsi-bahan">
                210 gram tepung serbaguna, 400 gram gula pasir, 90 gram cokelat bubuk tanpa pemanis, 1 1/2 sdt baking powder, 1 1/2 sdt soda kue, 1 sdt garam, 2 butir telur besar , 250 ml susu, 120 ml minyak sayur , 1 1/2 ekstrak vanila, 250 ml air mendidih
            </div>
            <div class="paragraf-deskripsi">
                Kue Ini dibuat dengan  memanaskan susu cair, mentega dan gula sampai meleleh menggunakan api kecil mencegah bahan-Bahan menjadi gosong dan lengket. lalu di masukan ke dalam wadah lain dengan campuran telur, dan pasta coklat lalu di kocok. kemudian di campurkan ke dalam tepung terigu, coklat bubuk, baking powder dan soda kue diaduk hingga rata dengan pengaduk sehingga tidak ada gelembung dan warna menjadi merata lalu di kukus di dalem oven dengan suhu tinggi diamkan kurang lebih 25 menit sehingga matang sempurna dan mengembang dengan sempurna. dan di hias sedemikian rupa dengan bahan dan kerajingan tangan yang berkualitas.
            </div>
        </div>
    </div>
@endsection