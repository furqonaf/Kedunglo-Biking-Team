@extends('admin/layoutadmin/layout')

@section('isi')
<div>
    <div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Wilayah Kepengurusan Kedunglo Biking Team</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="text-center">Lokasi</th>
                                <th class="text-center">Provinsi</th>
                                <th class="text-center">Kabupaten</th>
                                <th class="text-center">Jumlah Anggota</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Jawa</td>
                                <td>Jawa Timur</td>
                                <td>Kediri</td>
                                <td>240 Medallers</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jawa</td>
                                <td>Jawa Timur</td>
                                <td>Malang</td>
                                <td>240 Medallers</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    <!-- End of Footer -->

</div>
@endsection