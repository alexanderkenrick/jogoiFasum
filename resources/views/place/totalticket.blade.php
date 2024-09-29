@extends('layouts.app')
@section('content')
    <div class="container-fluid px-5">
        <h1 class="">Places</h1>
        <div class="">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">Place Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Total Ticket</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                @foreach($data as $place)
                    <tr>
                        <td>{{$place->name}}</td>
                        <td>{{$place->description}}</td>
                        <td>{{$place->total_ticket}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
