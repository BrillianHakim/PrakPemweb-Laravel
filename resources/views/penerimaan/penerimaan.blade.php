@extends('layouts.app')

@section('title')
Penerimaan | Admin
@endsection

@section('content')
<div class="container">
    <h3>Penerimaan</h3>
    <a href="{{ route('penerimaan.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <a href="{{ route('penerimaan.cetak') }}" class="btn btn-secondary mb-3">Cetak Data</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Waktu Diterima</th>
                <th scope="col">No HP</th>
                <th scope="col">Alamat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($penerimaan as $data)
            <tr>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->waktu_diterima }}</td>
                <td>{{ $data->no_hp }}</td>
                <td>{{ $data->alamat }}</td>
                <td>
                    <a href="{{ route('penerimaan.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('penerimaan.destroy', $data->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Tidak ada data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
