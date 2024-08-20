<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Bayi;
use App\Models\Gizi;
use App\Models\User;
use Illuminate\Http\Request;

class bayiControllers extends Controller
{


    public function databalita(Request $request)
    {
        $user = User::find(auth()->id());
     
        $keyword = $request->keyword;
        $bayis = Bayi::where(function ($query) use ($keyword, $user) {
            if ($user->role_id == 2) {
                $query->where('posyandu', $user->posyandu);
            }else{ 
                $query->where('nama', 'LIKE', '%' . $keyword . '%')
                ->orWhere('nik', 'LIKE', '%' . $keyword . '%')
                ->orWhere('nomor_kk', 'LIKE', '%' . $keyword . '%');
            }
        })->paginate(10);
        
        
    
        return view('pages.bayi.databalita', ['type_menu' => 'data_balita', 'bayis' => $bayis, 'user' => $user]);
    }

    public function filterBayi()
    {
        $user = User::find(auth()->id());
        return view('pages.bayi.filterbalita', ['type_menu' => 'data_balita', "user" =>   $user ]);
    }


    public function filterQuery(Request $request)
    {


        $user = User::find(auth()->id());

        if ($request->method() != 'POST') {
            abort(405, 'Method Not Allowed');
        }

        $bayi = Bayi::query();

        $keyword = $request->keyword;
        if ($keyword) {
            $bayi->where('nama', 'LIKE', '%' . $keyword . '%')
                ->orWhere("nik", 'LIKE', '%' .  $keyword . '%')
                ->orWhere("nomor_kk", 'LIKE', '%' .  $keyword . '%')
                ->orWhere("nik", 'LIKE', '%' .  $keyword . '%');
        }

        if ($request->has('provinsi')) {
            $bayi->where('provinsi', 'like', '%' . $request->provinsi . '%');
        }

        if ($request->has('kab_kota')) {
            $bayi->where('kab_kota', 'like', '%' . $request->kab_kota . '%');
        }

        if ($request->has('kecamatan')) {
            $bayi->where('kecamatan', 'like', '%' . $request->kecamatan . '%');
        }

        if ($request->has('Kelurahan')) {
            $bayi->where('desa_kelurahan', 'like', '%' . $request->Kelurahan . '%');
        }

        if ($request->has('posyandu')) {
            $bayi->where('posyandu', 'like', '%' . $request->posyandu . '%');
        }

        $bayis = $bayi->get();
        $type_menu = 'data_balita';
        $provinsi = $request->provinsi;
        $kab_kota = $request->kab_kota;
        $kecamatan = $request->kecamatan;
        $Kelurahan = $request->Kelurahan;
        $posyandu = $request->posyandu;
      
        return view('pages.bayi.query', compact('bayis', 'type_menu', 'provinsi', 'kab_kota', 'kecamatan', 'Kelurahan', 'posyandu', 'user'));
    }





