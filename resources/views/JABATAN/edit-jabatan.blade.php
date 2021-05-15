@extends('HalamanDepan.beranda')

@section('title','Edit Data Jabatan')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-8">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
          <form action="{{route('update-jabatan','jabatan_id')}}" method="post">
          
          @csrf

          <div class="row">
            <div class="form-group col-sm-7">
            <label>Jabatan</label>
              <input type="text" id="jabatan_name" name="jabatan_name" class="form-control @error('jabatan_name') is-invalid @enderror" value="{{$jabatan->jabatan_name}}">
              @error('jabatan_name') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            </div>


            <div class="form-group">
              <button type="submit" class="btn btn-success">Simpan Data</button>
            </div>
        </div>
    <!-- /.content -->  
      </div>
    </div>
  @endsection
  

