<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function mainEquipment()
    {
        $dataBrg = DB::table('tbl_barang')
            ->where('Jenis_Brg', '=', 'Tent')
            ->orWhere(function ($query) {
                $query->where('Jenis_Brg', '=', 'Flysheet')
                    ->orwhere('Jenis_Brg', '=', 'Mattress')
                    ->orWhere('Jenis_Brg', '=', 'Carrier Backpack')
                    ->orWhere('Jenis_Brg', '=', 'Sleeping Bag')
                    ->orWhere('Jenis_Brg', '=', 'Trekking Shoes');
            })
            ->get();

        return view('Main Equipments', compact('dataBrg'));
    }
}
