@extends('layouts.app')

@section('title')
Hapus Pengiriman | Admin
@endsection

@section('content')
<h3>Hapus Pengiriman</h3>
<div class="form-login">
  <h4>Ingin Menghapus Data?</h4>
  <form action="{{ route('pengiriman.destroy', $pengiriman->id_pengiriman) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" name="hapus" style="width: 40%; margin: 20px auto;">
      Ya
    </button>
  </form>
  <button type="button" class="btn btn-secondary" style="width: 40%; margin: 20px auto;" onclick="window.location='{{ route('pengiriman.index') }}'">
    Tidak
  </button>
</div>
@endsection
