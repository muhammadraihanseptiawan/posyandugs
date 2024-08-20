<!DOCTYPE html>

<html>

<head>

    <title>Laravel 9 Generate PDF Example - ItSolutionStuff.com</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
.table {
width: 100%;
border-collapse: collapse;
font-size: 6px;
}

.table th,
.table td {
padding: 1px;
border: 1px solid #ddd;
text-align: left;
white-space: nowrap;
}

.table th {
background-color: #f2f2f2;
font-weight: bold;
}

.table tr:nth-child(even) {
background-color: #f2f2f2;
}

.table tr:hover {
background-color: #e6e6e6;
}

@media (max-width: 768px) {
.table {
font-size: 4px;
}

.table th,
.table td {
    padding: 0.5px;
}

}

@media (max-width: 480px) {
.table {
font-size: 3px;
}

.table th,
.table td {
    padding: 0.25px;
}

}
</style>
</head>

<body>

    <h1>{{ $title }}</h1>

    <p>{{ $date }}</p>

    <p>ini adalah laporan data bayi</p>



    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Anak Ke</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Nomor KK</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>BB Lahir</th>
            <th>TB Lahir</th>
            <th>Lingkar Kepala Lahir</th>
            <th>Buku KIA</th>
            <th>IMD</th>
            <th>Nama Orang Tua</th>
            <th>NIK Orang Tua</th>
            <th>No. HP Orang Tua</th>
            <th>Provinsi</th>
            <th>Kab/Kota</th>
            <th>Kecamatan</th>
            <th>Puskesmas Pembina</th>
            <th>Desa/Kelurahan</th>
            <th>Posyandu</th>
            <th>Alamat Lengkap</th>
            <th>RT</th>
            <th>RW</th>
        </tr> @foreach($bayi as $data) <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->anak_ke }}</td>
            <td>{{ $data->tanggal_lahir }}</td>
            <td>{{ $data->jenis_kelamin }}</td>
            <td>{{ $data->nomor_kk }}</td>
            <td>{{ $data->nik }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->bb_lahir }}</td>
            <td>{{ $data->tb_lahir }}</td>
            <td>{{ $data->lingkar_kepala_lahir }}</td>
            <td>{{ $data->buku_kia }}</td>
            <td>{{ $data->imd }}</td>
            <td>{{ $data->nama_orang_tua }}</td>
            <td>{{ $data->nik_orang_tua }}</td>
            <td>{{ $data->no_hp_orang_tua }}</td>
            <td>{{ $data->provinsi }}</td>
            <td>{{ $data->kab_kota }}</td>
            <td>{{ $data->kecamatan }}</td>
            <td>{{ $data->puskesmas_pembina }}</td>
            <td>{{ $data->desa_kelurahan }}</td>
            <td>{{ $data->posyandu }}</td>
            <td>{{ $data->alamat_lengkap }}</td>
            <td>{{ $data->rt }}</td>
            <td>{{ $data->rw }}</td>
        </tr> @endforeach
    </table>


</body>

</html>