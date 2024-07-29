@extends('kerangka.master')

@section('content')

<!-- Basic Tables start -->
<h7>DAFTAR KEPEGAWAIAN DPU BINA MARGA PROVINSI JAWA TIMUR</h7>
<section class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <!-- Table with outer spacing -->
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Unit Kerja</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pegawai as $data)
                                    <tr>
                                        <td>{{$data->nip_pegawai}}</td>
                                        <td>{{$data->nama_pegawai}}</td>
                                        <td>{{$data->jabatan_pegawai}}</td>
                                        <td>{{$data->unit_kerja}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
