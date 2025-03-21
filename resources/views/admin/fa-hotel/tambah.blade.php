@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="row"> 
    <div class="col-lg-12">
        <div class="card shadow mb-4" >
            <form action="{{ route('fahotel.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_fasilitas" class="form-label">Nama Fasilitas :</label>
                    <input type="text"  name="nama_fasilitas" id="nama_fasilitas" class="form-control" required>
                </div>
            
                <div class="mb-3">
                    <label for="status" class="form-label">Status :</label>
                    <select id="status" name="status" class="form-control" required>
                        <option value="" disabled selected> Pilih status...</option>
                        <option value="available">Available</option>
                        <option value="not available">Not available</option>
                    </select>
                </div>
            
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan :</label>
                    <textarea id="keterangan" name="keterangan" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image :</label>
                    <input type="file" name="image" id="image" class="form-control" required>
                </div>
            
                <button type="submit" class="btn btn-primary btn-lg">Store</button>
            </form>
            
        </div>
</div>



@endsection