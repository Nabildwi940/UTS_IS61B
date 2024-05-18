@extends('layouts.app')
  
@section('title', 'Home Mobil')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Daftar Mobil</h1>
        <a href="{{ route('mobils.create') }}" class="btn btn-primary">Tambah Mobil</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Kode Mobil</th>
                <th>Nama Mobil</th>
                <th>Merk Mobil</th>
                <th>Nopol</th>
                <th>Warna Mobil</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($mobil->count() > 0)
                @foreach($mobil as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->kdmobil }}</td>
                        <td class="align-middle">{{ $rs->nmmobil }}</td>
                        <td class="align-middle">{{ $rs->merkmobil }}</td>
                        <td class="align-middle">{{ $rs->nopol }}</td> 
                        <td class="align-middle">{{ $rs->warnamobil }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('mobils.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('mobils.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('mobils.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">mobil tidak ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection