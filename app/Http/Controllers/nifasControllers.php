<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;

use App\Models\Nifas;
use Illuminate\Http\Request;

class nifasControllers extends Controller
{


    public function tambahnifas() {
        $user = User::find(auth()->id());
        $type_menu = "data_nifas";
      return view("pages.nifas.tambahnifas", compact("user", "type_menu"));
    }
 
    public function storenifas(request $request)
    {

    
        $item =   Nifas::create([
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
    public function datanifas(Request $request){
        $user = User::find(auth()->id());
        $type_menu = "data_nifas";
        $keyword = $request->keyword;
        $nifass = Nifas::where(function ($query) use ($keyword, $user) {
            $query->where('nama', 'LIKE', '%' . $keyword . '%')
                ->orWhere('nik', 'LIKE', '%' . $keyword . '%')
                ->orWhere('nomor_kk', 'LIKE', '%' . $keyword . '%')
                ->when($user->role_id == 2, function ($query) use ($user) {
                    $query->where('posyandu', $user->posyandu);
                });
        })->paginate(10);
        
      return view("pages.nifas.datanifas", compact("user", "type_menu", "nifass"));
    }
    public function detailnifas($id)
    {
        $user = User::find(auth()->id());
        $type_menu = "data_nifas";
        $nifas = Nifas::findOrFail($id);
        return view("pages.nifas.detailnifas", compact("user", "type_menu", "nifas"));
    }

    public function hapusnifas($id)
    {
        $nifas = Nifas::find($id);
 
       if($nifas){
        $nifas->delete();
       }

       return redirect('/dashboard/data-ibunifas')->with('success', 'Data berhasil dihapus');

    }
    public function filterNifas(){
        $user = User::find(auth()->id());
        return view('pages.nifas.filternifas', ['type_menu' => 'data_nifas', "user" =>   $user ]);
    }
    public function filterQuery(Request $request)
    {


        $user = User::find(auth()->id());

        if ($request->method() != 'POST') {
            abort(405, 'Method Not Allowed');
        }

        $nifas = Nifas::query();

        $keyword = $request->keyword;
        if ($keyword) {
            $nifas->where('nama', 'LIKE', '%' . $keyword . '%')
                ->orWhere("nik", 'LIKE', '%' .  $keyword . '%')
                ->orWhere("nomor_kk", 'LIKE', '%' .  $keyword . '%')
                ->orWhere("nik", 'LIKE', '%' .  $keyword . '%');
        }

        if ($request->has('provinsi')) {
            $nifas->where('provinsi', 'like', '%' . $request->provinsi . '%');
        }

        if ($request->has('kab_kota')) {
            $nifas->where('kab_kota', 'like', '%' . $request->kab_kota . '%');
        }

        if ($request->has('kecamatan')) {
            $nifas->where('kecamatan', 'like', '%' . $request->kecamatan . '%');
        }

        if ($request->has('Kelurahan')) {
            $nifas->where('desa_kelurahan', 'like', '%' . $request->Kelurahan . '%');
        }

        if ($request->has('posyandu')) {
            $nifas->where('posyandu', 'like', '%' . $request->posyandu . '%');
        }

        $nifass = $nifas->paginate(10); 
        $type_menu = 'data_nifas';
        $provinsi = $request->provinsi;
        $kab_kota = $request->kab_kota;
        $kecamatan = $request->kecamatan;
        $Kelurahan = $request->Kelurahan;
        $posyandu = $request->posyandu;
      
        return view('pages.nifas.query', compact('nifass', 'type_menu', 'provinsi', 'kab_kota', 'kecamatan', 'Kelurahan', 'posyandu', 'user'));
    }
}
