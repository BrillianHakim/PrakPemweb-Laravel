@extends('layouts.app')

@section('title', 'Tambah Data Penerimaan | Admin')

@section('content')
<div class="container">
    <h3>Tambah Data Penerimaan</h3>
    <form action="{{ route('penerimaan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="waktu_diterima">Waktu Diterima:</label>
            <input type="datetime-local" class="form-control" id="waktu_diterima" name="waktu_diterima" value="{{ old('waktu_diterima') }}">
            @error('waktu_diterima')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="no_hp">No HP:</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ old('no_hp') }}">
            @error('no_hp')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea class="form-control" id="alamat" name="alamat">{{ old('alamat') }}</textarea>
            @error('alamat')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="{{ route('penerimaan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
