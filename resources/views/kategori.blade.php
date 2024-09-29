@extends('layouts.app')
@section('styles')
    <style>
        .halte img {
            height: 150px;
            object-fit: cover;
            object-position: center;
            border-radius: 5px 5px 0 0;
        }

        .custom-card {
            border-radius: 15px;
            overflow: hidden;
        }

        .custom-card img {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .card-body {
            background-color: #f8f9fa;
            padding: 20px;
        }

        .text-truncate-ellipsis {
            display: -webkit-box;
            -webkit-line-clamp: 3; /* Limit to 3 lines */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
        }

        @media screen and (max-width: 576px) {
            .halte img {
                height: 100px;
            }
        }
    </style>
@endsection
@section('content')
    <div class="container mx-auto">
        <h1 class="text-center my-3">Kategori</h1>
        <div class="d-flex flex-column">
            <div class="settings">
                <div class="form-row">
                    <div class="form-group">
                        <label for="kategori">Kategori :</label>
                        <select name="selected" class="form-select" id="kategori-select">
                            <option value="" selected disabled>Pilih Kategori</option>
                            <option value="halte">Halte</option>
                            <option value="halte">Halte 2</option>
                            <option value="halte">Halte 3</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="wrapper my-4">

            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('#kategori-select').on('change', function () {
            const selected = $(this).val();
            window.location.href= `/kategori/${selected}`;
        });
    </script>
@endsection
