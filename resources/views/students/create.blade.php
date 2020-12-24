@extends('layout.main')

@section('title', 'Create Student Data')
    
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Create Student Data</h1>
                <form method="POST" action="/students">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Name</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Input Name" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                            <div  id="invalidCheck3Feedback" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Input NIK" name="nik" value="{{ old('nik') }}">
                        @error('nik')
                            <div  id="invalidCheck3Feedback" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Input Name" name="email" value="{{ old('email') }}">
                        @error('email')
                            <div  id="invalidCheck3Feedback" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Major</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Input Major" name="jurusan" value="{{ old('jurusan') }}">
                        @error('jurusan')
                            <div  id="invalidCheck3Feedback" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Add Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection
