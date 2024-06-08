<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengiriman;


class PengirimanController extends Controller
{
    /**
     * Menampilkan semua data pengiriman.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengiriman = Pengiriman::all();
        return view('pengiriman.pengiriman', compact('pengiriman'));
    }
    public function create()
    {
        return view('pengiriman.pengiriman-entry');
    }
    

    /**
     * Menyimpan data pengiriman yang baru.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 
    public function store(Request $request)
    {
       $request->validate([
        'nama_pengiriman' => 'required',
        'nomer_telepon' => 'required',
        'jenis_barang' => 'required',
        'berat_barang' => 'required',
        'tujuan_barang' => 'required',
        ]);
        Pengiriman::create([
            'nama_pengiriman' => $request->nama_pengiriman,
            'nomer_telepon' => $request->nomer_telepon,
            'jenis_barang' => $request->jenis_barang,
            'berat_barang' => $request->berat_barang,
            'tujuan_barang' =>$request->tujuan_barang,
        ]);

        return redirect('/pengiriman');
    }


    /**
     * Menampilkan form untuk mengedit data pengiriman.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_pengiriman)
    {
        $pengiriman = Pengiriman::find($id_pengiriman);
        return view('pengiriman.pengiriman-edit', compact('pengiriman'));
    }
   

    /**
     * Mengupdate data pengiriman yang ada.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pengiriman)
    {
        $request->validate([
            'nama_pengiriman' => 'required',
            'nomer_telepon' => 'required',
            'jenis_barang' => 'required',
            'berat_barang' => 'required',
            'tujuan_barang' => 'required',
        ]);

        $pengiriman = Pengiriman::find($id_pengiriman);

        $pengiriman->update([
            'nama_pengiriman' => $request->nama_pengiriman,
            'nomer_telepon' => $request->nomer_telepon,
            'jenis_barang' => $request->jenis_barang,
            'berat_barang' => $request->berat_barang,
            'tujuan_barang' =>$request->tujuan_barang,
        ]);

        return redirect('/pengiriman');
    }

    /**
     * Menghapus data pengiriman yang ada.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id_pengiriman)
    {
        $Pengiriman = Pengiriman::find($id_pengiriman);
        return view('pengiriman.pengiriman-hapus', compact('pengiriman'));
    }

    public function destroy($id_pengiriman)
    {
        $pengiriman = Pengiriman::find($id_pengiriman);
        $pengiriman->delete();
        return redirect('/pengiriman');
    }
}
