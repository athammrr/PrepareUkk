@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row" >        
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <h1>Detail Pemesanan</h1>
            <table class="table border-spacing-2 ">
                <tr>
                    <th>Nomor</th>
                    <td>{{ $cekin->id }}</td>
                </tr>
                <tr>
                    <th>Nama Tamu</th>
                    <td>{{ $cekin->nama_tamu }}</td>
                </tr>
                <tr>
                    <th>Tanggal Check In</th>
                    <td>{{ $cekin->tgl_Cekin }}</td>
                </tr>
                <tr>
                    <th>Tanggal Check Out</th>
                    <td>{{ $cekin->tgl_Cekout }}</td>
                </tr>
                <tr>
                    <th>Tipe Kamar</th>
                    <td>{{ $cekin->tipe }}</td>
                </tr>
                <tr>
                    <th>Jumlah Kamar</th>
                    <td>{{ $cekin->jmlh_Kamar }}</td>
                </tr>
                <tr>
                    <th>Tanggal Pemesanan</th>
                    <td>{{ $cekin->tggl_pemesanan }}</td>
                </tr>
            </table>
            <div class="p-3">
                <a href="{{ route('resepsionis.index') }}" class="btn btn-primary btn-lg">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
