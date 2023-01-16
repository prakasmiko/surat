<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_master;
use Illuminate\Support\Facades\DB;

class C_master extends Controller
{
    public function KodeSifat()
    {
        $data = M_master::all();

        return view('master.kodeSifat', compact('data'));
    }

    public function addKodeSifat(Request $request)
    {
        $data = [
            'kode_sifat' => $request->kode_sifat,
            'sifat' => $request->sifat,
            'status' => $request->status,
        ];

        $check = DB::table('master_kode_sifat')->where(['kode_sifat' => $request->kode_sifat])->exists();
        if ($check) {
            return back()->with('failed', 'Data yang diinputkan sudah ada!');
        }

        $master_kode_sifat = M_master::create($data);

        if ($master_kode_sifat) {
            return redirect()->route('kode-sifat')->with('success', 'Data Berhasil Ditambahkan!');
        } else {
            // return back()->with('error', 'Data Tidak Berhasil Ditambahkan!');
        }
    }

    public function editKodeSifat(Request $request)
    {
        $data = [
            'kode_sifat' => $request->kode_sifat,
            'sifat' => $request->sifat,
            'status' => $request->status,
        ];

        $check = DB::table('master_kode_sifat')->where(['kode_sifat' => $request->kode_sifat])->where('id', '!=', $request->id)->exists();
        if ($check) {
            return back()->with('failed', 'Data yang diinputkan sudah ada!');
        }

        DB::table('master_kode_sifat')->where('id', $request->id)->update($data);

        return redirect()->route('kode-sifat')->with('success', 'Data Berhasil Diubah!');
    }

    public function deleteKodeSifat($id)
    {
        DB::table('master_kode_sifat')->where('id', $id)->delete();

        return redirect()->route('kode-sifat');
    }
}
