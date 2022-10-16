@extends('admin/layoutadmin/layout')

@section('isi')
<h1>Detail Event</h1>
<form>
    <div class="row mt-3">
        <div class="col-xl-2 mt-1">
            <div class="form-group">
              <label for="event">Event</label>
            </div>
        </div>
        <div class="col-xl-6">
            <input type="text" class="form-control" id="event" aria-describedby="emailHelp" value="Medal Rubuusanah Blitar">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-xl-2 mt-1">
            <div class="form-group">
              <label for="tanggal">Tanggal</label>
            </div>
        </div>
        <div class="col-xl-6">
            <input type="text" class="form-control" id="tanggal" aria-describedby="emailHelp" value="12-Januari-2022">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-xl-2 mt-1">
            <div class="form-group">
              <label for="lokasi">Lokasi</label>
            </div>
        </div>
        <div class="col-xl-6">
            <input type="text" class="form-control" id="lokasi" aria-describedby="emailHelp" value="Blitar">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-xl-2 mt-1">
            <div class="form-group">
              <label for="lokasi">Keterangan</label>
            </div>
        </div>
        <div class="col-xl-6">
            <input type="text" class="form-control" id="lokasi" aria-describedby="emailHelp" value="Miyos / Tidak Miyos">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-xl-2 mt-1">
            <div class="form-group">
              <label for="lokasi">Dokuemtasi</label>
            </div>
        </div>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection