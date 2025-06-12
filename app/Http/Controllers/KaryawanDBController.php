<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanDBController extends Controller
{
    public function index()
    {
    	// mengambil data dari table karyawan

    	// untuk pagination, kita bisa pake paginate() yang akan membagi data menjadi beberapa halaman
    	// paginate(10) artinya kita akan menampilkan 10 data per halaman
    	// jadi, jika ada 25 data, akan ada 3 halaman (10+10+5)

        //$karyawan = DB::table('karyawan')->get(); // ini pake get() untuk mengambil semua data
        $karyawan = DB::table('karyawan')->paginate(10);

    	// mengirim data karyawan ke view index
    	return view('karyawanindex',['karyawan' => $karyawan]);
    }

// method untuk menampilkan view form tambah karyawan
    public function tambah(){
        // memanggil view tambah
        return view('tambah');
    }

    // method untuk insert data ke table karyawan
public function store(Request $request)
{
	// insert data ke table karyawan
	DB::table('karyawan')->insert([
		'karyawan_nama' => $request->nama,
		'karyawan_jabatan' => $request->jabatan,
		'karyawan_umur' => $request->umur,
		'karyawan_alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman karyawan
	return redirect('/karyawan');

}

// method untuk edit data karyawan
public function edit($id)
{
	// mengambil data karyawan berdasarkan id yang dipilih
	$karyawan = DB::table('karyawan')->where('karyawan_id',$id)->get();
	// passing data karyawan yang didapat ke view edit.blade.php
	return view('edit',['karyawan' => $karyawan]);

}

// update data karyawan
public function update(Request $request)
{
	// update data karyawan
	DB::table('karyawan')->where('karyawan_id',$request->id)->update([
		'karyawan_nama' => $request->nama,
		'karyawan_jabatan' => $request->jabatan,
		'karyawan_umur' => $request->umur,
		'karyawan_alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman karyawan




	return redirect('/karyawan');
}

// method untuk hapus data karyawan
public function hapus($id)
{
	// menghapus data karyawan berdasarkan id yang dipilih
	DB::table('karyawan')->where('karyawan_id',$id)->delete();

	// alihkan halaman ke halaman karyawan
	return redirect('/karyawan');
}

public function cari(Request $request)
{
    // menangkap data pencarian
    $cari = $request->cari;

        // mengambil data dari table karyawan sesuai pencarian data
    $karyawan = DB::table('karyawan')
    ->where('karyawan_nama','like',"%".$cari."%")
    ->paginate();

        // mengirim data karyawan ke view index
    return view('index',['karyawan' => $karyawan]);

}
}

