@extends('HalamanDepan.beranda')

@section('title','Tambah Data Bidang Kerja')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-8">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
          <form action="{{route('simpan-unit')}}" method="post">
          @csrf
          <div class="row">
            <div class="form-group col-sm-7">
            <label>Bidang Kerja</label>
              <input type="text" id="unit_name" name="unit_name" class="form-control @error('unit_name') is-invalid @enderror" placeholder="Masukkan Nama Unit">
              @error('unit_name') <div class="invalid-feedback"> {{$message}} </div> @enderror
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
  

