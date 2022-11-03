@extends('admin/layoutadmin/layout')

@section('isi')
<div class="card mt-20">
  <div class="card-body">
    <h1>
      <p class="text-primary">Event</p>
    </h1>
  </div>
</div>

<div class="card">
  <div class="card-body">
    <h2>
    <p class="text-danger">Mendatang</p>
      </h1>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Tanggal</th>
            <th scope="col">Event</th>
            <th scope="col">Lokasi</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Detail</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>12-12-2022</td>
            <td>Medal Rubuusanah</td>
            <td>Blitar</td>
            <td>Miyos</td>
            <td>
              <a href="/admin-detail" class="btn btn-primary">Detail</a>
            </td>
          </tr>
        </tbody>
      </table>
  </div>
</div>
<div class="card">
  <div class="card-body">
    <h2>
    <p class="text-warning">Lampau</p>
    </h2>

    <table class="table table-hover table-dark">
      <thead>
        <tr>
          <th scope="col">Tanggal Event</th>
          <th scope="col">Nama Event</th>
          <th scope="col">Lokasi</th>
          <th scope="col">Detail</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">10 Oktober 2022</th>
          <td>Medal Rubuussanah</td>
          <td>Surabaya</td>
          <td>
            <a href="" class="btn btn-primary">Detail</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection