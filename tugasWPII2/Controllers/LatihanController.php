<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function getForm()
    {
        return view("v_latihan.getform");
    }

    public function getTable()
    {
        $dataMahasiswa = session('dataMahasiswa', []);
        return view("v_latihan.gettable", compact('dataMahasiswa'));
    }

    public function store(Request $request)
    {
        $dataMahasiswa = session('dataMahasiswa', []);

        $newEntry = [
            "no" => count($dataMahasiswa) + 1,
            "nim" => $request->nim,
            "nama" => $request->nama,
            "kelas" => $request->kelas,
        ];

        $dataMahasiswa[] = $newEntry;

        session(['dataMahasiswa' => $dataMahasiswa]);

        return redirect()->route('latihan.gettable');
    }
}
