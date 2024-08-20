@extends('layouts.app')

@section('title', 'setting panel')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>setting panel</h1>
        </div>

        <div class="section-body">
        @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
                @endif

            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.changeusername') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> nama pengelola baru* </label>
                                    <input class="form-control" type="text" name="nama_pengelola" value="{{$userID->pengelola}}" required>
                                </div>
                                <div class="form-group">
                                    <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> email baru* </label>
                                    <input class="form-control" type="email" name="email" value="{{$userID->email}}" required>
                                </div>
                                <div class="form-group">
                                    <label class="font-extrabold " style="font-weight: bold; font-size:20px;">posyandu*</label>
                                    <select class="form-control" name="posyandu">
                                        <option value="{{$userID->posyandu}}">{{$userID->posyandu}}</option>
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