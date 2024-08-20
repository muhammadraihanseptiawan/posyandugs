<?php



namespace App\Http\Controllers;

use PDF;
use App\Models\Bayi;

use App\Models\User;

use App\Models\Bumil;
use App\Models\Nifas;
use Illuminate\Http\Request;



class PdfController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function generatePDFBayi()

    {

        $bayi = Bayi::get();
       $data = [

            'title' => 'Laporan data posyandu bayi',

            'date' => date('m/d/Y'),

            'bayi' => $bayi

        ];
        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('bayi.pdf');
    }
    public function generatePDFBumil()

    {

        $bumil = Bumil::get();
        $data = [

            'title' => 'Laporan data posyandu Ibu hamil',

            'date' => date('m/d/Y'),

            'bumil' => $bumil

        ];
        $pdf = PDF::loadView('myPDFBumil', $data);
        return $pdf->download('ibu-hamil.pdf');
    }
    
    public function generatePDFBunifas()

    {

        $nifas = Nifas::get();



        $data = [

            'title' => 'Laporan data posyandu Ibu nifas',

            'date' => date('m/d/Y'),

            'nifas' => $nifas

        ];
        $pdf = PDF::loadView('myPDFBumil', $data);
        return $pdf->download('ibu-nifas.pdf');
    }
}
