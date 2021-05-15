@extends('HalamanDepan.beranda')

@section('title','EditUser')
@section('container')
    <!-- Main content -->
    <div class="content">
      <div class ="card card-info card-outline">
        <div class ="card-header">
          <h3>Form Update Data</h3>
        </div>
        <div class="card-body">
          <form action="{{route('update-pegawai', $peg->id)}}" method="post">
          @csrf
          <div class="form-group col-sm-5">
              <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama User" value="{{ $peg->name }}">
              @error('name') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            <div class="form-group col-sm-3">
              <input type="text" id="NID" name="NID" class="form-control @error('NID') is-invalid @enderror" placeholder="Masukkan NID" value="{{ $peg->NID }}">
              @error('NID') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            <div class="form-group col-sm-5">
              <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email" value="{{ $peg->email }}">
              @error('email') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            <div class="row">
                      <!-- select -->
                      <div class="form-group ml-2 col-sm-3">
                        <select class="form-control @error('level') is-invalid @enderror" id="level" name="level">
                        <option selected disabled>{{ $peg->level }}</option>
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
              <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Buat Password" value="{{ $peg->password }}">
              @error('password') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Update Data</button>
            </div>
        </div>
    <!-- /.content -->  
      </div>
    </div>
  <!-- /.content-wrapper -->
  @endsection