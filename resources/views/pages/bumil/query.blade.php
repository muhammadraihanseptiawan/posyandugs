@extends('layouts.app')

@section('title', 'data bumil')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
<link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>data nifas</h1>
          
            <form class="d-flex ml-auto" role="search" method="post">
                @csrf
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h5> menampilkan data dari </h5>
                    </div>
                    <ul>
                        <li>provinsi : {{$provinsi}}</li>
                        <li>kab_kota : {{$kab_kota}}</li>
                        <li>kecamatan : {{$kecamatan}}</li>
                        <li>Kelurahan : {{$Kelurahan}}</li>
                        <li>posyandu : {{$posyandu}}</li>
                    </ul>
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
                                        <td>
                                        <a href="{{ route('bumil.detail',  $item->id) }}">detail</a>
                                            <form method="POST" action="{{ route('bumil.hapus',  $item->id) }}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger ms-1 show_confirm" data-toggle="tooltip" title='Delete' onclick="confirm('yakin ingin hapus data?')">Delete</button>
                                            </form>
                                        </td>m>
                                        </td>

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