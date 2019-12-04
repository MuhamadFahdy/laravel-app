@extends('template/main')

@section('title', 'Daftar mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar Mahasiswa</h1>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Nrp</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($mahasiswa as $mhs)
                        <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$mhs->nama}}</td>
                        <td>{{$mhs->nrp}}</td>
                        <td>{{$mhs->email}}</td>
                        <td>{{$mhs->jurusan}}a</td>
                        <td>
                        <button type="submit" class="bagde badge-success">
                            Edit
                        </button>
                        <button type="submit" class="bagde badge-danger">
                            Delete
                        </button>
                        </td>
                        </tr>
                     @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection