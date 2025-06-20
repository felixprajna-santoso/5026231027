@extends('template')
@section('content')

    <h3>Data nilai</h3>

    <a href="/nilai/tambah" class="btn btn-info"> + Tambah Pegawai Baru</a>

	<form action="/nilai/cari" method="GET" class="form-inline">
        <label class="form-label"><strong>Cari Data nilai :</strong></label>
		<input type="text" name="cari" placeholder="Cari nilai .." class="form-control">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>
    <br />

    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>NRP Siswa</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Aksi</th>   
        </tr>
        @foreach ($nilai as $p)
            <tr>
                </td>
            </tr>
        @endforeach
    </table>
@endsection