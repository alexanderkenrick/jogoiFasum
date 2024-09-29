@extends('layouts.app')
@section('styles')
    <style>
        .card-fasum {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        .card-fasum img {
            width: 100%;
            border-radius: 8px 8px 0 0;
        }

        .card-fasum-body{
            padding: 0.5rem 0.75rem;
        }

        .card-fasum-body h2 {
            font-size: 1.5rem;
            margin: 16px 0;
        }

        .card-fasum-body p {
            font-size: 1rem;
            color: #666;
        }

        .card-fasum a {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 16px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        .card-fasum a:hover {
            background-color: #218838;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="px-5">Fasum</h1>
        <div class="grid-container">
            @foreach($fasums as $fasum)
                <div class="card-fasum">
                    <img src="{{asset('images/fasum/trotoar-rusak.jpg')}}" alt="Card image">
                    <div class="card-fasum-body">
                        <h2>{{$fasum->name}}</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut commodo.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
