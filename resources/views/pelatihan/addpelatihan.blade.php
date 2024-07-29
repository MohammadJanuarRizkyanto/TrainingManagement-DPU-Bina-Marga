@extends('kerangka.master')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title text-center">Tambah Pelatihan Pegawai DPU Bina Marga Provinsi Jawa Timur</h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <label>ID Training</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="id_training" name="id_training" class="form-control" placeholder="Masukkan ID Pelatihan">
                                        </div>

                                        <div class="col-md-4">
                                            <label>Judul Pelatihan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="judul_traininig"  name="judul_traininig " class="form-control" placeholder="Masukkan Judul Pelatihan">
                                        </div>

                                        <div class="col-md-4">
                                            <label>Tanggal Training</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                        <input type="date" id="tanggal_training" name="tanggal_training" class="form-control" placeholder="Masukkan Tanggal Pelatihan ">
                                        </div>

                                        <div class="col-md-4">
                                            <label>Jenis Pelatihan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="jenis_traininig"  name="jenis_traininig " class="form-control" placeholder="Masukkan Jenis Pelatihan">
                                        </div>

                                        <div class="col-md-4">
                                            <label>Tempat Pelatihan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="tempat_traininig"  name="tempat_traininig " class="form-control" placeholder="Masukkan Tempat Lokasi Pelatihan">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="pelaksanaan_training">Pelaksanaan Training</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select id="pelaksanaan_training" name="pelaksanaan_training" class="form-control" required>
                                                <option value="">Pilih Jenis Pelaksanaan Training</option>
                                                <option value="Luring">Luring (Offline)</option>
                                                <option value="Daring">Daring (Online)</option>
                                                <option value="Hybrid">Hybrid (Offline & Online)</option>
                                            </select>
                                        </div>


                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection