@extends('HalamanDepan.beranda')

@section('title','Create Dokumen Kajian Engineering')

@section('container')


    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-11">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
          <form action="{{route('save-kajian')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
          <div class="col-md-9">
          <div class="form-group">
            <label>NO KAJIAN</label>
              <input type="text"  name="kajian_no" class="form-control" value="{{$kajian_no}}">
            </div>

              <div class="form-group">
                <label>Judul Kajian</label>
                <input type="text" class="form-control @error('kajian_judul') is-invalid @enderror" name="kajian_judul" value="{{old('kajian_judul')}}">
                @error('kajian_judul') <div class="invalid-feedback"> Masukkan Judul Kajian !  </div> @enderror
              </div>

              <div class="form-group">
                <label>Deskripsi Kajian</label>
                <textarea class="form-control kajian @error('kajian_analisa') is-invalid @enderror" rows="2" name="kajian_analisa"></textarea>
                @error('kajian_analisa') <div class="invalid-feedback"> Masukkan Deskripsi kajian !  </div> @enderror
              </div>

              <div class="form-group">
                    <label for="exampleInputEmail1">File Kajian</label>
                      <input type="file" class="form-control"  name="kajian_file">
                      <a style="color:red"><i>*Unggah dokumen kajian dalam format .pdf <i><a>
                      {{-- pesan error  --}}
                            @error('kajian_file')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                </div>
          </div>

          <div class="col-15">
              <div class="form-group">
                <label>Nama Pembuat Dokumen</label>
                <select class="form-control select2 @error('ecp_approval_1') is-invalid @enderror"  name="kajian_nama_staff" value="{{old('kajian_nama_staff')}}">
                <option selected value="{{auth()->user()->user_nid}}">{{auth()->user()->user_name}}</option>
                @error('user_id') <div class="invalid-feedback"> Masukkan Nama !  </div> @enderror 
                </select>
              </div> 
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

