@extends('HalamanDepan.beranda')

@section('title','Edit Data Blok')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-8">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
          <form action="/update-blok/{{$serp_blok->serp_blok_id}}" method="post">
          @method('patch')
          @csrf
          <div class="row">
            <div class="form-group col-sm-7">
            <label>ID BLOK</label>
              <input type="text"  name="serp_blok_id" class="form-control @error('serp_blok_id') is-invalid @enderror" value="{{$serp_blok->serp_blok_id}}">
              @error('serp_blok_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            <div class="form-group col-sm-7">
            <label>Nama Blok</label>
              <input type="text"  name="serp_blok_name" class="form-control @error('serp_blok_name') is-invalid @enderror" value="{{$serp_blok->serp_blok_name}}">
              @error('serp_blok_name') <div class="invalid-feedback"> {{$message}} </div> @enderror
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
  

