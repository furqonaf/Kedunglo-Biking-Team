@extends('admin/layoutadmin/layout')

@section('isi')

<h1>Event</h1>

<h2>Mendatang</h1>

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

<h2>Memories</h2>

<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Event</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">3</th>
      <td>Mark</td>
      <td>12-12-2022</td>
      <td>
        <a href="" class="btn btn-primary">Detail</a>
      </td>
    </tr>
  </tbody>
</table>

@endsection