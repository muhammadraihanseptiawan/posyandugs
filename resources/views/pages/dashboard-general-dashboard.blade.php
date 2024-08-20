@extends('layouts.app')

@section('title', 'General Dashboard')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
<link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>

        </div>
        <h5>Selamat datang admin, kamu adalah superuser</h5>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Admin posyandu</h4>
                        </div>
                        <div class="card-body">
                         {{$userCount}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>total bayi</h4>
                        </div>
                        <div class="card-body">
                            {{$bayiCount}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>total ibu hamil keseluruhan</h4>
                        </div>
                        <div class="card-body">
                        {{$bumilCount}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>total ibu nifas keseluruhan</h4>
                        </div>
                        <div class="card-body">
                        {{$nifasCount}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>total bayi</h4>
                        <div class="card-header-action">
                            <a href="{{ route('bayi.index') }}" class="btn btn-primary">View All</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table-striped mb-0 table">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>nama</th>
                                        <th>nik</th>
                                        <th>tanggal lahir</th>
                                        <th>nomor kk</th>
                                        <th>jenis kelamin</th>
                                        <th>bb lahir</th>
                                        <th>tb lahir</th>
                                        <th>lingkar kepala lahir</th>
                                        <th>nama orang tua</th>
                                        <th>no hp orang tua</th>
                                        <th>posyandu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bayis as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nik }}</td>
                                        <td>{{ $item->tanggal_lahir }}</td>
                                        <td>{{ $item->nomor_kk }}</td>
                                        <td>{{ $item->jenis_kelamin }}</td>
                                        <td>{{ $item->bb_lahir }}</td>
                                        <td>{{ $item->tb_lahir }}</td>
                                        <td>{{ $item->lingkar_kepala_lahir }}</td>
                                        <td>{{ $item->nama_orang_tua }}</td>
                                        <td>{{ $item->no_hp_orang_tua }}</td>
                                        <td>{{ $item->posyandu }}</td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>ibu hamil</h4>
                        <div class="card-header-action">
                            <a href="{{route('bumil.index')}}" class="btn btn-primary">View All</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table-striped mb-0 table">
                                <thead>
                                    <tr>
                                        <th>nama</th>
                                        <th>nik</th>
                                        <th>tanggal lahir</th>
                                        <th>nomor kk</th>
                                        <th>Kehamilan ke</th>
                                        <th>bb awal</th>
                                        <th>tb awal</th>
                                        <th>hpht</th>
                                        <th>hb</th>
                                        <th>golongan darah</th>
                                        <th>kontrasepsi sebelum hamil</th>
                                        <th>buku kia</th>
                                        <th>riwayat penyakit</th>
                                        <th>riwayat alergi</th>
                                       
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bumils as $item)
                                    <tr>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nik }}</td>
                                        <td>{{ $item->tanggal_lahir }}</td>
                                        <td>{{ $item->nomor_kk }}</td>
                                        <td>{{ $item->kehamilan_ke }}</td>
                                        <td>{{ $item->bb_awal }}</td>
                                        <td>{{ $item->tb_awal }}</td>
                                        <td>{{ $item->hpht }}</td>
                                        <td>{{ $item->hb }}</td>
                                        <td>{{ $item->golongan_darah }}</td>
                                        <td>{{ $item->kontrasepsi_sebelum_hamil }}</td>
                                        <td>{{ $item->buku_kia }}</td>
                                        <td>{{ $item->riwayat_penyakit }}</td>
                                        <td>{{ $item->riwayat_alergi }}</td>
                                       

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>ibu nifas</h4>
                        <div class="card-header-action">
                            <a href="{{route('nifas.index')}}" class="btn btn-primary">View All</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table-striped mb-0 table">
                                <thead>
                                    <tr>
                                        <th>nama</th>
                                        <th>nik</th>
                                        <th>tanggal lahir</th>
                                        <th>nomor kk</th>
                                        <th>Kehamilan ke</th>
                                        <th>bb awal</th>
                                        <th>tb awal</th>
                                        <th>hpht</th>
                                        <th>hb</th>
                                        <th>golongan darah</th>
                                        <th>kontrasepsi sebelum hamil</th>
                                        <th>buku kia</th>
                                        <th>riwayat penyakit</th>
                                        <th>riwayat alergi</th>
                                       
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nifass as $item)
                                    <tr>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nik }}</td>
                                        <td>{{ $item->tanggal_lahir }}</td>
                                        <td>{{ $item->nomor_kk }}</td>
                                        <td>{{ $item->kehamilan_ke }}</td>
                                        <td>{{ $item->bb_awal }}</td>
                                        <td>{{ $item->tb_awal }}</td>
                                        <td>{{ $item->hpht }}</td>
                                        <td>{{ $item->hb }}</td>
                                        <td>{{ $item->golongan_darah }}</td>
                                        <td>{{ $item->kontrasepsi_sebelum_hamil }}</td>
                                        <td>{{ $item->buku_kia }}</td>
                                        <td>{{ $item->riwayat_penyakit }}</td>
                                        <td>{{ $item->riwayat_alergi }}</td>
                                       

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
<script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush