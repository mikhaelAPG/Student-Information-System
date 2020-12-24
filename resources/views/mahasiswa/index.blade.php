@extends('layout.main')

@section('title', 'Student List')
    
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Student List</h1>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">NIK</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Department</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $mahasiswa as $mhs )
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td scope="col">{{ $mhs->nama }}</td>
                                <td scope="col">{{ $mhs->nik }}</td>
                                <td scope="col">{{ $mhs->email }}</td>
                                <td scope="col">{{ $mhs->jurusan }}</td>
                                <td>
                                    <a href="" class="badge badge-success">Edit</a>
                                    <a href="" class="badge badge-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
