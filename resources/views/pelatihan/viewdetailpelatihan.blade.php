@extends('kerangka.master')

@section('content')

<!-- Basic Tables start -->
<section class="section">
<form action="{{ route('absensi') }}">
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
            <div class="card-header">
                        <h6 class="card-title text-center">DETAIL PELATIHAN</h6>
                    </div>
                <div class="card-content">
                    <div class="card-body">
            <!-- detail pelaihan -->
                    <div class="row">
                    <div class="col-md-4">
                            <label>ID Training</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <div class="form-control" style="background-color: #f5f5f5;"></div>
                        </div>

                        <div class="col-md-4">
                            <label>Judul Pelatihan</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <div class="form-control" style="background-color: #f5f5f5;"></div>
                        </div>

                        <div class="col-md-4">
                            <label>Tanggal Training</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <div class="form-control" style="background-color: #f5f5f5;"></div>
                        </div>

                        <div class="col-md-4">
                            <label>Jenis Pelatihan</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <div class="form-control" style="background-color: #f5f5f5;"></div>
                        </div>

                        <div class="col-md-4">
                            <label>Tempat Pelatihan</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <div class="form-control" style="background-color: #f5f5f5;"></div>
                        </div>

                        <div class="col-md-4">
                            <label for="pelaksanaan_training">Pelaksanaan Training</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <div class="form-control" style="background-color: #f5f5f5;"></div>
                        </div>
                        </div>

                        </div>

                <!-- Tabel list materi -->
                <div class="table-responsive">
                    <h6 class="card-title text-center">Daftar Materi Pelatihan</h6>
                    <div class="text-end mb-3">
                        <a href="{{ route('addmateri') }}" class="btn btn-primary">Tambah Materi</a>
                    </div> 
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th>No</th>
                                <th>Id Materi</th>
                                <th>Judul</th>
                                <th>Pemateri</th>
                                <th>Durasi</th>
                                <th>File</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>1</td>
                                <td>MGMNT-01</td>
                                <td>Managment Waktu</td>
                                <td>Pemateri 1</td>
                                <td>02:00</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


             <!-- Tabel list Test -->
                    <div class="mt-5">
                    <h3 class="card-title text-center">Daftar Test Pelatihan</h3>
                    <div class="text-end mb-3">
                        <a href="{{ route('addtest') }}" class="btn btn-primary">Tambah Test</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>No</th>
                                    <th>Nama Test</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td></td>
                                    <th>1</th>
                                    <th>Pre-Test</th>
                                    <td>
                                        <a href="{{ route('viewtest2') }}">
                                            <i class="fa fa-check text-success"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <th>2</th>
                                    <th>On-Test</th>
                                    <td>
                                        <a href="{{ route('viewtest2') }}">
                                            <i class="fa fa-check text-success"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <th>3</th>
                                    <th>Post-Test</th>
                                    <td>
                                        <a href="{{ route('viewtest2') }}">
                                            <i class="fa fa-times text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                

                            </tbody>
                        </table>
                        <div class="mt-5">
                        <button type="submit" class="btn btn-primary w-100">Absensi</button>
</form>
                        </div>
                    </div>

            <!-- Custom CSS for card background color -->
            <style>
            .custom-card-bg {
                background-color: #f0f0f0; 
            }
            </style>

        </div>
    </div>
</section>

@endsection
