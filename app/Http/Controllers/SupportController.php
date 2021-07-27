<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupportController extends Controller
{
    public function supportEquipment()
    {
        $dataBrg = DB::table('tbl_barang')
            ->where('Jenis_Brg', '=', 'Jacket')
            ->get();

        return view('Support Equipments', compact('dataBrg'));
    }
}
