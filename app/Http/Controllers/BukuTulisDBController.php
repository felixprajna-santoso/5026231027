<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuTulisDBController extends Controller
{
    public function index()
    {
    	// mengambil data dari table bukutulis

    	// untuk pagination, kita bisa pake paginate() yang akan membagi data menjadi beberapa halaman
    	// paginate(10) artinya kita akan menampilkan 10 data per halaman
    	// jadi, jika ada 25 data, akan ada 3 halaman (10+10+5)

        //$bukutulis = DB::table('bukutulis')->get(); // ini pake get() untuk mengambil semua data
        $bukutulis = DB::table('bukutulis')->paginate(10);

    	// mengirim data bukutulis ke view index
    	return view('bukutulisindex',['bukutulis' => $bukutulis]);
    }

// method untuk menampilkan view form tambah bukutulis
    public function tambah(){
        // memanggil view tambah
        return view('tambah');
    }

    // method untuk insert data ke table bukutulis
public function store(Request $request)
{
	// insert data ke table bukutulis
	DB::table('bukutulis')->insert([
		'bukutulis_nama' => $request->nama,
		'bukutulis_jabatan' => $request->jabatan,
		'bukutulis_umur' => $request->umur,
		'bukutulis_alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman bukutulis
	return redirect('/bukutulis');

}

// method untuk edit data bukutulis
public function edit($id)
{
	// mengambil data bukutulis berdasarkan id yang dipilih
	$bukutulis = DB::table('bukutulis')->get();
	// passing data bukutulis yang didapat ke view edit.blade.php
	return view('BukuTulis.index', ['bukutulis' => $bukutulis]);

}

// update data bukutulis
public function update(Request $request)
{
	// update data bukutulis
	DB::table('bukutulis')->where('bukutulis_id',$request->id)->update([
		'bukutulis_nama' => $request->nama,
		'bukutulis_jabatan' => $request->jabatan,
		'bukutulis_umur' => $request->umur,
		'bukutulis_alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman bukutulis




	return redirect('/bukutulis');
}

// method untuk hapus data bukutulis
public function hapus($id)
{
	// menghapus data bukutulis berdasarkan id yang dipilih
	DB::table('bukutulis')->where('bukutulis_id',$id)->delete();

	// alihkan halaman ke halaman bukutulis
	return redirect('/bukutulis');
}

public function cari(Request $request)
{
    // menangkap data pencarian
    $cari = $request->cari;

        // mengambil data dari table bukutulis sesuai pencarian data
    $bukutulis = DB::table('bukutulis')
    ->where('bukutulis_nama','like',"%".$cari."%")
    ->paginate();

        // mengirim data bukutulis ke view index
    return view('index',['bukutulis' => $bukutulis]);

}
}

