@extends('HalamanDepan.beranda')

@section('title','Edit Tindak Lanjut ECP')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-13">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
          <form action="/update-tindaklanjut/{{$tindaklanjut->tindaklanjut_id}}" method="post" enctype="multipart/form-data">
          @method('patch')
          @csrf
          <div class="row">
          <div class="col-md-5">
          <div class="form-group">
            <label>No ECP</label>
              <select class="form-control select2 @error('ecp_no') is-invalid @enderror" id="ecp_no" name="ecp_no" value="{{$tindaklanjut->ecp_no}}">
                <option selected disabled>Pilih ECP</option>
              @foreach($ecp as $item) 
              
                <option value="{{$item->ecp_no}}" {{($tindaklanjut->ecp_no== $item ->ecp_no) ? 'selected':''}}>{{$item->ecp_no}} : {{$item->ecp_deskripsi}} -> Diajukan Oleh {{$item->user->user_name}}</option>
              @endforeach
              </select>
              @error('ecp_no') <div class="invalid-feedback"> {{$message}} </div> @enderror
              </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
                <label>Notulis</label>
                <select class="form-control select2 @error('') is-invalid @enderror" name="tindaklanjut_notulis" value="{{$tindaklanjut->tindaklanjut_notulis}}">
                <option selected value="{{auth()->user()->user_nid}}">{{auth()->user()->user_name}}</option>
                @error('tindaklanjut_notulis') <div class="invalid-feedback"> Masukkan Nama !  </div> @enderror 
                </select>
              </div>
          </div>
          </div>

        <div class="row">
        <div class="form-group col-md-12">
        <label>Deskripsi</label>
        <input class="form-control @error('tindaklanjut_deskripsi') is-invalid @enderror" rows="14" name="tindaklanjut_deskripsi" value="{{$tindaklanjut->tindaklanjut_deskripsi}}"></textarea>
                    @error('tindaklanjut_deskripsi') <div class="invalid-feedback"> Masukkan Tindaklanjut Deskripsi !  </div> @enderror
        </div>
        </div>

        <div class="row">
      <div class="form-group">
      <button type="submit" class="btn btn-success">Simpan Data</button>
      </div>
    </div>

          </div>
    </div>
    </div>
    @endsection