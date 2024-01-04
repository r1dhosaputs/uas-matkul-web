@extends('template.index')
@section('content')
    <div class="card">
        <div class="card-header">
            Edit
        </div>
        <div class="card-body">
            <form action="{{ route('barang.edit_simpan', $data->id) }}" method="POST">
                @csrf
                @method('put')
                <label for="">Kode Barang</label>
                <input type="text" name="kode_barang" id="" value="{{ $data->kode_barang }}" class="form-control">

                <label for="">Jenis Barang</label>
                <select name="jenis_barang" class="custom-select">
                    <option value="">Pilih</option>
                    <option value="fashion" {{ $data->jenis_barang === 'fashion' ? 'selected' : '' }}>Fashion</option>
                    <option value="tas" {{ $data->jenis_barang === 'tas' ? 'selected' : '' }}>Tas</option>
                    <option value="sepatu" {{ $data->jenis_barang === 'sepatu' ? 'selected' : '' }}>Sepatu</option>
                    <option value="parfum" {{ $data->jenis_barang === 'parfum' ? 'selected' : '' }}>Parfum</option>
                    <option value="alatsekolah" {{ $data->jenis_barang === 'alatsekolah' ? 'selected' : '' }}>Alat Sekolah
                    </option>
                </select>

                <label for="">Nama Barang</label>
                <input type="text" name="nama_barang" id="" value="{{ $data->nama_barang }}"
                    class="form-control">

                <label for="">Merek Barang</label>
                <input type="text" name="merek_barang" id="" value="{{ $data->merek_barang }}"
                    class="form-control">

                <label for="">Satuan Barang</label>
                <select name="satuan_barang" class="custom-select">
                    <option value="">Pilih</option>
                    <option value="unit" {{ $data->satuan_barang === 'unit' ? 'selected' : '' }}>Unit</option>
                    <option value="pasang" {{ $data->satuan_barang === 'pasang' ? 'selected' : '' }}>Pasang</option>
                    <option value="botol" {{ $data->satuan_barang === 'botol' ? 'selected' : '' }}>Botol</option>
                    <option value="lembar" {{ $data->satuan_barang === 'lembar' ? 'selected' : '' }}>lembar</option>
                    <option value="lainnya" {{ $data->satuan_barang === 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                </select>

                <label for="">Harga Brg Satuan</label>
                <input type="number" name="harga_barang_satuan" id="" value="{{ $data->harga_barang_satuan }}"
                    class="form-control">

                <label for="">Stok Barang</label>
                <input type="number" name="stok_barang" id="" value="{{ $data->stok_barang }}"
                    class="form-control">

                <label for="">Nama Petugas</label>
                <input type="text" name="nama_petugas" id="" value="{{ $data->nama_petugas }}"
                    class="form-control">

                <button type="submit" class="btn btn-primary">Edit</button>
                <a href="{{ route('barang.index') }}" class="btn btn-dark">Batal</a>
            </form>

        </div>
    </div>
@endsection
