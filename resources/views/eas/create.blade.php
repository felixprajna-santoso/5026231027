@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h2>Tambah Data Nilai</h2>
    <form action="{{ route('eas.store') }}" method="POST" class="mt-3">
        @csrf

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">NRP Siswa</label>
            <div class="col-sm-10">
                <input type="text" name="normorinduksiswa" class="form-control" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nilai Angka</label>
            <div class="col-sm-10">
                <input type="number" name="nilaiangka" class="form-control" required min="0" max="100">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-10">
                <input type="number" name="sks" class="form-control" required min="1">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <button class="btn btn-primary">Simpan</button>
                <a href="{{ route('eas.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </div>
    </form>
</div>
@endsection