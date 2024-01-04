<?php

namespace App\Http\Controllers;

use App\Models\M_310122023716;
use Illuminate\Http\Request;

class C_310122023716 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(M_310122023716 $myDB)
    {
        //
        return view('barang.index', [
            'data' => $myDB->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambah()
    {
        //
        return view('barang.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function tambah_simpan(Request $request, M_310122023716 $myDB)
    {
        //
        $data = [
            'kode_barang' => $request->kode_barang,
            'jenis_barang' => $request->jenis_barang,
            'nama_barang' => $request->nama_barang,
            'merek_barang' => $request->merek_barang,
            'satuan_barang' => $request->satuan_barang,
            'harga_barang_satuan' => $request->harga_barang_satuan,
            'stok_barang' => $request->stok_barang,
            'nama_petugas' => $request->nama_petugas,
        ];

        $myDB->create($data);

        return redirect()->route('barang.index')->with([
            'notif' => 'Data Berhasil Ditambahkan'
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(M_310122023716 $myDB)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(M_310122023716 $myDB, string $id)
    {
        //

        return view('barang.edit', [
            'data' => $myDB->findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit_simpan(Request $request, M_310122023716 $myDB, string $id)
    {
        //
        $result = $myDB->findOrFail($id);

        $data = [
            'kode_barang' => $request->kode_barang,
            'jenis_barang' => $request->jenis_barang,
            'nama_barang' => $request->nama_barang,
            'merek_barang' => $request->merek_barang,
            'satuan_barang' => $request->satuan_barang,
            'harga_barang_satuan' => $request->harga_barang_satuan,
            'stok_barang' => $request->stok_barang,
            'nama_petugas' => $request->nama_petugas,
        ];

        $result->update($data);

        return redirect()->route('barang.index')->with([
            'notif' => 'Data Berhasil Diedit'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapus(M_310122023716 $myDB, string $id)
    {
        //
        $myDB->findOrFail($id)->delete();

        return redirect()->route('barang.index')->with([
            'notif' => 'Data Berhasil Dihapus'
        ]);
    }
}
