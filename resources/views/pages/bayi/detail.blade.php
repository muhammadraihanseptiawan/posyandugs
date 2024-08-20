@extends('layouts.app')

@section('title', 'data bayi')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
<link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>data balita</h1>

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
                        <h4>detail bayi</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <div style="padding-bottom: 20px;">
                                <h2><b>Data Balita</b></h2>
                            </div>
                        </div>
                        <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                            <div id="personal-info">
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Nama:</h4>
                                    <p style="font-size:20px;">{{$bayi->nama}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">usia:</h4>
                                    <p style="font-size:20px;">{{$bayi->usia}} bulan</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">NIK:</h4>
                                    <p style="font-size:20px;">{{$bayi->nik}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Nomor KK:</h4>
                                    <p style="font-size:20px;">{{$bayi->nomor_kk}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Anak ke:</h4>
                                    <p style="font-size:20px;">{{$bayi->anak_ke}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Jenis Kelamin:</h4>
                                    <p style="font-size:20px;">{{$bayi->jenis_kelamin}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Berat Badan Lahir:
                                    </h4>
                                    <p style="font-size:20px;">{{$bayi->bb_lahir}} cm</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Tinggi Badan Lahir:
                                    </h4>
                                    <p style="font-size:20px;">{{$bayi->tb_lahir}} cm</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Lingkar Kepala Lahir:
                                    </h4>
                                    <p style="font-size:20px;">{{$bayi->lingkar_kepala_lahir}} cm</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Tanggal Lahir:</h4>
                                    <p id="tanggal-lahir">
                                        {{$bayi->tanggal_lahir}}
                                    </p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Nama Orang Tua:</h4>
                                    <p style="font-size:20px;">{{$bayi->nama_orang_tua}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">NIK Orang Tua:</h4>
                                    <p style="font-size:20px;">{{$bayi->nik_orang_tua}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">No Hp Orang Tua:</h4>
                                    <p style="font-size:20px;">{{$bayi->no_hp_orang_tua}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Provinsi:</h4>
                                    <p style="font-size:20px;">{{$bayi->provinsi}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Kab/Kota:</h4>
                                    <p style="font-size:20px;">{{$bayi->kab_kota}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Kecamatan:</h4>
                                    <p style="font-size:20px;">{{$bayi->kecamatan}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Puskesmas Pembina:
                                    </h4>
                                    <p style="font-size:20px;">{{$bayi->puskesmas_pembina}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Desa/Kelurahan:</h4>
                                    <p style="font-size:20px;">{{$bayi->desa_kelurahan}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Posyandu:</h4>
                                    <p style="font-size:20px;">{{$bayi->posyandu}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">RT:</h4>
                                    <p style="font-size:20px;">{{$bayi->rt}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">RW:</h4>
                                    <p style="font-size:20px;">{{$bayi->rw}}</p>
                                </div>
                                <div class="info">
                                    <h4 class="card-title card-title-dash">Alamat:</h4>
                                    <p id="alamat">{{$bayi->alamat_lengkap}}</p>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>detail bayi</h4>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Riwayat Hasil Pengukuran</h4>
                        <div class="d-flex">
                            <img width="50px" src="https://posyandugs.com/assets/images/faces/man.jpg" alt="">
                            <div style="padding-left: 20px;">
                                <h4>
                                    {{$bayi->nama}}
                                </h4>
                                <p> NIK.
                                    {{$bayi->nik}}
                                </p>
                            </div>
                        </div>
                        <section class="section">
                            <div class="table-responsive  mt-1">
                                <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                    <div class="dataTable-container">
                                        <table class="table select-table dataTable-table" id="table1">
                                            <thead>
                                                <tr>
                                                    <th data-sortable="" style="width: 2.85423%;"><a href="#" class="dataTable-sorter">No</a></th>
                                                    <th data-sortable="" style="width: 14.1352%;"><a href="#" class="dataTable-sorter">Usia Saat Diukur</a></th>
                                                    <th data-sortable="" style="width: 13.0479%;"><a href="#" class="dataTable-sorter">Tanggal</a></th>
                                                    <th data-sortable="" style="width: 15.3585%;"><a href="#" class="dataTable-sorter">USIA</a></th>
                                                    <th data-sortable="" style="width: 15.3585%;"><a href="#" class="dataTable-sorter">BB/U</a></th>
                                                    <th data-sortable="" style="width: 21.0669%;"><a href="#" class="dataTable-sorter">PB/U - TB/U</a></th>
                                                    <th data-sortable="" style="width: 13.0479%;"><a href="#" class="dataTable-sorter">BB/PB - BB/TB</a></th>
                                                    <th data-sortable="" style="width: 13.0479%;"><a href="#" class="dataTable-sorter">IMT/U</a></th>
                                                    <th data-sortable="" style="width: 11.6888%;"><a href="#" class="dataTable-sorter">Aksi</a></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($giziRecords as $index => $gizi)
                                                <tr>
                                                    <td>
                                                        <h6>{{ $index + 1 }}.</h6>
                                                    </td>

                                                    <td>
                                                        <label class="badge badge-danger">{{ $gizi->umur }} Bulan</label>
                                                        <p>BB {{ $gizi->berat_badan }} kg</p>
                                                        <p>TB {{ $gizi->tinggi_badan * 100 }} cm</p>
                                                        <p>LK {{ $gizi->lebar_kepala }} cm</p>
                                                    </td>
                                                    <td>
                                                        <h6>{{ $bayi->tanggal_lahir }}</h6>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-opacity-success">
                                                            <h6>{{ $gizi->umur }} BULAN</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-opacity-success">
                                                            <h6>{{ $bbu_teks[$index] }}</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-opacity-success">
                                                            <h6>{{ $tbu_teks[$index] }}</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-opacity-warning">
                                                            <h6>{{ $bb_tb_teks[$index] }}</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-opacity-warning">
                                                            <h6>{{ $imt_teks[$index] }}</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <form method="POST" action="{{ route('bayi.hapus',  $gizi->id) }}">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger ms-1 show_confirm" data-toggle="tooltip" title='Delete' onclick="confirm('yakin ingin hapus data?')">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>


                                        </table>
                                    </div>

                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <!-- grafik -->
                <div class="card">
                    <div class="card-header">
                        <h4>grafik bayi</h4>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Riwayat Hasil Pengukuran</h4>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Statistics</h4>
                                        <div class="card-header-action">

                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myChart" height="182"></canvas>

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

@push('scripts')
<!-- JS Libraies -->
<script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
<script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('js/page/index-0.js') }}" data-from-php-bbu="{{ $json_data_bbu }}" data-from-php-tbu="{{ $json_data_tbu }}" data-from-php-bbtb="{{$json_data_bbtb}}" data-from-php-imt="{{$json_data_imt}}" data-from-php-berat="{{$json_data_berat}}"></script>

@endpush