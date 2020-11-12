<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_guru = \App\Guru::where('nama_depan','LIKE','%'.$request->cari.'%')->get();
        } else {
            $data_guru = \App\Guru::all();
        }
        return view('guru.index',['data_guru' => $data_guru]);
    }
}
