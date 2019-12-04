@extends('template/main')

@section('title','Detail Mahasiswa')

@section('container')
    <<div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Detail Mahasiswa</h1>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$student->nama}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$student->email}}</h6>
                        <p class="card-text">{{$student->nrp}}</p>
                        <p class="card-text">{{$student->jurusan}}</p>
                        <a href="#" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Deletet</a>
                        <a href="{{url('students/')}}" class="btn btn-info">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection