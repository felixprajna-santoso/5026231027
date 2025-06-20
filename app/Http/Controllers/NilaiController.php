<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = DB::table('nilai');
    	return view('eas\index',['nilai' => $nilai]);
    }

    public function tambah(){
        // memanggil view tambah
        return view('tambah');
    }

public function store(Request $request)
{
	DB::table('nilai')->insert([
		'normorinduksiswa' => $request->normorinduksiswa,
		'nilaiangka' => $request->nilaiangka,
		'sks' => $request->sks,
	]);
	return redirect('/nilai');

}

public function edit($nilai)
{
	$nilai = DB::table('nilai')->where('nilai_id',$id)->get();
	return view('edit',['nilai' => $nilai]);

}

public function update(Request $request)
{
	DB::table('nilai')->where('nilai_id',$request->id)->update([
		'normorinduksiswa' => $request->normorinduksiswa,
		'nilaiangka' => $request->nilaiangka,
		'sks' => $request->sks,
	]);

	return redirect('/nilai');
}

public function hapus($id)
{
	DB::table('nilai')->where('nilai_id',$id)->delete();

	return redirect('/nilai');
}

public function cari(Request $request)
{
    // menangkap data pencarian
    $cari = $request->cari;

    $nilai = DB::table('nilai')
    ->where('normorinduksiswa','like',"%".$cari."%")
    ->paginate();

    return view('index',['nilai' => $nilai]);
$request->validate([
        'normorinduksiswa' => 'required|string|max:5',
        'nilaiangka' => 'required|integer|min:0|max:100',
        'sks' => 'required|integer|min:1',
    ]);

    Nilai::create($request->only('normorinduksiswa','nilaiangka','sks'));
    return redirect()->route('eas.index')->with('success', 'Data berhasil disimpan.');

$nilai = Nilai::findOrFail($id);
    return view('eas.edit', compact('nilai'));



}
}
