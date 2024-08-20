<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;

use App\Models\Bumil;
use Illuminate\Http\Request;

class bumilControllers extends Controller
{


    public function tambahBumil() {
        $user = User::find(auth()->id());
        $type_menu = "data_hamil";
      return view("pages.bumil.tambahbumil", compact("user", "type_menu"));
    }
 
    public function storeBumil(request $request)
    {

    
        $item =   Bumil::create([
            'kehamilan_ke' => $request->kehamilanke,
            'tanggal_lahir' => $request->ttl,
            'nomor_kk' => $request->nomorkk,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'bb_awal' => $request->bbawal,
            'tb_awal' => $request->tbawal,
            'hpht' => $request->hpht,
            'hb' => $request->hb,
            'kontrasepsi_sebelum_hamil' => $request->kontrasepsi_sebelum_hamil,
            'golongan_darah' => $request->golongan_darah,
            'riwayat_penyakit' => $request->riwayat_penyakit,
            'riwayat_alergi' => $request->riwayat_alergi,
            'nama_suami' => $request->nama_suami,
            'nik_suami' => $request->nik_suami,
            'no_hp_suami' => $request->nohp_suami,
            'provinsi' => $request->provinsi,
            'kab_kota' => $request->kab_kota,
            'buku_kia' => $request->kia,
            'puskesmas_pembina' => $request->puskesmas,
            'kecamatan' => $request->kecamatan,
            'desa_kelurahan' => $request->Kelurahan,
            'posyandu' => $request->posyandu,
            'alamat_lengkap' => $request->alamat,
            'rt' => $request->rt,
            'rw' => $request->rw,
        ]);
        return redirect()->back()->with('success', 'selamat data berhasil masuk');
    }
    public function dataBumil(Request $request){
        $user = User::find(auth()->id());
        $type_menu = "data_hamil";
        $keyword = $request->keyword;
        $bumils = Bumil::where(function ($query) use ($keyword, $user) {
            $query->where('nama', 'LIKE', '%' . $keyword . '%')
                ->orWhere('nik', 'LIKE', '%' . $keyword . '%')
                ->orWhere('nomor_kk', 'LIKE', '%' . $keyword . '%')
                ->when($user->role_id == 2, function ($query) use ($user) {
                    $query->where('posyandu', $user->posyandu);
                });
        })->paginate(10);
        
      return view("pages.bumil.databumil", compact("user", "type_menu", "bumils"));
    }
    public function detailBumil($id)
    {
        $user = User::find(auth()->id());
        $type_menu = "data_hamil";
        $bumil = Bumil::findOrFail($id);
        return view("pages.bumil.detailbumil", compact("user", "type_menu", "bumil"));
    }

    public function hapusBumil($id)
    {
        $bumil = Bumil::find($id);
 
       if($bumil){
        $bumil->delete();
       }

       return redirect('/dashboard/data-ibuhamil')->with('success', 'Data berhasil dihapus');

     
     
    }
    public function filterBumil(){
        $user = User::find(auth()->id());
        return view('pages.bumil.filterbumil', ['type_menu' => 'data_hamil', "user" =>   $user ]);
    }
    public function filterQuery(Request $request)
    {


        $user = User::find(auth()->id());

        if ($request->method() != 'POST') {
            abort(405, 'Method Not Allowed');
        }

        $bumil = Bumil::query();

        $keyword = $request->keyword;
        if ($keyword) {
            $bumil->where('nama', 'LIKE', '%' . $keyword . '%')
                ->orWhere("nik", 'LIKE', '%' .  $keyword . '%')
                ->orWhere("nomor_kk", 'LIKE', '%' .  $keyword . '%')
                ->orWhere("nik", 'LIKE', '%' .  $keyword . '%');
        }

        if ($request->has('provinsi')) {
            $bumil->where('provinsi', 'like', '%' . $request->provinsi . '%');
        }

        if ($request->has('kab_kota')) {
            $bumil->where('kab_kota', 'like', '%' . $request->kab_kota . '%');
        }

        if ($request->has('kecamatan')) {
            $bumil->where('kecamatan', 'like', '%' . $request->kecamatan . '%');
        }

        if ($request->has('Kelurahan')) {
            $bumil->where('desa_kelurahan', 'like', '%' . $request->Kelurahan . '%');
        }

        if ($request->has('posyandu')) {
            $bumil->where('posyandu', 'like', '%' . $request->posyandu . '%');
        }

        $bumils = $bumil->paginate(10);
        $type_menu = 'data_hamil';
        $provinsi = $request->provinsi;
        $kab_kota = $request->kab_kota;
        $kecamatan = $request->kecamatan;
        $Kelurahan = $request->Kelurahan;
        $posyandu = $request->posyandu;
      
        return view('pages.bumil.query', compact('bumils', 'type_menu', 'provinsi', 'kab_kota', 'kecamatan', 'Kelurahan', 'posyandu', 'user'));
    }
}
