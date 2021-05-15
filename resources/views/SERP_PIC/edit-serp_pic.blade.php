@extends('HalamanDepan.beranda')

@section('title','Edit Data PIC')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-8">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
          <form action="/update-serp_pic/{{$serp_pic->serp_pic_id}}" method="post">
          @method('patch')
          @csrf
          <div class="row">
            <div class="form-group col-sm-7">
            <label>ID PIC</label>
              <input type="text"  name="serp_pic_id" class="form-control @error('serp_pic_id') is-invalid @enderror" value="{{$serp_pic->serp_pic_id}}">
              @error('serp_pic_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            <div class="form-group col-sm-7">
            <label>PIC</label>
              <input type="text"  name="serp_pic_name" class="form-control @error('serp_pic_name') is-invalid @enderror" value="{{$serp_pic->serp_pic_name}}">
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
  

