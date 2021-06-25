@extends('HalamanDepan.beranda')

@section('title','Edit Urgensi ECP')

@section('container')
<div class="content">
    <div class ="card card-info card-outline col-5">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
        @php
          $ecp_no = str_replace('/','-',$ecp->ecp_no);
                    @endphp
          <form action="{{route('update-urgensi',$ecp_no)}}" method="post" enctype="multipart/form-data">
          @method('patch')
          @csrf
              <div class="form-group ">
            <label>Urgensi</label>
            <select class="form-control select2 @error('urgensi_id') is-invalid @enderror"  name="urgensi_id" value="{{old('urgensi_id')}}">
                <option selected disabled>->Pilih Urgensi<-</option>
              @foreach($urgensi as $data)
                <option value="{{$data->urgensi_id}}" {{($ecp->urgensi_id == $data -> urgensi_id) ? 'selected':''}}>{{$data->urgensi_name}}</option>
              @endforeach
              </select>
              @error('urgensi_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
          </div>
 
          </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success">Simpan Data</button>
            </div>
				</form>
			</div>
		</div>
        
        </div>
    </div>
  @endsection