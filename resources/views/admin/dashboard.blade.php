@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-lg-12 mx-auto">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Hello Master!</h6>
            </div>
            <div class="card-body">
                <p>You're logged in!</p>
            </div>
        </div>
    </div>    
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4" >
            <table class="table border-spacing-2">
                <thead>
                    <tr>
                        <th >Tipe Kamar</th>
                        <th >Jumlah Kamar</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if($dataUser->isNotEmpty())
                        @foreach ($dataUser as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="d-flex gap-5">
                                    <a href="#" class="btn btn-primary btn-sm">
                                        Show
                                    </a>

                                    <a href="#" class="btn btn-warning btn-sm">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3" class="text-center text-muted">Tidak ada data tersedia</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <div class="p-3 ">
                <button class="btn btn-success btn-lg" type="submit">+</button>
            </div>
        </div>
</div>
@endsection
