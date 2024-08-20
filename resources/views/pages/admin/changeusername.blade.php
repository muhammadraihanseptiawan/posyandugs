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
                                    <input class="form-control" type="text" name="nama_pengelola" value="{{$user->pengelola}}" required>
                                </div>
                                <div class="form-group">
                                    <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> email baru* </label>
                                    <input class="form-control" type="email" name="email" value="{{$user->email}}" required>
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