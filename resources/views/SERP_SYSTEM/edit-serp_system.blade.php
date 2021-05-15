@extends('HalamanDepan.beranda')

@section('title','Edit Data System')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-8">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
          <form action="/update-serp_system/{{$serp_system->serp_system_id}}" method="post">
          @method('patch')
          @csrf
          <div class="row">

            <div class="form-group col-sm-7">
            <label>Unit </label>
              <select class="form-control select2 @error('serp_unit_id') is-invalid @enderror"  name="serp_unit_id" value="{{old('serp_unit_id')}}">
                <option selected disabled>Pilih Unit-></option>
              @foreach($serp_unit as $data)
                <option value="{{$data->serp_unit_id}}" {{($serp_system->serp_unit_id == $data->serp_unit_id) ? 'selected':''}}>{{$data->serp_unit_name}}</option>
               @endforeach
              </select>
              @error('serp_unit_id') <div class="invalid-feed back"> {{$message}} </div> @enderror
            </div>
            
            <div class="form-group col-sm-7">
            <label>System</label>
              <input type="text" name="serp_system_name" class="form-control @error('serp_system_name') is-invalid @enderror" value="{{$serp_system->serp_system_name}}">
              @error('serp_system_name') <div class="invalid-feedback"> {{$message}} </div> @enderror
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
  

