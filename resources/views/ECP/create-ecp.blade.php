@extends('HalamanDepan.beranda')

@section('title','Buat ECP')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-13">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
          <form action="{{route('simpan-ecp')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
          <div class="col-md-7">
            <div class="form-group">
            <label>NO ECP</label>
              <input type="text" id="ecp_no" name="ecp_no" class="form-control" value="{{$r}}{{$ecpno}}">
            </div> 

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea id="ecp_deskripsi" class="form-control @error('ecp_deskripsi') is-invalid @enderror" rows="2" name="ecp_deskripsi" value="{{old('ecp_deskripsi')}}"></textarea>
                @error('ecp_deskripsi') <div class="invalid-feedback"> Masukkan Deskripsi !  </div> @enderror
              </div>

              <div class="form-group">
                <label for="ecp_desktambahan">Deskripsi Tambahan</label>
                <textarea id="ecp_desktambahan" class="form-control @error('ecp_desktambahan') is-invalid @enderror" rows="4" name="ecp_desktambahan" value="{{old('ecp_desktambahan')}}"></textarea>
                @error('desktambahan') <div class="invalid-feedback"> Masukkan Deskripsi Tambahan !  </div> @enderror
              </div>

              <div class="form-group">
                <label for="ecp_alasan">Alasan</label>
                <textarea id="ecp_alasan" class="form-control @error('ecp_alasan') is-invalid @enderror" rows="2" name="ecp_alasan" value="{{old('ecp_alasan')}}"></textarea>
                @error('ecp_alasan') <div class="invalid-feedback"> Masukkan Alasan !  </div> @enderror
              </div>
          </div>

            <div class="col-md-5">
            <div class="form-group">
                <label for="user_nid">Nama</label>
                <select class="form-control select2 @error('ecp_approval_1') is-invalid @enderror" id="user_nid" name="user_nid" value="{{old('user_nid')}}">
                <option selected value="{{auth()->user()->user_nid}}">{{auth()->user()->user_name}}</option>
                @error('user_id') <div class="invalid-feedback"> Masukkan Nama !  </div> @enderror 
                </select>
              </div>
            
              <div class="form-group">
            <label>Approval 1</label>
              <select class="form-control select2 @error('ecp_approval_1') is-invalid @enderror" id="ecp_approval_1" name="ecp_approval_1" value="{{old('ecp_approval_1')}}">
                <option selected disabled><-Pilih Approval 1-></option>
              @foreach($approval1 as $aprvl1)
                <option value="{{$aprvl1->user_nid}}">{{$aprvl1->user_name}} : {{$aprvl1->jabatan->jabatan_name}} {{$aprvl1->unit->unit_name}}</option>
              @endforeach
              </select>
              @error('ecp_approval_1') <div class="invalid-feedback"> {{$message}} </div> @enderror
              </div>

            <div class="form-group">
            <label>Approval 2</label>
              <select class="form-control select2 @error('ecp_approval_2') is-invalid @enderror" id="ecp_approval_2" name="ecp_approval_2" value="{{old('ecp_approval_2')}}">
                <option selected disabled><-Pilih Approval 2-></option>
              @foreach($approval2 as $aprvl2)
                <option value="{{$aprvl2->user_nid}}">{{$aprvl2->user_name}} : {{$aprvl2->jabatan->jabatan_name}} {{$aprvl2->unit->unit_name}}</option>
              @endforeach
              </select>
              @error('ecp_approval_2') <div class="invalid-feedback"> {{$message}} </div> @enderror
          </div>


          <div class="form-group">
                    <label for="exampleInputEmail1">File Pendukung</label>
                      <input type="file" class="form-control" id="ecp_file_pendukung" name="ecp_file_pendukung">
                      {{-- pesan error  --}}
                            @error('ecp_file_pendukung')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                </div>
            </div>
        </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success">Simpan Data</button>
            </div>

            


    <!-- /.content -->  
      </div>
    </div>
  @endsection
  <!-- /.content-wrapper -->

