@extends('template.index')
@section('content')
    @if (session('notif'))
        <div class="alert alert-success" role="alert">
            <h2>{{ session('notif') }}</h2>
        </div>
    @endif

    <a href="{{ route('barang.tambah') }}" class="btn btn-primary">Tambah Data</a>

    <table class="table-striped table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Kode Barang</th>
                <th>Jenis Barang</th>
                <th>Nama Barang</th>
                <th>Merek Barang</th>
                <th>Satuan Barang</th>
                <th>Harga Brg Satuan</th>
                <th>Stok Barang</th>
                <th>Nama Petugas</th>
                <th>Aksi</th>
            </tr>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->kode_barang }}</td>
                    <td>{{ $row->jenis_barang }}</td>
                    <td>{{ $row->nama_barang }}</td>
                    <td>{{ $row->merek_barang }}</td>
                    <td>{{ $row->satuan_barang }}</td>
                    <td>{{ $row->harga_barang_satuan }}</td>
                    <td>{{ $row->stok_barang }}</td>
                    <td>{{ $row->nama_petugas }}</td>
                    <td>
                        <a href="{{ route('barang.edit', $row->id) }}" class="btn btn-warning">Edit</a>

                        <form onsubmit="return confirm('yakin?')" action="{{ route('barang.hapus', $row->id) }}"
                            method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>

                    </td>
                </tr>
            @endforeach

        </tbody>
        </thead>
    </table>
@endsection
