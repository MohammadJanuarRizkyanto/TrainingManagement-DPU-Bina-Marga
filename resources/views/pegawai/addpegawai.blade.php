@extends('kerangka.master')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title text-center">Tambah Data Pegawaian DPU Bina Marga Provinsi Jawa Timur</h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('addpegawai.store') }}" method="POST">
                                @csrf
                                <div class="form-body">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <label>Nomor Induk Pegawai (NIP)</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="nip" name="nip"
                                                class="form-control @error('nip') is invalid
                                            @enderror"
                                                value="{{ old('nip') }}" placeholder="Masukkan Nomor Induk Pegawai" required>
                                            @error('nip')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label>Nama Lengkap</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nama"  name="nama " class="form-control @error('nama') is invalid
                                            @enderror"
                                                value="{{ old('nama') }}" placeholder="Masukkan Nama Lengkap" required>
                                            @error('nama')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label>Jabatan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                        <input type="text" id="jabatan" name="jabatan" class="form-control @error('jabatan') is invalid
                                            @enderror"
                                                value="{{ old('jabatan') }}" placeholder="Masukkan Jabatan " required>
                                            @error('jabatan')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label>Unit Kerja</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="unit_kerja" name="unit_kerja" class="form-control @error('unit_kerja') is invalid
                                            @enderror"
                                                value="{{ old('unit_kerja') }}" placeholder="Masukkan Unit Kerja" required>
                                            @error('unit_kerja')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
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