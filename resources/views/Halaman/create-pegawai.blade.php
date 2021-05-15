@extends('HalamanDepan.beranda')

@section('title','Tambah User')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-8">
        <div class ="card-header">
          <h3>Input Data</h3>
        </div>
        <div class="card-body">
          <form action="{{route('simpan-pegawai')}}" method="post">
          @csrf
            <div class="form-group col-sm-5">
              <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama User" value="{{old('name')}}">
              @error('name') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            <div class="form-group col-sm-3">
              <input type="text" id="NID" name="NID" class="form-control @error('NID') is-invalid @enderror" placeholder="Masukkan NID" value="{{old('NID')}}">
              @error('NID') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            <div class="form-group col-sm-5">
              <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email" value="{{old('email')}}">
              @error('email') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            <div class="row">
                      <!-- select -->
                      <div class="form-group ml-2 col-sm-3">
                        <select class="form-control custom-select @error('level') is-invalid @enderror" id="level" name="level" value="{{old('level')}}">
                          <option selected disabled>-Pilih Level-</option>
                          <option>super user</option>
                          <option>admin engineer</option>
                          <option>user spv</option>
                          <option>user manager</option>
                          <option>user staff</option>
                        </select>
                        @error('level') <div class="invalid-feedback"> {{$message}} </div> @enderror
                      </div>
            </div>
            <div class="form-group col-sm-4">
              <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Buat Password">
              @error('password') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success">Simpan Data</button>
            </div>
        </div>
    <!-- /.content -->  
      </div>
    </div>
  @endsection
  <!-- /.content-wrapper -->

