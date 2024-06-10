@extends('layouts.app')

@section('title', 'Edit Data Penerimaan | Admin')

@section('content')
<div class="container">
    <h3>Edit Data Penerimaan</h3>
    <form action="{{ route('penerimaan.update', $penerimaan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $penerimaan->nama }}">
        </div>
        <div class="form-group">
            <label for="waktu_diterima">Waktu Diterima:</label>
            <input type="datetime-local" class="form-control" id="waktu_diterima" name="waktu_diterima" value="{{ \Carbon\Carbon::parse($penerimaan->waktu_diterima)->format('Y-m-d\TH:i') }}">
        </div>
        <div class="form-group">
            <label for="no_hp">Nomor HP:</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $penerimaan->no_hp }}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea class="form-control" id="alamat" name="alamat">{{ $penerimaan->alamat }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('penerimaan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
