<?php

namespace App\Exports;

use App\Models\Bayi;
use App\Models\Bumil;
use App\Models\Nifas;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExportExcel
{
    public function exportBayi()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set header row
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Anak Ke');
        $sheet->setCellValue('C1', 'Tanggal Lahir');
        $sheet->setCellValue('D1', 'Jenis Kelamin');
        $sheet->setCellValue('E1', 'Nomor KK');
        $sheet->setCellValue('F1', 'NIK');
        $sheet->setCellValue('G1', 'Nama');
        $sheet->setCellValue('H1', 'BB Lahir');
        $sheet->setCellValue('I1', 'TB Lahir');
        $sheet->setCellValue('J1', 'Lingkar Kepala Lahir');
        $sheet->setCellValue('K1', 'Buku KIA');
        $sheet->setCellValue('L1', 'IMD');
        $sheet->setCellValue('M1', 'Nama Orang Tua');
        $sheet->setCellValue('N1', 'NIK Orang Tua');
        $sheet->setCellValue('O1', 'No. HP Orang Tua');
        $sheet->setCellValue('P1', 'Provinsi');
        $sheet->setCellValue('Q1', 'Kab/Kota');
        $sheet->setCellValue('R1', 'Kecamatan');
        $sheet->setCellValue('S1', 'Puskesmas Pembina');
        $sheet->setCellValue('T1', 'Desa/Kelurahan');
        $sheet->setCellValue('U1', 'Posyandu');
        $sheet->setCellValue('V1', 'Alamat Lengkap');
        $sheet->setCellValue('W1', 'RT');
        $sheet->setCellValue('X1', 'RW');

        // Populate data rows
        $row = 2;
        foreach (Bayi::all() as $bayi) {
            $sheet->setCellValue('A' . $row, $bayi->id);
            $sheet->setCellValue('B' . $row, $bayi->anak_ke);
            $sheet->setCellValue('C' . $row, $bayi->tanggal_lahir);
            $sheet->setCellValue('D' . $row, $bayi->jenis_kelamin);
            $sheet->setCellValue('E' . $row, $bayi->nomor_kk);
            $sheet->setCellValue('F' . $row, $bayi->nik);
            $sheet->setCellValue('G' . $row, $bayi->nama);
            $sheet->setCellValue('H' . $row, $bayi->bb_lahir);
            $sheet->setCellValue('I' . $row, $bayi->tb_lahir);
            $sheet->setCellValue('J' . $row, $bayi->lingkar_kepala_lahir);
            $sheet->setCellValue('K' . $row, $bayi->buku_kia);
            $sheet->setCellValue('L' . $row, $bayi->imd);
            $sheet->setCellValue('M' . $row, $bayi->nama_orang_tua);
            $sheet->setCellValue('N' . $row, $bayi->nik_orang_tua);
            $sheet->setCellValue('O' . $row, $bayi->no_hp_orang_tua);
            $sheet->setCellValue('P' . $row, $bayi->provinsi);
            $sheet->setCellValue('Q' . $row, $bayi->kab_kota);
            $sheet->setCellValue('R' . $row, $bayi->kecamatan);
            $sheet->setCellValue('S' . $row, $bayi->puskesmas_pembina);
            $sheet->setCellValue('T' . $row, $bayi->desa_kelurahan);
            $sheet->setCellValue('U' . $row, $bayi->posyandu);
            $sheet->setCellValue('V' . $row, $bayi->alamat_lengkap);
            $sheet->setCellValue('W' . $row, $bayi->rt);
            $sheet->setCellValue('X' . $row, $bayi->rw);
            $row++;
        }
        $writer = new Xlsx($spreadsheet);
        $filename = 'bayi.xlsx';
        $writer->save($filename);

        return response()->download($filename);
    }
    public function exportIbuHamil()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

          // Set header row
          $sheet->setCellValue('A1', 'ID');
          $sheet->setCellValue('B1', 'Kehamilan Ke');
          $sheet->setCellValue('C1', 'Tanggal Lahir');
          $sheet->setCellValue('D1', 'Nomor KK');
          $sheet->setCellValue('E1', 'NIK');
          $sheet->setCellValue('F1', 'Nama');
          $sheet->setCellValue('G1', 'BB Awal');
          $sheet->setCellValue('H1', 'TB Awal');
          $sheet->setCellValue('I1', 'HPHT');
          $sheet->setCellValue('J1', 'HB');
          $sheet->setCellValue('K1', 'Golongan Darah');
          $sheet->setCellValue('L1', 'Kontrasepsi Sebelum Hamil');
          $sheet->setCellValue('M1', 'Buku KIA');
          $sheet->setCellValue('N1', 'Riwayat Penyakit');
          $sheet->setCellValue('O1', 'Riwayat Alergi');
          $sheet->setCellValue('P1', 'Nama Suami');
          $sheet->setCellValue('Q1', 'NIK Suami');
          $sheet->setCellValue('R1', 'No. HP Suami');
          $sheet->setCellValue('S1', 'Provinsi');
          $sheet->setCellValue('T1', 'Kab/Kota');
          $sheet->setCellValue('U1', 'Kecamatan');
          $sheet->setCellValue('V1', 'Puskesmas Pembina');
          $sheet->setCellValue('W1', 'Desa/Kelurahan');
          $sheet->setCellValue('X1', 'Posyandu');
          $sheet->setCellValue('Y1', 'Alamat Lengkap');
          $sheet->setCellValue('Z1', 'RT');
          $sheet->setCellValue('AA1', 'RW');

        // Populate data rows
        $row = 2;
        foreach (Bumil::all() as $bumil) {
            $sheet->setCellValue('A' . $row, $bumil->id);
            $sheet->setCellValue('B' . $row, $bumil->kehamilan_ke);
            $sheet->setCellValue('C' . $row, $bumil->tanggal_lahir);
            $sheet->setCellValue('D' . $row, $bumil->nomor_kk);
            $sheet->setCellValue('E' . $row, $bumil->nik);
            $sheet->setCellValue('F' . $row, $bumil->nama);
            $sheet->setCellValue('G' . $row, $bumil->bb_awal);
            $sheet->setCellValue('H' . $row, $bumil->tb_awal);
            $sheet->setCellValue('I' . $row, $bumil->hpht);
            $sheet->setCellValue('J' . $row, $bumil->hb);
            $sheet->setCellValue('K' . $row, $bumil->golongan_darah);
            $sheet->setCellValue('L' . $row, $bumil->kontrasepsi_sebelum_hamil);
            $sheet->setCellValue('M' . $row, $bumil->buku_kia);
            $sheet->setCellValue('N' . $row, $bumil->riwayat_penyakit);
            $sheet->setCellValue('O' . $row, $bumil->riwayat_alergi);
            $sheet->setCellValue('P' . $row, $bumil->nama_suami);
            $sheet->setCellValue('Q' . $row, $bumil->nik_suami);
            $sheet->setCellValue('R' . $row, $bumil->no_hp_suami);
            $sheet->setCellValue('S' . $row, $bumil->provinsi);
            $sheet->setCellValue('T' . $row, $bumil->kab_kota);
            $sheet->setCellValue('U' . $row, $bumil->kecamatan);
            $sheet->setCellValue('V' . $row, $bumil->puskesmas_pembina);
            $sheet->setCellValue('W' . $row, $bumil->desa_kelurahan);
            $sheet->setCellValue('X' . $row, $bumil->posyandu);
            $sheet->setCellValue('Y' . $row, $bumil->alamat_lengkap);
            $sheet->setCellValue('Z' . $row, $bumil->rt);
            $sheet->setCellValue('AA' . $row, $bumil->rw);
            $row++;
        }
        $writer = new Xlsx($spreadsheet);
        $filename = 'ibu-hamil.xlsx';
        $writer->save($filename);

        return response()->download($filename);
    }
    public function exportIbuNifas()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

          // Set header row
          $sheet->setCellValue('A1', 'ID');
          $sheet->setCellValue('B1', 'Kehamilan Ke');
          $sheet->setCellValue('C1', 'Tanggal Lahir');
          $sheet->setCellValue('D1', 'Nomor KK');
          $sheet->setCellValue('E1', 'NIK');
          $sheet->setCellValue('F1', 'Nama');
          $sheet->setCellValue('G1', 'BB Awal');
          $sheet->setCellValue('H1', 'TB Awal');
          $sheet->setCellValue('I1', 'HPHT');
          $sheet->setCellValue('J1', 'HB');
          $sheet->setCellValue('K1', 'Golongan Darah');
          $sheet->setCellValue('L1', 'Kontrasepsi Sebelum Hamil');
          $sheet->setCellValue('M1', 'Buku KIA');
          $sheet->setCellValue('N1', 'Riwayat Penyakit');
          $sheet->setCellValue('O1', 'Riwayat Alergi');
          $sheet->setCellValue('P1', 'Nama Suami');
          $sheet->setCellValue('Q1', 'NIK Suami');
          $sheet->setCellValue('R1', 'No. HP Suami');
          $sheet->setCellValue('S1', 'Provinsi');
          $sheet->setCellValue('T1', 'Kab/Kota');
          $sheet->setCellValue('U1', 'Kecamatan');
          $sheet->setCellValue('V1', 'Puskesmas Pembina');
          $sheet->setCellValue('W1', 'Desa/Kelurahan');
          $sheet->setCellValue('X1', 'Posyandu');
          $sheet->setCellValue('Y1', 'Alamat Lengkap');
          $sheet->setCellValue('Z1', 'RT');
          $sheet->setCellValue('AA1', 'RW');

        // Populate data rows
        $row = 2;
        foreach (Nifas::all() as $nifas) {
            $sheet->setCellValue('A' . $row, $nifas->id);
            $sheet->setCellValue('B' . $row, $nifas->kehamilan_ke);
            $sheet->setCellValue('C' . $row, $nifas->tanggal_lahir);
            $sheet->setCellValue('D' . $row, $nifas->nomor_kk);
            $sheet->setCellValue('E' . $row, $nifas->nik);
            $sheet->setCellValue('F' . $row, $nifas->nama);
            $sheet->setCellValue('G' . $row, $nifas->bb_awal);
            $sheet->setCellValue('H' . $row, $nifas->tb_awal);
            $sheet->setCellValue('I' . $row, $nifas->hpht);
            $sheet->setCellValue('J' . $row, $nifas->hb);
            $sheet->setCellValue('K' . $row, $nifas->golongan_darah);
            $sheet->setCellValue('L' . $row, $nifas->kontrasepsi_sebelum_hamil);
            $sheet->setCellValue('M' . $row, $nifas->buku_kia);
            $sheet->setCellValue('N' . $row, $nifas->riwayat_penyakit);
            $sheet->setCellValue('O' . $row, $nifas->riwayat_alergi);
            $sheet->setCellValue('P' . $row, $nifas->nama_suami);
            $sheet->setCellValue('Q' . $row, $nifas->nik_suami);
            $sheet->setCellValue('R' . $row, $nifas->no_hp_suami);
            $sheet->setCellValue('S' . $row, $nifas->provinsi);
            $sheet->setCellValue('T' . $row, $nifas->kab_kota);
            $sheet->setCellValue('U' . $row, $nifas->kecamatan);
            $sheet->setCellValue('V' . $row, $nifas->puskesmas_pembina);
            $sheet->setCellValue('W' . $row, $nifas->desa_kelurahan);
            $sheet->setCellValue('X' . $row, $nifas->posyandu);
            $sheet->setCellValue('Y' . $row, $nifas->alamat_lengkap);
            $sheet->setCellValue('Z' . $row, $nifas->rt);
            $sheet->setCellValue('AA' . $row, $nifas->rw);
            $row++;
        }
        $writer = new Xlsx($spreadsheet);
        $filename = 'ibu-nifas.xlsx';
        $writer->save($filename);

        return response()->download($filename);
    }
}
