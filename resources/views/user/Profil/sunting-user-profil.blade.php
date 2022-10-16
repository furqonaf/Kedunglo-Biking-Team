@extends('user/layoutuser/layout')
@section('isi')
<div class="main-body">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="main-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/user-profil">Profil</a></li>
      <li class="breadcrumb-item"><a>Medallers</a></li>
    </ol>
  </nav>
  <!-- /Breadcrumb -->

  <div class="row gutters-sm">
    <div class="col-md-4 mb-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex flex-column align-items-center text-center">
            <img src="/img/logo/LOGO KBT HITAM.png" alt="User" class="regular" width="180">
            <div class="mt-3">
            </div>
          </div>
          <div class="d-flex flex-column align-items-center text-center">
            <img src="/img/logo/icon profil.png" alt="User" class="rounded-circle" width="150">
            <div class="mt-3">
              <h4>Medallers 1</h4>
              <p class="text-secondary mb-1">#LGOLDKBT</p>
              <p class="text-muted font-size-sm">Surabaya, Indonesia</p>
            </div>
          </div>
        </div>
      </div>
      <div class="card" style="margin-top:10px;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
            <h6 class="mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-twitter mr-2 icon-inline text-info">
                <path
                  d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                </path>
              </svg>Twitter</h6>
            <input type="text" class="form-control" placeholder="Nama Akun Facebook">
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
            <h6 class="mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-instagram mr-2 icon-inline text-danger">
                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
              </svg>Instagram</h6>
            <input type="text" class="form-control" placeholder="Nama Akun Facebook">
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
            <h6 class="mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-facebook mr-2 icon-inline text-primary">
                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
              </svg>Facebook</h6>
            <input type="text" class="form-control" placeholder="Nama Akun Facebook">
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card mb-3">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">ID Medallers</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              7012456789
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mt-2">Nama Lengkap</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              <input type="text" class="form-control" placeholder="Nama Lengkap">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mt-2">Nama Akun Strava</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              <input type="text" class="form-control" placeholder="Nama Akun Strava">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mt-2">Tanggal Lahir</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              <input type="date" class="form-control" placeholder="Tanggal Lahir">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mt-3">Email</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                  placeholder="Enter email">
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mt-2">Nomor Whatsapp</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              <input type="text" class="form-control" placeholder="Nomor Whatsapp">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mt-2">Lokasi</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              <input type="text" class="form-control" placeholder="Lokasi Kabupaten, Provinsi, Negara">
            </div>
          </div>
        </div>
      </div>
      <div class="row gutters-sm">
        <div class="col-sm-12 mb-3">
          <div class="card h-100">
            <div class="card-body">
              <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i>Capaian Medal
                Minggu Ini</h6>
              <div class="row">
                <div class="col-xl-6">
                  <small>Distance(Jarak)</small>
                  <div class="col-sm-9 text-secondary">
                    128 Km
                  </div>
                  <small>Time(Waktu)</small>
                  <div class="col-sm-9 text-secondary">
                    15 h 28 m
                  </div>
                </div>
                <div class="col-xl-6">
                  <small>Elevation(Ketinggian)</small>
                  <div class="col-sm-9 text-secondary">
                    1678 m
                  </div>
                  <small>Avg. Speed(Keecepatan Rerata)</small>
                  <div class="col-sm-9 text-secondary">
                    23 Km/h
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection