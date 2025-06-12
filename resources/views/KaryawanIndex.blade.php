@extends('template')
@section('content')

    <h3>Data karyawan</h3>

    <a href="/karyawan/tambah" class="btn btn-info"> + Tambah Pegawai Baru</a>

	<form action="/karyawan/cari" method="GET" class="form-inline">
        <label class="form-label"><strong>Cari Data karyawan :</strong></label>
		<input type="text" name="cari" placeholder="Cari karyawan .." class="form-control">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>
    <br />

    <table class="table table-striped">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($karyawan as $p)
            <tr>
                <td>{{ $p->kodepegawai }}</td>
                <td>{{ $p->namalengkap }}</td>
                <td>{{ $p->divisi }}</td>
                <td>{{ $p->departemen }}</td>
                <td>
                    <a href="/karyawan/hapus/{{ $p->kodepegawai }}"class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $karyawan->links() }} <!-- hanya bisa dipakai dengan paginate, saat get() harus dihapus -->
@endsection
