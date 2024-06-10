<?php

namespace App\Http\Controllers;

use App\Models\Penerimaan;
use Illuminate\Http\Request;
use PDF;

class PenerimaanController extends Controller
{
    public function index()
    {
        $penerimaan = Penerimaan::all();
        return view('penerimaan.penerimaan', compact('penerimaan'));
    }

    public function create()
    {
        return view('penerimaan.penerimaan-entry');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'waktu_diterima' => 'required|date',
            'no_hp' => 'required|string',
            'alamat' => 'required|string',
        ]);

        Penerimaan::create($request->all());

        return redirect()->route('penerimaan.index')
                         ->with('success', 'Penerimaan created successfully.');
    }

    public function show(Penerimaan $penerimaan)
    {
        return view('penerimaan.show', compact('penerimaan'));
    }

    public function edit(Penerimaan $penerimaan)
    {
        return view('penerimaan.penerimaan-edit', compact('penerimaan'));
    }

    public function update(Request $request, Penerimaan $penerimaan)
    {
        $request->validate([
            'nama' => 'required',
            'waktu_diterima' => 'required|date',
            'no_hp' => 'required|string',
            'alamat' => 'required|string',
        ]);

        $penerimaan->update($request->all());

        return redirect()->route('penerimaan.index')
                         ->with('success', 'Penerimaan updated successfully.');
    }

    public function destroy(Penerimaan $penerimaan)
    {
        $penerimaan->delete();

        return redirect()->route('penerimaan.index')
                         ->with('success', 'Penerimaan deleted successfully.');
    }
    public function cetak()
    {
        $penerimaan = Penerimaan::all();
        $pdf = PDF::loadView('penerimaan.cetak', compact('penerimaan'));
        return $pdf->download('laporan-penerimaan.pdf');
    }
}
