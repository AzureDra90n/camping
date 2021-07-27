<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function mainEquipment()
    {
        $dataBrg = DB::table('tbl_barang')->where('Nama_Brg');
        return view('Main Equipments', compact('Nama_Brg'));
    }
}
