@extends('layouts.app')
@section('styles')
    <style>
        .divider{
            height: 1rem;
            width: 100%;
        }
        .btn-redirect {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
            border: 1px solid #000;
            border-radius: 5px;
            margin: 0 10px;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <h1 class="text-center">Jogoi Fasum</h1>
        <div class="row my-4">
            <h3>Cari Ticket</h3>
            <form action="" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari ticket" name="search">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </form>
        </div>

        <div class="row my-4">
            <div class="col-12 col-md-6">
                <a href="{{route('admin.new_tickets')}}" class="btn-redirect">Buat Tiket Baru</a>
            </div>
            <div class="col-12 col-md-6">
                <a href="{{route('tickets.index')}}" class="btn-redirect">Daftar Tiket</a>
            </div>
            <div class="divider"></div>
            <div class="col-12 col-md-6">
                <a href="{{route('fasums.index')}}" class="btn-redirect">Daftar Fasum</a>
            </div>
            <div class="col-12 col-md-6">
                <a href="{{route('places.showTotalTicket')}}" class="btn-redirect">Daftar Place</a>
            </div>
        </div>

        <div class="row my-4 d-flex justify-content-center">
            <a href="{{route('kategori')}}" class="btn-redirect">Kategori</a>
        </div>
    </div>
@endsection
