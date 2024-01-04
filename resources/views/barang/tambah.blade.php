@extends('template.index')
@section('content')
    <div class="card">
        <div class="card-header">
            Tambah
        </div>
        <div class="card-body">
            <form action="{{ route('barang.tambah_simpan') }}" method="POST">
                @csrf
                <label for="">Kode Barang</label>
                <input type="text" name="kode_barang" id="" class="form-control">

                <label for="">Jenis Barang</label>
                <select name="jenis_barang" id="" class="custom-select">
                    <option value="">Pilih</option>
                    <option value="fashion">Fashion</option>
                    <option value="tas">Tas</option>
                    <option value="sepatu">Sepatu</option>
                    <option value="parfum">Parfum</option>
                    <option value="alatsekolah">Alat Sekolah</option>
                </select>

                <label for="">Nama Barang</label>
                <input type="text" name="nama_barang" id="" class="form-control">

                <label for="">Merek Barang</label>
                <input type="text" name="merek_barang" id="" class="form-control">

                <label for="">Satuan Barang</label>
                <select name="satuan_barang" id="" class="custom-select">
                    <option value="">Pilih</option>
                    <option value="unit">Unit</option>
                    <option value="pasang">Pasang</option>
                    <option value="botol">Botol</option>
                    <option value="lembar">lembar</option>
                    <option value="lainnya">Lainnya</option>
                </select>

                <label for="">Harga Brg Satuan</label>
                <input type="number" name="harga_barang_satuan" id="" class="form-control">

                <label for="">Stok Barang</label>
                <input type="number" name="stok_barang" id="" class="form-control">

                <label for="">Nama Petugas</label>
                <input type="text" name="nama_petugas" id="" class="form-control">

                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="{{ route('barang.index') }}" class="btn btn-dark">Batal</a>
            </form>

        </div>
    </div>
@endsection
