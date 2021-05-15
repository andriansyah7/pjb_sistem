@extends('HalamanDepan.beranda')

@section('title','Tambah Data Fungsi')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-8">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
          <form action="{{route('simpan-fungsi')}}" method="post">
          @csrf
          <div class="row">

            <div class="form-group col-sm-7">
            <label>Bidang </label>
              <select class="form-control select2 @error('unit_id') is-invalid @enderror" id="unit_id" name="unit_id" value="{{old('unit_id')}}">
                <option selected disabled>Pilih Bidang-></option>
              @foreach($unit as $unt)
                <option value="{{$unt->unit_id}}">{{$unt->unit_name}}</option>
               @endforeach
              </select>
              @error('unit_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            
            <div class="form-group col-sm-7">
            <label>Fungsi</label>
              <input type="text" id="fungsi_name" name="fungsi_name" class="form-control @error('fungsi_name') is-invalid @enderror" placeholder="Masukkan Nama Fungsi">
              @error('fungsi_name') <div class="invalid-feedback"> {{$message}} </div> @enderror
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
  

