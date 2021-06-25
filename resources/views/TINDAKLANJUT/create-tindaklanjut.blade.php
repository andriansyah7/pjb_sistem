@extends('HalamanDepan.beranda')

@section('title','Buat Tindak Lanjut ECP')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-13">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
          <form action="{{route('simpan-tindaklanjut')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
          <div class="col-md-5">
          <div class="form-group">
            <label>NO ECP</label>
              <input type="text" id="ecp_no" name="ecp_no" class="form-control" value="{{$ecp_no}}">
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
                <label>Notulis</label>
                <select class="form-control select2 @error('') is-invalid @enderror" name="tindaklanjut_notulis" value="{{old('tindaklanjut_notulis')}}">
                <option selected value="{{auth()->user()->user_nid}}">{{auth()->user()->user_name}}</option>
                @error('tindaklanjut_notulis') <div class="invalid-feedback"> Masukkan Nama !  </div> @enderror 
                </select>
              </div>
          </div>

          <div class="col-md-3">
          <div class="form-group">
                    <label for="exampleInputEmail1">File Pendukung</label>
                    <a>/disarankan file .zip</a>
                      <input type="file" class="form-control"  name="tindaklanjut_file_terkait">
                      {{-- pesan error  --}}
                            @error('ecp_file_pendukung')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                </div>
                </div>

                <div class="col-md-3">
      <div class="form-group">
      <label>Deadline Monitoring</label> 
      <input type="date" class="form-control datee"  name="updated_at">
      </div>
      </div>
          </div>

        <div class="row">
        <div class="form-group col-md-12">
        <label>Deskripsi</label>
        <textarea class="form-control @error('tindaklanjut_deskripsi') is-invalid @enderror" rows="14" name="tindaklanjut_deskripsi" value="{{old('tindaklanjut_deskripsi')}}"></textarea>
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