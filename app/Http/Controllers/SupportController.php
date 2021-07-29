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
            ->orWhere(function ($query) {
                $query->where('Jenis_Brg', '=', 'Head Lamp')
                    ->orWhere('Jenis_Brg', '=', 'Camping Lamp')
                    ->orWhere('Jenis_Brg', '=', 'Trekking Pole')
                    ->orWhere('Jenis_Brg', '=', 'Compas');
            })
            ->get();

        return view('Support Equipments', compact('dataBrg'));
    }
}
