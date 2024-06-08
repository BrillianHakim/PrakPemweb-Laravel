@extends('layouts.app')

@section('title')
Pengiriman | Admin
@endsection

@section('content')
<div class="container">
    <h3>Pengiriman</h3>
    <a href="{{ route('pengiriman.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <a href="{{ route('pengiriman.cetak') }}" class="btn btn-secondary mb-3">Cetak Data</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama Pengiriman</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Jenis Barang</th>
                <th scope="col">Berat Barang</th>
                <th scope="col">Tujuan Barang</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pengiriman as $data)
            <tr>
                <td>{{ $data->nama_pengiriman }}</td>
                <td>{{ $data->nomer_telepon }}</td>
                <td>{{ $data->jenis_barang }}</td>
                <td>{{ $data->berat_barang }}</td>
                <td>{{ $data->tujuan_barang }}</td>
                <td>
                    <a href="{{ route('pengiriman.edit', $data->id_pengiriman) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('pengiriman.destroy', $data->id_pengiriman) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">Tidak ada data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
