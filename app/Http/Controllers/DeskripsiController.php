<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeskripsiController extends Controller
{
    public function deskripsiBarang()
    {
        $detailBrg = DB::table('tbl_barang')
            ->where('Deskripsi', '=', 'Tent')
            ->get();

        return view('Main Equipments', compact('detailBrg'));
    }
}
