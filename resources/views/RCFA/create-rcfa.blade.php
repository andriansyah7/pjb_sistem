@extends('HalamanDepan.beranda')

@section('title','Buat Dokumen RCFA')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-13">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
          <form action="{{route('simpan-rcfa')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
          <div class="col-md-7">
            <div class="form-group">
            <label>NO RCFA</label>
              <input type="text"  name="rcfa_no" class="form-control" value="{{$r}}{{$rcfano}}">
            </div> 

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea  class="form-control @error('rcfa_deskripsi') is-invalid @enderror" rows="2" name="rcfa_deskripsi" value="{{old('rcfa_deskripsi')}}"></textarea>
                @error('rcfa_deskripsi') <div class="invalid-feedback"> Masukkan Deskripsi !  </div> @enderror
              </div>

         
          </div>

            <div class="col-md-5">
            <div class="form-group">
                <label for="user_nid">Nama Pembuat</label>
                <select class="form-control select2 @error('ecp_approval_1') is-invalid @enderror" id="user_nid" name="user_nid" value="{{old('user_nid')}}">
                <option selected value="{{auth()->user()->user_nid}}">{{auth()->user()->user_name}}</option>
                @error('user_id') <div class="invalid-feedback"> Masukkan Nama !  </div> @enderror 
                </select>
              </div>
            
          <div class="form-group">
                    <label for="exampleInputEmail1">File Pendukung</label>
                      <input type="file" class="form-control"  name="rcfa_file_pendukung">
                      <a style="color:red"><i>*Harap Mencantumkan Data Pendukung dalam satu file .zip/.rar <i><a>
                      {{-- pesan error  --}}
                            @error('rcfa_file_pendukung')
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

