<?php

namespace App\Http\Controllers;

use App\Models\Bayi;
use App\Models\User;
use App\Models\Bumil;
use App\Models\Nifas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class adminControllers extends Controller
{



    public function index()
    {
        $bayiCount = Bayi::all()->count();
        $bayis = Bayi::all()->take(10);
        $bumilCount = Bumil::all()->count();
        $bumils = Bumil::all()->take(10);
        $nifasCount = Nifas::all()->count();
        $nifass = Nifas::all()->take(10);
        $userCount = User::all()->count();
        $user = User::find(auth()->id());
        $type_menu = "dashboard";

        return view('pages.dashboard-general-dashboard', compact("bayiCount", "bayis", "bumilCount", "bumils", "nifasCount", "nifass", "userCount", "user", "type_menu"));
    }



    public function tambahuser()
    {

        $user = User::find(auth()->id());
        $type_menu = "pengguna";
        return view("pages.admin.tambahuser", compact("user", "type_menu"));
    }


    public function store(Request $request)
    {
        $credentials = $request->validate([
            'pengelola' => ['required'],
            'password' => ['required'],
        ]);

        $user = new User([
            'pengelola' => $request->pengelola,
            'posyandu' => $request->posyandu,
            'email' => $request->email,
            'role_id' => 2,
            'password' => Hash::make($request->password),
        ]);

        // Simpan objek User
        $user->save();

        return redirect()->back()
            ->with('success', 'berhasil masukin user baru');
    }


    public function query()
    {
        $users = User::all();
        $user = User::find(auth()->id());
        $type_menu = "pengguna";
        return view("pages.admin.lihatuser", compact("users", "user", "type_menu"));
    }

    public function hapusUser(Request $request, $id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
        }

        return redirect()->back()
            ->with('success', 'Data berhasil dihapus');
    }

    public function changePassword()
    {
        $user = User::find(auth()->id());
        $type_menu = "pengguna";
        return view("pages.admin.changepassword", compact("user", "type_menu"));
    }
    
    public function changeUsername()
    {
        $user = User::find(auth()->id());
        $type_menu = "pengguna";
        return view("pages.admin.changeusername", compact("user", "type_menu"));
    }

    public function updatePassword(Request $request)
    {



        $validate = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:8',
        ], [
            'new_password.min' => 'Kata sandi baru harus memiliki setidaknya 8 karakter.',
            'new_password.required_with' => 'Kata sandi baru harus diisi jika ada konfirmasi kata sandi.',
            'new_password.same' => 'Kata sandi baru dan konfirmasi kata sandi harus sama.',
            'password_confirmation.min' => 'Konfirmasi kata sandi harus memiliki setidaknya 8 karakter.'
        ]);
        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput();
        }

        if (Hash::check($request->old_password, auth()->user()->password)) {
            if (!Hash::check($request->new_password, auth()->user()->password)) {
                $user = User::find(auth()->id());
                $user->update([
                    'password' => bcrypt($request->new_password)
                ]);
                session()->flash('passsuccess', 'Update Password Berhasil');

                return redirect()->back();
            }
            session()->flash('passnotsame', 'Password baru tidak boleh sama dengan password lama!');
            return redirect()->back();
        }
     
        session()->flash('passnotmatch', 'Password lama tidak cocok');


        return redirect()->back();
    }
    public function updateUsername(Request $request)
    {


     
        $validate = Validator::make($request->all(), [
            'email' => 'required',
            'nama_pengelola' => 'min:4|required',
  
        ], [
            'pengelola.min' => 'username maksimal 4 karakter.',

        ]);
        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput();
        }

        $user = User::find(auth()->id());
        $user->update([
            'pengelola' => $request->nama_pengelola,
            'email' => $request->email
        ]);

        return redirect()->back()
        ->with('success', 'berhasil ubah nama atau email');
    }


    public function changePasswordWithID()
    {
        $user = User::find(auth()->id());
      
        $type_menu = "pengguna";
        return view("pages.admin.changepasswordwithid", compact("user", "type_menu"));
    }

    public function updatePasswordWithID(Request $request, $id)
    {

        $user = User::find($id);

        $validate = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:8',
        ], [
            'new_password.min' => 'Kata sandi baru harus memiliki setidaknya 8 karakter.',
            'new_password.required_with' => 'Kata sandi baru harus diisi jika ada konfirmasi kata sandi.',
            'new_password.same' => 'Kata sandi baru dan konfirmasi kata sandi harus sama.',
            'password_confirmation.min' => 'Konfirmasi kata sandi harus memiliki setidaknya 8 karakter.'
        ]);
        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput();
        }

        if (Hash::check($request->old_password, $user->password)) {
            if (!Hash::check($request->new_password, $user->password)) {
        
                $user->update([
                    'password' => bcrypt($request->new_password)
                ]);
                session()->flash('passsuccess', 'Update Password Berhasil');

                return redirect()->back();
            }
            session()->flash('passnotsame', 'Password baru tidak boleh sama dengan password lama!');
            return redirect()->back();
        }
     
        session()->flash('passnotmatch', 'Password lama tidak cocok');


        return redirect()->back();
    }



    public function changeUsernameWithID($id)
    {
        $user = User::find(auth()->id());
        $type_menu = "pengguna";
        $userID = User::find($id);
        return view("pages.admin.changeusernamewithid", compact("user", "type_menu", "userID"));
    }





    public function updateUsernameWithID(Request $request, $id)
    {

     
        $validate = Validator::make($request->all(), [
            'email' => 'required',
            'nama_pengelola' => 'min:4|required',
  
        ], [
            'pengelola.min' => 'username maksimal 4 karakter.',

        ]);
        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput();
        }

        $user = User::find($id);
        $user->update([
            'pengelola' => $request->nama_pengelola,
            'email' => $request->email,
            'posyandu' => $request->posyandu
        ]);

        return redirect()->back()
        ->with('success', 'berhasil ubah nama atau email');
    }


}
