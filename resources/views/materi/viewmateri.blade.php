@extends('kerangka.master')

@section('content')

<!-- Basic Tables start -->
<h7>DAFTAR MATERI PELATIHAN PEGAWAI DPU BINA MARGA PROVINSI JAWA TIMUR</h7>
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
                                        <th>Id Materi</th>
                                        <th>Judul</th>
                                        <th>Pemateri</th>
                                        <th>Durasi</th>
                                        <th>File</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materi as $materi)
                                    <tr>
                                        <td>{{$materi->id_materi}}</td>
                                        <td>{{$materi->judul_materi}}</td>
                                        <td>{{$materi->nama_pemateri}}</td>
                                        <td>{{$materi->jam}}</td>
                                        <td>{{$materi->file}}</td>
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
