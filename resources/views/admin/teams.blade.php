@extends('layouts.app')
@section('content')
    <div class="container-fluid mx-auto">
        <div class="card">
            <h3 class="card-header">Teams</h3>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" width="2%" class="text-center">No.</th>
                            <th scope="col">Nama Dinas</th>
                            <th scope="col" width="10%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @for ($i = 1; $i <= 5; $i++)
                            <tr>
                                <th scope="row" class="text-center">{{ $i }}</th>
                                <td class="">Dinas {{ $i }}</td>
                                <td>
                                    <button class="btn btn-primary">Edit</button>
                                    <button class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
