@extends('layouts.main')

@section('container')
    @include('components.admin-navbar')
        <div class="empty-space"></div>
        <div class="dropdown">
            <div class="logout">
            <form action="/" method="post">
                @csrf
                <button type="submit"><img src="{{ asset('assets/User/logout.png') }}" alt="Log Out" width="25px" height="25px"> Log Out</button>
            </form>
            </div>
        </div>

        <div class="main-container">
            <div class="product-container">
                <img src="{{ asset('assets/Transaction/gambar_kue.jpg') }}" alt="Gambar Kue" width="534px" height="428.67px" class="img-kue">
                <div class="nama-kue">Uni Cake</div>
                <div class="harga-kue">Rp.130.000</div>
                <div class="category-container">
                    <div class="teks-category">Category</div>
                    <div class="category-kue">All category</div>
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

            <a href="#"><div class="edit-button">Edit</div></a>
        </div>
    @include('components.footer')
@endsection