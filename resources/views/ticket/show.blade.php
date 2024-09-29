@extends('layouts.app')
@section('content')
    <div class="container-fluid px-5">
        <h1 >Tickets</h1>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <img src="{{asset('images/fasum/trotoar-rusak.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$data->report}}</h5>
                        <ul>
                            <li>Fasum: {{$data->fasum->name}}</li>
                            <li>Place name: {{$data->place->name}}</li>
                        </ul>
{{--                        <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
