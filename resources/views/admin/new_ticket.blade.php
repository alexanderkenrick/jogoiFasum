@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <h3 class="card-header">Buat Tiket Baru</h3>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Judul">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Dinas Terkait</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected disabled>Pilih Dinas Terkait</option>
                            @for($i=1;$i<=5;$i++)
                                <option value="{{$i}}">Dinas {{$i}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Prioritas</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Prioritas</option>
                            <option value="1">High</option>
                            <option value="2">Medium</option>
                            <option value="3">Low</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
