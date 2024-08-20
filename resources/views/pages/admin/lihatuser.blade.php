@extends('layouts.app')

@section('title', 'data user')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
<link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>data user</h1>
          
       

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
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table-striped mb-0 table">
                                <thead>
                                    <tr>
                                        <th>nama pengelola</th>
                                        <th>email</th>
                                        <th>posyandu</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $item)
                                    <tr>
                                        <td>{{ $item->pengelola }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->posyandu }}</td>
                                        <td>
                                        <a href="{{ route('admin.changePasswordWithID',  $item->id) }}">change password</a>
                                        <a href="{{ route('admin.changeusernameWithID',  $item->id) }}">change username</a>
                                            <form method="POST" action="/dashboard/hapus-user/{{ $item->id }}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger ms-1 show_confirm" data-toggle="tooltip" title='Delete' onclick="confirm('yakin ingin hapus data?')">Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                                    @endforeach
                                    <a href="/dashboard/filter-data-balita" class="btn btn-success">
                                        kembali
                                    </a>
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