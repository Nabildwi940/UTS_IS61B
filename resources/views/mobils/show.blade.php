@extends('layouts.app')

@section('title', 'Tampilan Mobil')

@section('contents')
    <h1 class="mb-0"></h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kode Mobil</label>
            <input type="text" name="kdmobil" class="form-control" placeholder="kdmobil" value="{{ $mobil->kdmobil }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama mobil</label>
            <input type="text" name="nmmobil" class="form-control" placeholder="nmmobil" value="{{ $mobil->nmmobil }}" readonly>
        </div>
    </div>
    <div class="col mb-3">
        <label class="form-label">Merk Mobil</label>
        <input type="text" name="merkmobil" class="form-control" placeholder="merkmobil" value="{{ $mobil->merkmobil }}" readonly>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">NOPOL</label>
            <input type="text" name="nopol" class="form-control" placeholder="nopol" value="{{ $mobil->nopol }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Warna Mobil</label>
            <input type="text" name="warnamobil" class="form-control" placeholder="warnamobil" value="{{ $mobil->warnamobil }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $mobil->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $mobil->updated_at }}" readonly>
        </div>
    </div>
@endsection
