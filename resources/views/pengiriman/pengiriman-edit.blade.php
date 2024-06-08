@extends('layouts.app')

@section('title')
Edit Pengiriman | Catshop Admin
@endsection

@section('content')
<h3>Edit Pengiriman</h3>
<div class="form-login">
  <form action="{{ route('pengiriman.update', $pengiriman->id_pengiriman) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="nama_pengiriman">Nama Pengiriman</label>
    <input class="input" type="text" name="nama_pengiriman" id="nama_pengiriman" placeholder="Nama Pengiriman" value="{{ old('nama_pengiriman', $pengiriman->nama_pengiriman) }}" />
    @error('nama_pengiriman')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="nomer_telepon">Nomor Telepon</label>
    <input class="input" type="text" name="nomer_telepon" id="nomer_telepon" placeholder="Nomor Telepon" value="{{ old('nomer_telepon', $pengiriman->nomer_telepon) }}" />
    @error('nomer_telepon')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="jenis_barang">Jenis Barang</label>
    <textarea class="input" name="jenis_barang" id="jenis_barang" placeholder="Jenis Barang">{{ old('jenis_barang', $pengiriman->jenis_barang) }}</textarea>
    @error('jenis_barang')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="berat_barang">Berat Barang</label>
    <input class="input" type="text" name="berat_barang" id="berat_barang" placeholder="Berat Barang" value="{{ old('berat_barang', $pengiriman->berat_barang) }}" />
    @error('berat_barang')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="tujuan_barang">Tujuan Barang</label>
    <textarea class="input" name="tujuan_barang" id="tujuan_barang" placeholder="Tujuan Barang">{{ old('tujuan_barang', $pengiriman->tujuan_barang) }}</textarea>
    @error('tujuan_barang')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
      Edit
    </button>
  </form>
</div>
@endsection
