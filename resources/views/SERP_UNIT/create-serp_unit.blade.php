@extends('HalamanDepan.beranda')

@section('title','Tambah Data Unit')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-8">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
          <form action="{{route('simpan-serp_unit')}}" method="post">
          @csrf
          <div class="row">

            <div class="form-group col-sm-7">
            <label>Blok </label>
              <select class="form-control select2 @error('serp_blok_id') is-invalid @enderror"  name="serp_blok_id" value="{{old('serp_blok_id')}}">
                <option selected disabled>Pilih Blok-></option>
              @foreach($blok as $data)
                <option value="{{$data->serp_blok_id}}">{{$data->serp_blok_name}}</option>
               @endforeach
              </select>
              @error('serp_blok_id') <div class="invalid-feed back"> {{$message}} </div> @enderror
            </div>
            
            <div class="form-group col-sm-7">
            <label>Unit</label>
              <input type="text" name="serp_unit_name" class="form-control @error('serp_unit_name') is-invalid @enderror" placeholder="Masukkan Nama Unit">
              @error('serp_unit_name') <div class="invalid-feedback"> {{$message}} </div> @enderror
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
  

