<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show($slug)
    {
        $post = DB::table('tbl_barang')->where('Nama_Brg', $slug)->first();
        return view('posts.show', compact('post'));
    }
}
