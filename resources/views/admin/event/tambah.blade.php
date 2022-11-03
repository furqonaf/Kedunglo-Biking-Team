@extends('admin/layoutadmin/layout')

@section('isi')
<div class="card">
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
                        <td>
                            <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01"
                                max="2018-12-31">
                            </input>
                        </td>
                        <td>
                            <input type="text">
                            </input>
                        </td>
                        <td>
                            <input type="text">
                            </input>
                        </td>
                        <td>
                            <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Kehadiran</option>
                                <option value="1">Miyos</option>
                                <option value="2">Tidak Miyos</option>
                            </select>
                        </td>
                        <td>
                            <a href="/admin-event" class="btn btn-primary">Terbitkan Event</a>
                        </td>
                    </tr>
                </tbody>
            </table>
    </div>
</div>
@endsection