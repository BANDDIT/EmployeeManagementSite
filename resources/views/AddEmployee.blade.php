@extends('template')

@section('title','Add Employee')


@section('body')
    <form class="m-5" method="POST" action="{{ route('addProcess') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Umur</label>
            <input type="number" class="form-control @error('umur') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="umur">
            @error('umur')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror        
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat">
            @error('alamat')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror        
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nomor HP</label>
            <input type="text" class="form-control @error('nomorHP') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="nomorHP">
            @error('nomorHP')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror        
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection