@extends('layouts.app')

@section('title', 'tambah data ibu hamil')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>tambah data ibu hamil</h1>
        </div>

        <div class="section-body">

            @if (\Session::has('success'))
            <div class="alert alert-success" role="alert">
                {!! \Session::get('success') !!}
            </div>

            @endif
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <form method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> kehamilan ke berapa?* </label>
                                    <input type="number" class="form-control"  name="kehamilanke" required>
                                </div>
                                <div class="form-group">
                                    <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> Tanggal Lahir* </label>
                                    <input type="date" class="form-control" name="ttl">
                                </div>
                                <div class="form-group">
                                    <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> Nomor KK* </label>
                                    <input type="number" class="form-control" name="nomorkk" placeholder="nomorkk">
                                </div>
                                <div class="form-group">
                                    <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> NIK* </label>
                                    <input type="text" class="form-control"  name="nik" required>
                                </div>
                                <div class="form-group">
                                    <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> Nama* </label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="form-group">
                                    <label class="font-extrabold " style="font-weight: bold; font-size:20px;">BB Awal (kg)*</label>
                                    <input type="number" class="form-control" placeholder="berat badan" name="bbawal" required>
                                </div>
                                <div class="form-group">
                                    <label class="font-extrabold " style="font-weight: bold; font-size:20px;">TB Awal (kg)*</label>
                                    <input type="number" class="form-control" name="tbawal" required>
                                </div>
                                <div class="form-group">
                                    <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> HPHT*</label>
                                    <input type="date" class="form-control" name="hpht">
                                </div>
                                <div class="form-group">
                                    <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> HB*</label>
                                    <input type="text" class="form-control" name="hb">
                                </div>
                                <div class="form-group">
                                <label class="font-extrabold " style="font-weight: bold; font-size:20px;">Golong Darah*</label>
                                <select class="form-control" name="golongan_darah" required>
                                    <option value="">Pilih Golongan Darah</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                                <div class="form-group" style="font-weight: bold; font-size:20px;">
                                    <label class="d-block" style="font-weight: bold; font-size:20px;">BUKU KIA*</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kia" id="yaRadio" value="ya">
                                        <label class="form-check-label" for="yaRadio">
                                            Ya
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kia" id="tidakRadio" value="tidak">
                                        <label class="form-check-label" for="tidakRadio">
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group" style="font-weight: bold; font-size:20px;">
                                    <label class="d-block" style="font-weight: bold; font-size:20px;">Penggunaan Kontrasepsi Sebelum Kehamilan ini**</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kontrasepsi_sebelum_hamil" id="yaRadio1" value="ya">
                                        <label class="form-check-label" for="yaRadio1">
                                            Ya
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kontrasepsi_sebelum_hamil" id="tidakRadio1" value="tidak">
                                        <label class="form-check-label" for="tidakRadio1">
                                            Tidak
                                        </label>
                                    </div> 
                                </div>
                                <div class="form-group">
                                    <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> Riwayat Penyakit Yang Diderita Ibu* </label>
                                    <input type="text" class="form-control" name="riwayat_penyakit">
                                    <span class="text-md text-danger">  Jika tidak ada, isi dengan " - " </span>
                                </div>
                                <div class="form-group">
                                    <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> Riwayat Alergi Yang Diderita Ibu* </label>
                                    <input type="text" class="form-control" name="riwayat_alergi">
                                    <span class="text-md text-danger">  Jika tidak ada, isi dengan " - " </span>
                                </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> Nama Suami* </label>
                                <input type="text" class="form-control" name="nama_suami">
                            </div>
                            <div class="form-group">
                                <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> NIK Suami* </label>
                                <input type="text" class="form-control" name="nik_suami">
                            </div>
                            <div class="form-group">
                                <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> No Hp Suami* </label>
                                <input type="text" class="form-control" name="nohp_suami">
                            </div>
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
                                <label class="font-extrabold " style="font-weight: bold; font-size:20px;">Puskesmas Pembina*</label>
                                <select class="form-control" name="puskesmas">
                                    <option value="">Pilih Puskesmas</option>
                                    <option value="Grogol utara 12">Grogol utara 12</option>
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
                            <div class="form-group">
                                <label style="font-weight: bold; font-size:20px;">alamat lengkap </label>
                                <textarea class="form-control" data-height="150" name="alamat"></textarea>
                            </div>

                            <div class="form-group">
                                <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> RT* </label>
                                <input type="text" class="form-control" name="rt">
                            </div>
                            <div class="form-group">
                                <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> RW* </label>
                                <input type="text" class="form-control" name="rw">
                            </div>
                        
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary mr-1" type="submit">Simpan data</button>
                            <button class="btn btn-secondary" type="reset">Reset</button>
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

<!-- Page Specific JS File -->
@endpush