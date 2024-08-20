@extends('layouts.app')

@section('title', 'data ibu nifas')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
<link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>data ibu nifas</h1>

        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>detail ibu nifas</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <div style="padding-bottom: 20px;">
                                <h2><b>Data Ibu nifas</b></h2>
                            </div>
                        </div>
                        <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                            <div id="personal-info">
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Nama:</h4>
                                    <p style="font-size:20px;">{{$nifas->nama}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">kenifasan ke:</h4>
                                    <p style="font-size:20px;">{{$nifas->kenifasan_ke}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">tanggal lahir:</h4>
                                    <p style="font-size:20px;">{{$nifas->tanggal_lahir}} bulan</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">NIK:</h4>
                                    <p style="font-size:20px;">{{$nifas->nik}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Nomor KK:</h4>
                                    <p style="font-size:20px;">{{$nifas->nomor_kk}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Anak ke:</h4>
                                    <p style="font-size:20px;">{{$nifas->anak_ke}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Jenis Kelamin:</h4>
                                    <p style="font-size:20px;">{{$nifas->jenis_kelamin}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Berat Badan Awal:
                                    </h4>
                                    <p style="font-size:20px;">{{$nifas->bb_awal}} cm</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Tinggi Badan Awak:
                                    </h4>
                                    <p style="font-size:20px;">{{$nifas->tb_awal}} cm</p>
                                </div>
                         
                           
                            </div>


                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 col-sm-12">
        

                <!-- grafik -->
                <div class="card">
                <div class="info">
                                    <h4 class="card-title card-title-dash">Nama Suami:</h4>
                                    <p style="font-size:20px;">{{$nifas->nama_suami}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">NIK Suami:</h4>
                                    <p style="font-size:20px;">{{$nifas->nik_suami}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">No Hp Suami:</h4>
                                    <p style="font-size:20px;">{{$nifas->no_hp_suami}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Provinsi:</h4>
                                    <p style="font-size:20px;">{{$nifas->provinsi}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Kab/Kota:</h4>
                                    <p style="font-size:20px;">{{$nifas->kab_kota}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Kecamatan:</h4>
                                    <p style="font-size:20px;">{{$nifas->kecamatan}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Puskesmas Pembina:
                                    </h4>
                                    <p style="font-size:20px;">{{$nifas->puskesmas_pembina}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Desa/Kelurahan:</h4>
                                    <p style="font-size:20px;">{{$nifas->desa_kelurahan}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Posyandu:</h4>
                                    <p style="font-size:20px;">{{$nifas->posyandu}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">RT:</h4>
                                    <p style="font-size:20px;">{{$nifas->rt}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">RW:</h4>
                                    <p style="font-size:20px;">{{$nifas->rw}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Alamat:</h4>
                                    <p id="alamat">{{$nifas->alamat_lengkap}}</p>
                                </div>
                </div>

            </div>
    </section>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->
<script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
<script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('js/page/index-0.js') }}"></script>

@endpush