@extends('layouts.app')

@section('title', 'Edit Mobil')

@section('contents')
    <h1 class="mb-0"></h1>
    <hr />
    <form action="{{route('mobils.update',$mobil->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kode Mobil</label>
                <input type="text" name="kdmobil" class="form-control" placeholder="kdmobil" value="{{ $mobil->kdmobil }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Nama Mobil</label>
                <input type="text" name="nmmobil" class="form-control" placeholder="nmmobil" value="{{ $mobil->nmmobil }}">
            </div>
        </div>
        <div class="col mb-3">
            <label class="form-label">Merk Mobil</label>
            <input type="text" name="merkmobil" class="form-control" placeholder="merkmobil" value="{{ $mobil->merkmobil }}">
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">nopol</label>
                <input type="text" name="nopol" class="form-control" placeholder="nopol" value="{{ $mobil->nopol }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Warna Mobil</label>
                <input type="text" name="warnamobil" class="form-control" placeholder="warnamobil" value="{{ $mobil->warnamobil }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
