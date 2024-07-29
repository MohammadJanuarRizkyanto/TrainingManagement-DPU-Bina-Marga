@extends('kerangka.master')

@section('content')

<!-- Basic Tables start -->

<section class="section">
        <!-- Halaman test -->
        <section class="section">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                            <!--Tittle -->
                                <div class="card-header">
                                    <h4 class="card-title text-center">Tambah Test Pelatihan Sertifikasi</h4>
                                </div>
                                <!--detail test -->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>ID Test</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="id_materi" name="id_materi" class="form-control" value="" placeholder="Masukkan ID Materi">
                                        </div>

                                        <div class="col-md-4">
                                            <label>Jenis Test</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="judul_materi"  name="judul_materi " class="form-control" value="" placeholder="Masukkan Judul Materi">
                                        </div>
                            <!--Question 1 -->
                                        <div class="mb-3 col-sm-12">
                                            <label for="question" class="form-label">Pertanyaan:</label>
                                            <textarea class="form-control" id="question1" name="question" rows="2" required></textarea>
                                        </div>

                            <!--Question 2 -->
                                        <div class="mb-3 col-sm-12">
                                            <label for="question" class="form-label">Pertanyaan:</label>
                                            <textarea class="form-control" id="question2" name="question" rows="2" required></textarea>
                                        </div>

                            <!--Question 3 -->
                                        <div class="mb-3 col-sm-12">
                                            <label for="question" class="form-label">Pertanyaan:</label>
                                            <textarea class="form-control" id="question3" name="question" rows="2" required></textarea>
                                        </div>

                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <a href="{{ route('viewdetailpelatihan') }}" type="submit" class="btn btn-primary me-1 mb-1">Submit</a>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
</div>
@endsection
