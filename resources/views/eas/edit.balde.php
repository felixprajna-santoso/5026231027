@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h2>Edit Data Nilai</h2>
    <form action="{{ route('eas.update', $nilai->id) }}" method="POST" class="mt-3">
        @csrf
        @method('PUT')

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">NRP Siswa</label>
            <div class="col-sm-10">
                <input type="text" name="normorinduksiswa" class="form-control" value="{{ old('normorinduksiswa', $nilai->normorinduksiswa) }}" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nilai Angka</label>
            <div class="col-sm-10">
                <input type="number" name="nilaiangka" class="form-control" value="{{ old('nilaiangka', $nilai->nilaiangka) }}" required min="0" max="100">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-10">
                <input type="number" name="sks" class="form-control" value="{{ old('sks', $nilai->sks) }}" required min="1">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <button class="btn btn-success">Update</button>
                <a href="{{ route('eas.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </div>
    </form>
</div>
@endsection