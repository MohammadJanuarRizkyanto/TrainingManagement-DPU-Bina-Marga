@extends('kerangka.master')

@section('content')

<!-- Basic Tables start -->
<section class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
            <div class="card-header">
                        <h6 class="card-title text-center">Daftar Test Pelatihan</h6>
                    </div>
             <!-- Tabel list Test -->
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
                                            <i class="fa fa-play text-success"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <th>2</th>
                                    <th>On-Test</th>
                                    <td>
                                        <a href="{{ route('viewtest2') }}">
                                            <i class="fa fa-play text-success"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <th>3</th>
                                    <th>Post-Test</th>
                                    <td>
                                        <a href="{{ route('viewtest2') }}">
                                            <i class="fa fa-play text-success"></i>
                                        </a>
                                    </td>
                                </tr>
                                

                            </tbody>
                        </table>
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
