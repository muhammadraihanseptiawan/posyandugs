<?php

namespace App\Http\Controllers;

use App\Models\Bayi;
use App\Models\Gizi;
use App\Models\User;
use Illuminate\Http\Request;

class userhandleControllers extends Controller
{

    public function daftarPosyandu()
    {
        $list_posyandu = [
            [
                "nama" => "Posyandu Padi II",
                "no_hp" => "081381888325",
                "alamat" => "JL.JIBAN RT.003/001",
            ],
            [
                "nama" => "Posyandu Melati",
                "no_hp" => "089523324784",
                "alamat" => "JL.KRAMAT RT 004/002",
            ],
            [
                "nama" => "Posyandu Singkong I",
                "no_hp" => "089630272313",
                "alamat" => "JL.RAWA SIMPRUG 1B RT 003/005",
            ],
            [
                "nama" => "Posyandu Singkong II",
                "no_hp" => "081295186107",
                "alamat" => "JL RAWA SIMPRUG RT 007/005",
            ],
            [
                "nama" => "Posyandu Cempaka I",
                "no_hp" => "0895322573162",
                "alamat" => "CIDODOL RT 012/006",
            ],
            [
                "nama" => "Posyandu Cempaka II",
                "no_hp" => "087883230769",
                "alamat" => "CIDODOL RT 011/006",
            ],
            [
                "nama" => "Posyandu Teratai",
                "no_hp" => "08990637017",
                "alamat" => "JL. SIMPRUG GOLF II RT 008/008",
            ],
            [
                "nama" => "Posyandu Bougenville I",
                "no_hp" => "085886986582",
                "alamat" => "RAWA SIMPRUG RT 010/009",
            ],
            [
                "nama" => "Posyandu Bougenville II",
                "no_hp" => "08128530945",
                "alamat" => "RAWA SIMPRUG I RT 012/009",
            ],
            [
                "nama" => "Posyandu Soka",
                "no_hp" => "085891481158",
                "alamat" => "JL. SEHA RT 006/010",
            ],
            [
                "nama" => "Posyandu Akasia",
                "no_hp" => "087782757577",
                "alamat" => "TOAPEKONG I RT 002/0011",
            ],
            [
                "nama" => "Posyandu Kenanga",
                "no_hp" => "08568252233",
                "alamat" => "KOMP.HANKAM RT 001/011",
            ],
            [
                "nama" => "Posyandu Mawar I",
                "no_hp" => "081318260313",
                "alamat" => "MASJID NURUL YAQIN RT 001/012",
            ],
            [
                "nama" => "Posyandu Mawar II",
                "no_hp" => "085313447488",
                "alamat" => "PERMATA HIJAU 2 GG.SAIRAN RT 11/012",
            ],
            [
                "nama" => "Posyandu Anggrek",
                "no_hp" => "081290615770",
                "alamat" => "JL.MASJID CIDODOL RT 007/013",
            ],
        ];

       
        return view("daftar-posyandu", compact("list_posyandu"));

    }
}
