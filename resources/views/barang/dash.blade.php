@extends('template.index')
@section('content')
<div class="card">
    <div class="card-header">
        TOTAL Barang
    </div>
    <div class="card-body">
        <h1>{{ $total_barang }}</h1>
    </div>
</div>
@endsection
