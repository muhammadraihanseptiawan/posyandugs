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

    <p>ini adalah laporan data ibu hamil</p>



    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kehamilan Ke</th>
                <th>Tanggal Lahir</th>
                <th>Nomor KK</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>BB Awal</th>
                <th>TB Awal</th>
                <th>HPHT</th>
                <th>Hb</th>
                <th>Golongan Darah</th>
                <th>Kontrasepsi Sebelum Hamil</th>
                <th>Buku KIA</th>
                <th>Riwayat Penyakit</th>
                <th>Riwayat Alergi</th>
                <th>Nama Suami</th>
                <th>NIK Suami</th>
                <th>No. HP Suami</th>
                <th>Provinsi</th>
                <th>Kab/Kota</th>
                <th>Kecamatan</th>
                <th>Puskesmas Pembina</th>
                <th>Desa/Kelurahan</th>
                <th>Posyandu</th>
                <th>Alamat Lengkap</th>
                <th>RT</th>
                <th>RW</th>
            </tr>
        </thead>
        <tbody> @foreach($bumil as $data) <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->kehamilan_ke }}</td>
                <td>{{ $data->tanggal_lahir }}</td>
                <td>{{ $data->nomor_kk }}</td>
                <td>{{ $data->nik }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->bb_awal }}</td>
                <td>{{ $data->tb_awal }}</td>
                <td>{{ $data->hpht }}</td>
                <td>{{ $data->hb }}</td>
                <td>{{ $data->golongan_darah }}</td>
                <td>{{ $data->kontrasepsi_sebelum_hamil }}</td>
                <td>{{ $data->buku_kia }}</td>
                <td>{{ $data->riwayat_penyakit }}</td>
                <td>{{ $data->riwayat_alergi }}</td>
                <td>{{ $data->nama_suami }}</td>
                <td>{{ $data->nik_suami }}</td>
                <td>{{ $data->no_hp_suami }}</td>
                <td>{{ $data->provinsi }}</td>
                <td>{{ $data->kab_kota }}</td>
                <td>{{ $data->kecamatan }}</td>
                <td>{{ $data->puskesmas_pembina }}</td>
                <td>{{ $data->desa_kelurahan }}</td>
                <td>{{ $data->posyandu }}</td>
                <td>{{ $data->alamat_lengkap }}</td>
                <td>{{ $data->rt }}</td>
                <td>{{ $data->rw }}</td>
            </tr> @endforeach </tbody>
    </table>


</body>

</html>