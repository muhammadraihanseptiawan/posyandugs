@extends('layouts.app')

@section('title', 'tambah user')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>tambah data user</h1>
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
                            <form action="" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> Nama Pengelola* </label>
                                    <input type="text" class="form-control"  name="pengelola" required>
                                </div>
                                <div class="form-group">
                                    <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> Email Pengelola* </label>
                                    <input type="text" class="form-control"  name="email" required>
                                </div>
                                <div class="form-group">
                                    <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> Password* </label>
                                    <input type="password" class="form-control"  name="password" required>
                                </div>
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


                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary mr-1" type="submit">Simpan data</button>
                            <button class="btn btn-secondary" type="reset">Reset</button>
                        </div>
                        </form>
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

<!-- Page Specific JS File -->
@endpush