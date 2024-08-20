@extends('layouts.app')

@section('title', 'filter nifas')

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
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>filter ibu nifas</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <div style="padding-bottom: 20px;">
                                <h2><b>filter ibu nifas</b></h2>
                            </div>
                        </div>
                        <form    action="/dashboard/query-data-ibunifas" method="post" >
                        <div class="card">
                            
                                @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> Provinsi* </label>
                                <select class="form-control" name="provinsi">
                                    <option value="">pilih provinsi</option>
                                    <option value="DKI JAKARTA">DKI JAKARTA</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> Kab/Kota* </label>
                                <select class="form-control" name="kab_kota">
                                    <option value="">pilih provinsi</option>
                                    <option value="KOTA JAKARTA SELATAN">KOTA JAKARTA SELATAN</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> Kecamatan* </label>
                                <select class="form-control" name="kecamatan">
                                    <option value="">pilih kecamatan</option>
                                    <option value="KEBAYORAN LAMA">KEBAYORAN LAMA</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-extrabold " style="font-weight: bold; font-size:20px;">Desa/Kelurahan*</label>
                                <select class="form-control" name="Kelurahan">
                                    <option value="">Desa/Kelurahan</option>
                                    <option value="Grogol utara 12">Grogol utara 12</option>
                                </select>
                            </div>
                            @if($user->role_id == 1)
                            <div class="form-group">
                                <label class="font-extrabold " style="font-weight: bold; font-size:20px;">posyandu*</label>
                                <select class="form-control" name="posyandu">
                                    <option value="">Pilih Posyandu</option>
                                    <option value="Posyandu Padi I">Posyandu Padi I</option>
                                    <option value="Posyandu Padi II">Posyandu Padi II</option>
                                    <option value="Posyandu Melati">Posyandu Melati</option>
                                    <option value="Posyandu Singkong I">Posyandu Singkong I</option>
                                    <option value="Posyandu Singkong II">Posyandu Singkong II</option>
                                    <option value="Posyandu Cempaka I">Posyandu Cempaka I</option>
                                    <option value="Posyandu Cempaka II">Posyandu Cempaka II</option>
                                    <option value="Posyandu Teratai">Posyandu Teratai</option>
                                    <option value="Posyandu Bougenville I">Posyandu Bougenville I</option>
                                    <option value="Posyandu Bougenville II">Posyandu Bougenville II</option>
                                    <option value="Posyandu Soka">Posyandu Soka</option>
                                    <option value="Posyandu Akasia">Posyandu Akasia</option>
                                    <option value="Posyandu Kenanga">Posyandu Kenanga</option>
                                    <option value="Posyandu Mawar I">Posyandu Mawar I</option>
                                    <option value="Posyandu Mawar II">Posyandu Mawar II</option>
                                    <option value="Posyandu Anggrek">Posyandu Anggrek</option>

                                </select>
                            </div>
                            @else
                            <div class="form-group">
                                <label class="font-extrabold " style="font-weight: bold; font-size:20px;">posyandu*</label>
                                <select class="form-control" name="posyandu">
                                    <option value="{{$user->posyandu}}">{{$user->posyandu}}</option>
                                </select>
                            </div>
                            @endif
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary mr-1" type="submit">Cari</button>
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

@endpush