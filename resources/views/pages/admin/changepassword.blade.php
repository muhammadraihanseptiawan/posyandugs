@extends('layouts.app')

@section('title', 'ubah password')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>ubah password</h1>
        </div>

        <div class="section-body">
            <!-- alerts -->


            @if (session('passsuccess'))
            <div class="alert alert-success" role="alert">
                {{ session('passsuccess') }}
            </div>
            @elseif (session('passnotsame'))
            <div class="alert alert-warning" role="alert">
                {{ session('passnotsame') }}
            </div>
            @elseif (session('passnotmatch'))
            <div class="alert alert-warning" role="alert">
                {{session('passnotmatch')}}
            </div>
            @endif
            @error('new_password')
            <div class="alert alert-warning" role="alert">
                {{ $message }}
            </div>
            @enderror
            @error('password_confirmation')
            <div class="alert alert-warning" role="alert">
                {{ $message }}
            </div>

            @enderror

            <!-- alerts -->

            @if (\Session::has('success'))
            <div class="alert alert-success" role="alert">
                {!! \Session::get('success') !!}
            </div>

            @endif
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.changepassword') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> password lama* </label>
                                    <input class="form-control" type="password" name="old_password" >
                                </div>
                                <div class="form-group">
                                    <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> password baru* </label>
                                    <input class="form-control" type="password" name="new_password" >
                                </div>
                                <div class="form-group">
                                    <label class="font-extrabold " style="font-weight: bold; font-size:20px;"> ulangi password baru* </label>
                                    <input type="password" class="form-control" type="password" name="password_confirmation" >

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