    public function detailBayi($id)
    {

        $user = User::find(auth()->id());
        $bbu_teks = [];
        $bb_tb_teks = [];
        $tbu_teks = [];
        $imt_teks = [];
        $bb_u = [];
        $tb_u = [];
        $imt = [];
        $bb_tb = [];
        $type_menu = 'data_balita';
        $bulan = [];
        $berat_kg_array = [];
        $errUmur = false;
        $bayi = Bayi::findOrFail($id);
        $giziRecords = Gizi::where('user_id', $id)->get();

        foreach ($giziRecords as $gizi) {
            $tinggiBadan = $gizi->tinggi_badan;
            $beratBadan = $gizi->berat_badan;
            $umur = $gizi->umur;
          

            $berat_kg = $beratBadan;
            $tinggi_cm = $tinggiBadan * 100;

            $tabelStandarBeratbadan = [
                0 => ['median' => 3.3, '+1sd' => 3.9],
                1 => ['median' => 4.5, '+1sd' => 5.1],
                2 => ['median' => 5.6, '+1sd' => 6.3],
                3 => ['median' => 6.4, '+1sd' => 7.2],
                4 => ['median' => 7.0, '+1sd' => 7.8],
                5 => ['median' => 7.5, '+1sd' => 8.4],
                6 => ['median' => 7.9, '+1sd' => 8.8],
                7 => ['median' => 8.3, '+1sd' => 9.2],
                8 => ['median' => 8.6, '+1sd' => 9.6],
                9 => ['median' => 8.9, '+1sd' => 9.9],
                10 => ['median' => 9.2, '+1sd' => 10.2],
                11 => ['median' => 9.4, '+1sd' => 10.5],
                12 => ['median' => 9.6, '+1sd' => 10.8],
            ];
            
         
            
         
            

            $tabelStandarImt = [
                0 => ['median' => 13.4, '+1sd' => 14.8],
                1 => ['median' => 14.9, '+1sd' => 16.3],
                2 => ['median' => 16.3, '+1sd' => 17.8],
                3 => ['median' => 16.9, '+1sd' => 18.4],
                4 => ['median' => 17.2, '+1sd' => 18.7],
                5 => ['median' => 17.3, '+1sd' => 18.8],
                6 => ['median' => 17.3, '+1sd' => 18.8],
                7 => ['median' => 17.3, '+1sd' => 18.8],
                8 => ['median' => 17.3, '+1sd' => 18.7],
                9 => ['median' => 17.2, '+1sd' => 18.6],
                10 => ['median' => 17.0, '+1sd' => 18.5],
                11 => ['median' => 16.9, '+1sd' => 18.4],
                12 => ['median' => 16.8, '+1sd' => 18.2],
            ];

            $tabelStandarPanjangbadan = [
                0 => ['median' => 49.9, '-1sd' => 48.0],
                1 => ['median' => 54.7, '-1sd' => 52.8],
                2 => ['median' => 58.4, '-1sd' => 56.4],
                3 => ['median' => 61.4, '-1sd' => 59.4],
                4 => ['median' => 63.9, '-1sd' => 61.8],
                5 => ['median' => 65.9, '-1sd' => 63.8],
                6 => ['median' => 67.6, '-1sd' => 65.5],
                7 => ['median' => 69.2, '-1sd' => 67.0],
                8 => ['median' => 70.6, '-1sd' => 68.4],
                9 => ['median' => 72.0, '-1sd' => 69.7],
                10 => ['median' => 73.3, '-1sd' => 71.0],
                11 => ['median' => 74.5, '-1sd' => 72.2],
                12 => ['median' => 75.7, '-1sd' => 73.4],
            ];


            // Hitung BB/U
            if ($umur >= 0 && $umur <= 12) {

                // Hitung BB/U dan tentukan teks
                $median = $tabelStandarBeratbadan[$umur]['median'];
                $sd = $tabelStandarBeratbadan[$umur]['+1sd'];
                $bb_u[] = ($berat_kg - $median) / $sd;
                $bulan[] = $gizi->bulan;
                $berat_kg =  $gizi->berat_badan;
                $berat_kg_array[] = $berat_kg;
                foreach ($bb_u as $key => $nilai) {
                    if ($nilai < -3) {
                        $bbu_teks[$key] = 'Berat badan sangat kurang (severely underweight)';
                    } elseif ($nilai >= -3 && $nilai < -2) {
                        $bbu_teks[$key] = 'Berat badan kurang (underweight)';
                    } elseif ($nilai >= -2 && $nilai <= 1) {
                        $bbu_teks[$key] = 'Berat badan normal';
                    } elseif ($nilai > 1) {
                        $bbu_teks[$key] = 'Risiko berat badan lebih';
                    }
                }
            }else{
                $errUmur = true;
            }


            // Hitung TB/U
            if ($umur >= 0 && $umur <= 12) {
                $median = $tabelStandarPanjangbadan[$umur]['median']; // Median sesuai dengan umur
                $sd = $tabelStandarPanjangbadan[$umur]['-1sd']; // Standar deviasi sesuai dengan umur

                $tb_u[] = ($tinggi_cm - $median) /  $sd; // Perhitungan TB/U

                foreach ($tb_u as $key => $nilai) {

                    if ($nilai < -2) {
                        $tbu_teks[$key] = 'Sangat Pendek';
                    } elseif ($nilai >= -2 && $nilai < -1) {
                        $tbu_teks[$key] = 'Pendek';
                    } elseif ($nilai >= -1 && $nilai <= 2) {
                        $tbu_teks[$key] = 'Normal';
                    } elseif ($nilai > 2) {
                        $tbu_teks[$key] = 'Tinggi';
                    }
                }
            } else{
                $errUmur = true;
            }

            // Menghitung BB/TB
            if ($umur >= 0 && $umur <= 12) {
                $median_bb = $tabelStandarImt[$umur]['median']; // Median berat badan sesuai dengan umur
                $sd_bb = $tabelStandarImt[$umur]['+1sd']; // Standar deviasi berat badan sesuai dengan umur
                // Menghitung BB/TB
                $bb_tb[] = ($berat_kg - $median_bb) / $sd_bb;
                // Menentukan kategori huruf berdasarkan kondisi BB/TB
                foreach ($bb_tb as $key => $nilai) {

                    if ($nilai < -0) {
                        $bb_tb_teks[$key] = 'gizi buruk';
                    } else if ($nilai >= -1 && $nilai <= 1) {
                        $bb_tb_teks[$key] = 'gizi baik';
                    } else if ($nilai > 1) {
                        $bb_tb_teks[$key] = 'beresiko gizi lebih';
                    }
                }
            }else{
                $errUmur = true;
            }


            // Hitung IMT
            if ($umur >= 0 && $umur <= 60) {
                $median_bb = $tabelStandarImt[$umur]['median'];
                $sd_bb = $tabelStandarImt[$umur]['+1sd'];


                $tinggiBadanM = $tinggi_cm / 100;
                $imt[] = $berat_kg / ($tinggiBadanM * $tinggiBadanM);

                foreach ($imt as $key => $nilai) {

                    if ($nilai < 16) {
                        $imt_teks[$key] = 'Gizi buruk';
                    } else if ($nilai >= 16 && $nilai <= 25) {
                        $imt_teks[$key] = 'Gizi baik';
                    } else {
                        $imt_teks[$key] = 'Beresiko gizi lebih';
                    }
                }
            }else{
                $errUmur = true;
            }

        }

        $data_array_bbu = array(
            'bb_u' => $bb_u,
            'bbu_teks' => $bbu_teks,
            'bulan' => $bulan,
        );
        $json_data_bbu = json_encode($data_array_bbu);


        $data_array_tbu = array(
            'tb_u' => $tb_u,
            'bulan' => $bulan,
        );
        $json_data_tbu = json_encode($data_array_tbu);


        $data_array_bbtb = array(
            'bb_tb' => $bb_tb,
            'bulan' => $bulan,
        );
        $json_data_bbtb = json_encode($data_array_bbtb);

        $data_array_imt = array(
            'imt' => $imt,
            'bulan' => $bulan,
        );
        $json_data_imt = json_encode($data_array_imt);

        $data_array_berat = array(
            'berat_kg' => $berat_kg_array,
            'bulan' => $bulan,
        );
        $json_data_berat = json_encode($data_array_berat);


      
        return view('pages.bayi.detail', compact('imt_teks', 'bb_tb_teks', 'tbu_teks', 'bbu_teks', 'bayi', 'giziRecords', 'type_menu', 'imt', "json_data_tbu", "json_data_bbu", "json_data_bbtb", "json_data_imt", "json_data_berat", 'errUmur', 'user'));
    }
    public function hapusBayi(Request $request, $id)    {
   
        $bayi = Bayi::find($id);
        $gizi = Gizi::find($id);
       if($bayi){
        $bayi->delete();
       }elseif($gizi){
        $gizi->delete();
       }

        return redirect()->back()
        ->with('success', 'Data berhasil dihapus');
    }


