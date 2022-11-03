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
                                <th class="text-center">Provinsi</th>
                                <th class="text-center">Kabupaten</th>
                                <th class="text-center">Surat Tugas Pendirian</th>
                                <th class="text-center">Pembaharuan SK</th>
                                <th class="text-center">Ijin Pengadaan Media Sosial</th>
                                <th class="text-center">Status Kepengurusan</th>
                                <th class="text-center">Status Keanggotaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>Jawa Timur</td>
                                <td>Malang</td>
                                <td>
                                    <select class="custom-select" id="inputGroupSelect01" style="width: 130px">
                                        <option selected>Status...</option>
                                        <option value="1">Legal</option>
                                        <option value="2">Belum Ada</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Status...</option>
                                        <option value="1">Legal</option>
                                        <option value="2">Expired</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="custom-select" id="inputGroupSelect01" style="width: 130px">
                                        <option selected>Status...</option>
                                        <option value="1">Legal</option>
                                        <option value="2">Belum Ada</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="custom-select" id="inputGroupSelect01" style="width: 130px">
                                        <option selected>Status...</option>
                                        <option value="1">Aktif</option>
                                        <option value="2">Non Aktif</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="custom-select" id="inputGroupSelect01" style="width: 130px">
                                        <option selected>Status...</option>
                                        <option value="1">Aktif</option>
                                        <option value="2">Non Aktif</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jawa Timur</td>
                                <td>Malang</td>
                                <td>
                                    <select class="custom-select" id="inputGroupSelect01" style="width: 130px">
                                        <option selected>Status...</option>
                                        <option value="1">Legal</option>
                                        <option value="2">Belum Ada</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Status...</option>
                                        <option value="1">Legal</option>
                                        <option value="2">Expired</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="custom-select" id="inputGroupSelect01" style="width: 130px">
                                        <option selected>Status...</option>
                                        <option value="1">Legal</option>
                                        <option value="2">Belum Ada</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="custom-select" id="inputGroupSelect01" style="width: 130px">
                                        <option selected>Status...</option>
                                        <option value="1">Aktif</option>
                                        <option value="2">Non Aktif</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="custom-select" id="inputGroupSelect01" style="width: 130px">
                                        <option selected>Status...</option>
                                        <option value="1">Aktif</option>
                                        <option value="2">Non Aktif</option>
                                    </select>
                                </td>
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