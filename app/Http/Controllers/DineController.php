<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DineController extends Controller
{
    public function dineEquipment()
    {
        $dataBrg = DB::table('tbl_barang')
            ->where('Jenis_Brg', '=', 'Stove')
            ->orWhere(function ($query) {
                $query->where('Jenis_Brg', '=', 'Cooking Set')
                    ->orWhere('Jenis_Brg', '=', 'Nesting');
            })
            ->get();

        return view('Dine Equipments', compact('dataBrg'));
    }
}