    public function tambahbalita()
    {

        $user = User::find(auth()->id());
        $bayiDropdown = Bayi::pluck('nama', 'id');
        $type_menu = "data_balita";
        return view('pages.bayi.tambah-balita', compact("user","bayiDropdown", "type_menu"));
    }
    public function tambahgizi()
    {

        $user = User::find(auth()->id());

        

        if ($user->role_id == 2) {
            $posyandu = $user->posyandu;
            $bayiDropdown = Bayi::where('posyandu', $posyandu)->pluck('nama', 'nik');
        } else {
            $bayiDropdown = Bayi::pluck('nama', 'nik');
        }
        
    
        $ldate = Carbon::now(); 

       
        $type_menu = "data_balita";
        return view('pages.bayi.tambah-gizi', compact("ldate","bayiDropdown", "type_menu", "user"));
    }
    public function storeBayi(request $request)
    {
        $item =   Bayi::create([
            'anak_ke' => $request->anakke,
            'tanggal_lahir' => $request->ttl,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nomor_kk' => $request->nomorkk,
            'bb_lahir' => $request->bblahir,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'tb_lahir' => $request->tblahir,
            'buku_kia' => $request->kia,
            'lingkar_kepala_lahir' => $request->lingkar_kepala_lahir,
            'imd' => $request->imd,
            'nama_orang_tua' => $request->nama_orang_tua,
            'nik_orang_tua' => $request->nik_orang_tua,
            'no_hp_orang_tua' => $request->nohp_orang_tua,
            'provinsi' => $request->provinsi,
            'kab_kota' => $request->kab_kota,
            'kecamatan' => $request->kecamatan,
            'desa_kelurahan' => $request->Kelurahan,
            'puskesmas_pembina' => $request->puskesmas,
            'posyandu' => $request->posyandu,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'alamat_lengkap' => $request->alamat,
        ]);
        return redirect()->back()->with('success', 'selamat data berhasil masuk');
    }

    public function storeGizi(Request $request)
    {

       
        $item = Gizi::create([
            'user_id' => $request->user_id,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'lebar_kepala' => $request->lingkar_kepala,
            'umur' => $request->umur,
            'bulan' => $request->tanggal_sekarang,
        ]);
    
        return redirect('/dashboard/data-balita/detail-bayi/' . $request->user_id)->with('success', 'Data berhasil masuk');
    }

}
