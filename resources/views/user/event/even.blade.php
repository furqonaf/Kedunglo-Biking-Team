@extends('user/layoutuser/layout')
@section('isi')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Even</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i>Unduh Statistika Medal</a>
    </div>
    <div class="row">

         <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">KBT Medal Rubu'ussanah Surabaya</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                <table class="table table-hover table-dark">
        <thead>
            <tr>
            <th scope="col">Kamis, 06 Oktober 2022</th>
            <th scope="col">KBT Medal Rubu'ussanah</th>
            <th scope="col">Lokasi: SUrabaya</th>
            <th scope="col">Status: Partisipan</th>
            </tr>
        </thead>
        </table>
        <a href="/user-detail-even">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
        
         <!-- Area Chart -->
         <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">KBT Medal Maulud Mengkelud Munggah Gunung Kelud</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                <table class="table table-hover table-dark">
        <thead>
            <tr>
            <th scope="col">Kamis, 08 Oktober 2022</th>
            <th scope="col">KBT Maulud Mengkelud</th>
            <th scope="col">Lokasi: Kediri</th>
            <th scope="col">Status: Peserta</th>
            </tr>
        </thead>
        </table>
        <a href="/user-detail-even">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

@endsection