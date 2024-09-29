@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <h3 class="card-header">Tickets</h3>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" width="2%" class="text-center">No.</th>
                            <th scope="col">ID</th>
                            <th scope="col">Laporan</th>
                            <th scope="col">Dinas Terkait</th>
                            <th scope="col">Pelapor</th>
                            <th scope="col" width="5%">Pembaruan</th>
                            <th scope="col" width="10%">Status</th>
                            <th scope="col" width="10%">Prioritas</th>
                        </tr>
                    </thead>
                    <tbody class="">
                    @for($i = 1; $i<=10 ;$i++)
                        <tr>
                            <th scope="row" class="text-center">{{$i}}</th>
                            <td><a href="">ABC-XX{{$i}}</a></td>
                            <td><a href="">Laporan No. {{$i}}</a></td>
                            <td>
                                @if($i%3==0)
                                    Dinas A
                                @elseif($i%5==0)
                                    Dinas B
                                @elseif($i%2==0)
                                    Dinas C
                                @else
                                    Dinas D
                                @endif

                            </td>
                            <td>Pelapor {{$i}}</td>
                            <td class="text-center">10.30</td>
                            <td>
                                @if($i%2==0)
                                    <span class="badge text-bg-success">Selesai</span>
                                @elseif($i%5==0)
                                    <span class="badge text-bg-info">Baru</span>
                                @else
                                    <span class="badge text-bg-danger">Belum Selesai</span>
                                @endif
                            </td>
                            <td>
                                @if($i%2==0 && $i%3==0)
                                    Medium
                                @elseif($i%3==0)
                                    Low
                                @elseif($i%2==1)
                                    Low
                                @else
                                    High
                                @endif
                            </td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
