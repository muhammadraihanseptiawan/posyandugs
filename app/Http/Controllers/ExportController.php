<?php

namespace App\Http\Controllers;

use App\Exports\ExportExcel;

class ExportController extends Controller
{
    public function exportBayi()
    {
        $export = new ExportExcel();
        return $export->exportBayi();
    }
    public function exportIbuHamil()
    {
        $export = new ExportExcel();
        return $export->exportIbuHamil();
    }
    public function exportIbuNifas()
    {
        $export = new ExportExcel();
        return $export->exportIbuNifas();
    }
}