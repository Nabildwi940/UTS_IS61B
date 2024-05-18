@extends('layouts.app')

@section('title', 'Tambah Mobil')

@section('contents')
    <h1 class="mb-0"></h1>
    <hr />
    <form action="{{ route('mobils.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="kdmobil" class="form-control" placeholder="kdmobil">
            </div>
            <div class="col">
                <input type="text" name="nmmobil" class="form-control" placeholder="nmmobil">
            </div>
            <div class="col">
                <input type="text" name="merkmobil" class="form-control" placeholder="merkmobil">
            </div>
            <div class="col">
                <input type="text" name="nopol" class="form-control" placeholder="nopol">
            </div>
            <div class="col">
                <input type="text" name="warnamobil" class="form-control" placeholder="warnamobil">
            </div>

            <th>



            <style>
                .btn-small {
                    padding: 8px 8px;
                    font-size: 14px;
                }
            </style>

            <div class="row">
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-small">Tambahkan</button>
                </div>
            </th>
            </div>

        </div>
    </form>
@endsection
