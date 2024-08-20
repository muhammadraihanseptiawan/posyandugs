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
            <div class="col-lg-12 col-md-12 col-12 col-sm-12"> 
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>filter bayi</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <div style="padding-bottom: 20px;">
                                <h2><b>filter Balita</b></h2>
                            </div>
                        </div>
                        <form method="post">
                            <div class="card">

                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label class="font-extrabold" style="font-weight: bold; font-size:20px;">Pilih balita *</label>
                                        <select class="form-control" id="nama_balita">
                                            <option value="">Pilih Balita</option>
                                            @foreach($bayiDropdown as $nik => $nama)
                                            <option value="{{$nik}}">{{$nama}} || {{$nik}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group d-none">
                                        <label class="font-extrabold" style="font-weight: bold; font-size:20px;">user id* </label>
                                        <input type="text" class="form-control  " name="user_id" id="user_id" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-extrabold" style="font-weight: bold; font-size:20px;">NAMA* </label>
                                        <input type="text" class="form-control " name="nama" id="nama" readonly required>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-extrabold" style="font-weight: bold; font-size:20px;">nik* </label>
                                        <input type="text" class="form-control " name="nik" id="nik" readonly required>
                                    </div>

                                    <div class="form-group">
                                        <label class="font-extrabold" style="font-weight: bold; font-size:20px;">USIA* </label>
                                        <input type="text" class="form-control " name="umur" id="umur" readonly required>
                                        <p style="color: red; font-size:15px; margin-top:5px; " id="umurhidden" class="d-none">Keterangan : Umur 0 sampai 12 bulan</p>
                                    </div>

                                    <div class="form-group">
                                        <label class="font-extrabold" style="font-weight: bold; font-size:20px;">Tanggal timbang sekarang* </label>
                                        <input type="text" class="form-control" name="tanggal_sekarang" id="umur" value="{{$ldate}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-extrabold" style="font-weight: bold; font-size:20px;">tinggi badan (CM)* </label>
                                        <input type="number" class="form-control" name="tinggi_badan" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-extrabold" style="font-weight: bold; font-size:20px;">berat badan (KG)* </label>
                                        <input type="number" class="form-control" name="berat_badan" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="font-extrabold" style="font-weight: bold; font-size:20px;">lingkar kepala (CM)* </label>
                                        <input type="number" class="form-control" name="lingkar_kepala" required>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary mr-1" type="submit">tambah</button>
                                        <button class="btn btn-secondary" type="reset">batal</button>
                                    </div>

                                </div>
                        </form>
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
<script src="{{ asset('js/page/index-1.js') }}"></script>

@endpush