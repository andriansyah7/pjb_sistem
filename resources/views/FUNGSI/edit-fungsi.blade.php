@extends('HalamanDepan.beranda')

@section('title','Edit Data Fungsi')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-8">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
          <form action="/update-fungsi/{{$fungsi->fungsi_id}}" method="post">
          @method('patch')
          @csrf
          <div class="row">

            <div class="form-group col-sm-7">
            <label>Bidang </label>
              <select class="form-control select2 @error('unit_id') is-invalid @enderror" name="unit_id" >
                <option selected disabled>Pilih Bidang-></option>
              @foreach($unit as $unt)
                <option value="{{$unt->unit_id}}"{{($fungsi->unit_id == $unt ->unit_id) ? 'selected':''}} >{{$unt->unit_name}}</option>
               @endforeach
              </select>
              @error('unit_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            
            <div class="form-group col-sm-7">
            <label>Fungsi</label>
              <input type="text" name="fungsi_name" class="form-control @error('fungsi_name') is-invalid @enderror" value="{{$fungsi->fungsi_name}}">
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
  

