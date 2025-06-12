@extends('template')
@section('content')

    <h3>Data bukutulis</h3>

    <a href="/bukutulis/tambah" class="btn btn-info"> + Tambah Pegawai Baru</a>

	<form action="/bukutulis/cari" method="GET" class="form-inline">
        <label class="form-label"><strong>Cari Data bukutulis :</strong></label>
		<input type="text" name="cari" placeholder="Cari bukutulis .." class="form-control">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>
    <br />

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Merk Buku Tulis</th>
            <th>Harga Buku Tulis</th>
            <th>Tersedia</th>
            <th>Berat</th>
        </tr>
        @foreach ($bukutulis as $p)
            <tr>
                <td>{{ $p->ID }}</td>
                <td>{{ $p->merkbukutulis }}</td>
                <td>{{ $p->tersedia }}</td>
                <td>{{ $p->berat }}</td>
                <td>
                    <a href="/bukutulis/hapus/{{ $p->ID }}"class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $bukutulis->links() }} <!-- hanya bisa dipakai dengan paginate, saat get() harus dihapus -->
@endsection
