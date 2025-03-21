@extends('layouts.admin')

@section('title', 'Edit Data Aparat')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm p-4">
        <h1 class="mb-4 text-center">Edit Data Kamar</h1>

        <form action="{{ route('fahotel.update', $hotel->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama_fasilitas" class="form-label fw-bold"> Fasilitas : </label>
                <input type="text" name="nama_fasilitas" class="form-control" value="{{ $hotel->nama_fasilitas }}" required >
            </div>

            <div class="mb-3">
                <label for="status" class="form-label text-dark"> Status :</label>
                <select name="status" class="form-control" required>
                    <option value="" disabled selected>Pilih status...</option>
                    <option value="available" {{ $hotel->status == 'available' ? 'selected' : '' }}>Available</option>
                    <option value="not available" {{ $hotel->status == 'not available' ? 'selected' : '' }}>Not available</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="keterangan" class="form-label fw-bold"> Keterangan : </label>
                <textarea name="keterangan" class="form-control" required>{{ $hotel->keterangan }}</textarea>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('fahotel.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary btn-lg">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
