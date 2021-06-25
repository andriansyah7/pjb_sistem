@extends('HalamanDepan.beranda')

@section('title','Tambah Data Main Equipment')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-13">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
          <form action="{{route('simpan-serp_main')}}" method="post">
          @csrf
          <div class="row">

            <div class="form-group col-sm-7">
            <label>KKS</label>
              <input type="text" name="serp_main_equipment_id" class="form-control @error('serp_main_equipment_id') is-invalid @enderror" placeholder="Masukkan KKS">
              @error('serp_main_equipment_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            </div>

            <div class="row">
            <div class="form-group col-sm-7">
            <label>Nama Equipment</label>
              <input type="text" name="serp_main_equipment_name" class="form-control @error('serp_main_equipment_name') is-invalid @enderror" placeholder="Masukkan Nama Main Equipment">
              @error('serp_main_equipment_name') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            </div>

            <div class="row">
            <div class="form-group col-sm-5">
            <label>System</label>
              <select class="form-control select2 @error('serp_system_id') is-invalid @enderror"  name="serp_system_id" value="{{old('serp_system_id')}}">
                <option selected disabled>Pilih System-></option>
              @foreach($serp_system as $data)
                <option value="{{$data->serp_system_id}}">{{$data->unit->serp_unit_name}} - {{$data->serp_system_name}}</option>
               @endforeach
              </select>
              @error('serp_system_id') <div class="invalid-feed back"> {{$message}} </div> @enderror
            </div>
            </div>

            <div class="row">
    
            <div class="form-group col-sm-1">
            <label>PT</label>
              <input type="text" name="PT" class="form-control @error('PT') is-invalid @enderror" placeholder="Nilai PT">
              @error('PT') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-1">
            <label>OC</label>
              <input type="text" name="OC" class="form-control @error('OC') is-invalid @enderror" placeholder="Nilai OC">
              @error('OC') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-1">
            <label>PQ</label>
              <input type="text" name="PQ" class="form-control @error('PQ') is-invalid @enderror" placeholder="Nilai PQ">
              @error('PQ') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-1">
            <label>SF</label>
              <input type="text" name="SF" class="form-control @error('SF') is-invalid @enderror" placeholder="Nilai SF">
              @error('SF') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-1">
            <label>RT</label>
              <input type="text" name="RT" class="form-control @error('RT') is-invalid @enderror" placeholder="Nilai RT">
              @error('RT') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            
            <div class="form-group col-sm-1">
            <label>RC</label>
              <input type="text" name="RC" class="form-control @error('RC') is-invalid @enderror" placeholder="Nilai RC">
              @error('RC') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-1">
            <label>PE</label>
              <input type="text" name="PE" class="form-control @error('PE') is-invalid @enderror" placeholder="Nilai PE">
              @error('PE') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>


            <div class="form-group col-sm-1">
            <label>OCR</label>
              <input type="text" name="OCR" class="form-control @error('OCR') is-invalid @enderror" placeholder="Nilai OCR">
              @error('OCR') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-1">
            <label>AFPF</label>
              <input type="text" name="AFPF" class="form-control @error('OCR') is-invalid @enderror" placeholder="Nilai AFPF">
              @error('AFPF') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            </div>

            <div class="row">
            <div class="form-group col-sm-4">
            <label>PIC</label>
              <select class="form-control select2 @error('serp_pic_ id') is-invalid @enderror"  name="serp_pic_id" value="{{old('serp_pic_id')}}">
                <option selected disabled>Pilih Pic-></option>
              @foreach($serp_pic as $data)
                <option value="{{$data->serp_pic_id}}">{{$data->serp_pic_name}}</option>
               @endforeach
              </select>
              @error('serp_pic_id') <div class="invalid-feed back"> {{$message}} </div> @enderror
            </div>
            </div>

            <div class="row">
            <div class="form-group col-sm-7">
            <label>Keterangan</label>
              <input type="text" name="serp_main_equipment_keterangan" class="form-control @error('serp_main_equipment_keterangan') is-invalid @enderror" placeholder="Masukkan Keterangan Main Equipment">
              @error('serp_main_equipment_keterangan') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            </div>
            
    
            

            <div class="row">
            <div class="form-group">
              <button type="submit" class="btn btn-success">Simpan Data</button>
            </div>
        </div>
    <!-- /.content -->  
      </div>
    </div>
  @endsection
  

