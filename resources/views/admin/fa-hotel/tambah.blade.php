@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="row"> 
    <div class="col-lg-12">
        <div class="card shadow mb-4" >
            <form action="{{ route('fahotel.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_fasilitas" class="form-label">Nama Fasilitas :</label>
                    <input type="text" name="nama_fasilitas" class="form-control" required>
                </div>
            
                <div class="mb-3">
                    <label for="jmlh_kamar" class="form-label">Status :</label>
                    <input type="number" name="jmlh_kamar" class="form-control" required>
                </div>
            
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga :</label>
                    <input type="text" name="harga" class="form-control" required>
                </div>
            
                <button type="submit" class="btn btn-primary">Tambah Kamar</button>
            </form>
            
        </div>
</div>



@endsection