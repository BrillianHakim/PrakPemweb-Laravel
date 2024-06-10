@extends('layouts.app')

@section('title', 'Hapus Data Penerimaan | Admin')

@section('content')
<div class="container">
    <h3>Hapus Data Penerimaan</h3>
    <p>Apakah Anda yakin ingin menghapus data penerimaan ini?</p>
    <form action="{{ route('penerimaan.destroy', $penerimaan->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
        <a href="{{ route('penerimaan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
