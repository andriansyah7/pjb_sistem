@extends('HalamanDepan.beranda')

@section('title','Edit Data Main Equipment')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-13">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>`
        <div class="card-body">
          <form action="/update-serp_main/{{$serp_main_equipment->serp_main_equipment_id}}" method="post">
          @csrf
          @method('patch')
          <div class="row">

            <div class="form-group col-sm-7">
            <label>KKS</label>
              <input type="text" name="serp_main_equipment_id" class="form-control @error('serp_main_equipment_id') is-invalid @enderror" value="{{$serp_main_equipment->serp_main_equipment_id}}">
              @error('serp_main_equipment_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            </div>

            <div class="row">
            <div class="form-group col-sm-7">
            <label>Nama Equipment</label>
              <input type="text" name="serp_main_equipment_name" class="form-control @error('serp_main_equipment_name') is-invalid @enderror" value="{{$serp_main_equipment->serp_main_equipment_name}}" >
              @error('serp_main_equipment_name') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            </div>

            <div class="row">
            <div class="form-group col-sm-5">
            <label>System</label>
              <select class="form-control select2 @error('serp_system_id') is-invalid @enderror"  name="serp_system_id">
                <option selected disabled>Pilih System-></option>
              @foreach($serp_system as $data)
              <option value="{{$data->serp_system_id}}" {{($serp_main_equipment->serp_system_id == $data->serp_system_id) ? 'selected':''}}>{{$data->unit->serp_unit_name}} - {{$data->serp_system_name}}</option>
               @endforeach
              </select>
              @error('serp_system_id') <div class="invalid-feed back"> {{$message}} </div> @enderror
            </div>
            </div>

            <div class="row">
    
            <div class="form-group col-sm-1">
            <label>PT</label>
              <input type="text" name="PT" class="form-control @error('PT') is-invalid @enderror" value="{{$serp_main_equipment->PT}}">
              @error('PT') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-1">
            <label>OC</label>
              <input type="text" name="OC" class="form-control @error('OC') is-invalid @enderror" value="{{$serp_main_equipment->OC}}">
              @error('OC') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-1">
            <label>PQ</label>
              <input type="text" name="PQ" class="form-control @error('PQ') is-invalid @enderror" value="{{$serp_main_equipment->PQ}}">
              @error('PQ') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-1">
            <label>SF</label>
              <input type="text" name="SF" class="form-control @error('SF') is-invalid @enderror" value="{{$serp_main_equipment->SF}}">
              @error('SF') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-1">
            <label>RT</label>
              <input type="text" name="RT" class="form-control @error('RT') is-invalid @enderror" value="{{$serp_main_equipment->RT}}">
              @error('RT') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-1">
            <label>RC</label>
              <input type="text" name="RC" class="form-control @error('RC') is-invalid @enderror" value="{{$serp_main_equipment->RC}}">
              @error('RC') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-1">
            <label>PE</label>
              <input type="text" name="PE" class="form-control @error('PE') is-invalid @enderror" value="{{$serp_main_equipment->PE}}">
              @error('PE') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>


            <div class="form-group col-sm-1">
            <label>OCR</label>
              <input type="text" name="OCR" class="form-control @error('OCR') is-invalid @enderror" value="{{$serp_main_equipment->OCR}}">
              @error('OCR') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-1">
            <label>AFPF</label>
              <input type="text" name="AFPF" class="form-control @error('OCR') is-invalid @enderror" value="{{$serp_main_equipment->AFPF}}">
              @error('AFPF') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            </div>

            <div class="row">
            <div class="form-group col-sm-4">
            <label>PIC</label>
              <select class="form-control select2 @error('serp_pic_ id') is-invalid @enderror"  name="serp_pic_id" >
                <option selected disabled>Pilih Pic-></option>
              @foreach($serp_pic as $data)
              <option value="{{$data->serp_pic_id}}" {{($serp_main_equipment->serp_pic_id == $data->serp_pic_id) ? 'selected':''}}>{{$data->serp_pic_name}}</option>
               @endforeach
              </select>
              @error('serp_pic_id') <div class="invalid-feed back"> {{$message}} </div> @enderror
            </div>
            </div>

            <div class="row">
            <div class="form-group col-sm-7">
            <label>Keterangan</label>
              <input type="text" name="serp_main_equipment_keterangan" class="form-control @error('serp_main_equipment_keterangan') is-invalid @enderror" value="{{$serp_main_equipment->serp_main_equipment_keterangan}}">
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
  

