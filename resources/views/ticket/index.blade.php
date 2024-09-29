@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <h1 class="px-5">Tickets</h1>
        <div class="px-5">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Report</th>
                    <th scope="col">Place Name</th>
                    <th scope="col">Fasum Id</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                @foreach($tickets as $ticket)
                    <tr>
                        <td>{{$ticket->id}}</td>
                        <td>{{$ticket->report}}</td>
                        <td>{{$ticket->place->name}}</td>
                        <td>{{$ticket->fasum_id}}</td>
                        <td>{{$ticket->created_at}}</td>
                        <td><button class="btn btn-primary" onclick="window.location.href='{{route('tickets.show', $ticket->id)}}'">Open Ticket</button> </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
