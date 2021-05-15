@extends('HalamanDepan.beranda')

@section('title','Tambah Data PIC')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-8">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
          <form action="{{route('simpan-serp_pic')}}" method="post">
          @csrf
          <div class="row">
            <div class="form-group col-sm-7">
            <label>ID PIC</label>
              <input type="text"  name="serp_pic_id" class="form-control @error('serp_pic_id') is-invalid @enderror" placeholder="Masukkan ID PIC">
              @error('serp_pic_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            <div class="form-group col-sm-7">
            <label>PIC</label>
              <input type="text"  name="serp_pic_name" class="form-control @error('serp_pic_name') is-invalid @enderror" placeholder="Masukkan Nama PIC">
              @error('serp_pic_name') <div class="invalid-feedback"> {{$message}} </div> @enderror
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
  

