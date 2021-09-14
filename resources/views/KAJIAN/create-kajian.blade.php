@extends('HalamanDepan.beranda')

@section('title','Buat Kajian Engineering')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-13">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
          <form action="{{route('simpan-kajian')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
          <div class="col-md-7">
            <div class="form-group">
            <label>NO KAJIAN</label>
              <input type="text"  name="kajian_no" class="form-control" value="{{$r}}{{$kajianno}}">
            </div> 

            <div class="form-group">
              <label>Judul Kajian</label>
              <textarea  class="form-control @error('kajian_judul') is-invalid @enderror" rows="4" name="kajian_judul" value="{{old('kajian_judul')}}"></textarea>
              @error('kajian_judul') <div class="invalid-feedback"> Masukkan Judul Kajian !  </div> @enderror
            </div>

            <div class="form-group">
                <label >Deskripsi Kajian</label>
                <textarea  class="form-control @error('kajian_deskripsi') is-invalid @enderror" rows="2" name="kajian_deskripsi" value="{{old('kajian_deskripsi')}}"></textarea>
                @error('kajian_deskripsi') <div class="invalid-feedback"> Masukkan Deskripsi Kajian !  </div> @enderror
              </div>


          </div>

            <div class="col-md-5">
            <div class="form-group">
                <label for="user_nid">Nama</label>
                <select class="form-control select2 @error('kajian_spv') is-invalid @enderror"  name="kajian_spv" value="{{old('kajian_spv')}}">
                <option selected value="{{auth()->user()->user_nid}}">{{auth()->user()->user_name}}</option>
                @error('kajian_spv') <div class="invalid-feedback"> Masukkan Nama !  </div> @enderror 
                </select>
              </div>
            
              <div class="form-group">
            <label>Requester</label>
              <select class="form-control select2 @error('kajian_requester') is-invalid @enderror" name="kajian_requester" value="{{old('kajian_requester')}}">
              <option selected disabled>Pilih Requester-></option>
              @foreach($spv as $item)
                <option value="{{$item->user_nid}}">{{$item->user_name}} : {{$item->jabatan->jabatan_name}} {{$item->fungsi->fungsi_name}}</option>
              @endforeach
              </select>
              @error('kajian_requester') <div class="invalid-feedback"> {{$message}} </div> @enderror
              </div>

            <div class="form-group">
            <label>Pihak yang Terlibat</label> <a style="color:red"><i>*Bisa memilih lebih dari 1 SPV  <i><a>
              <select class="form control select2" multiple data-live-search="true"  name="kajian_pihak_terlibat[]" value="{{old('kajian_pihak_terlibat')}}">
              @foreach($spv as $item)
                <option value="{{$item->user_name}}">{{$item->user_name}} : {{$item->jabatan->jabatan_name}} {{$item->fungsi->fungsi_name}}</option>
              @endforeach
              </select>
              @error('kajian_pihak_terlibat') <div class="invalid-feedback"> {{$message}} </div> @enderror
          </div>


          <div class="form-group">
                    <label for="exampleInputEmail1">Sumber Informasi</label>
                      <input type="file" class="form-control"  name="kajian_sumber_informasi">
                      <a style="color:red"><i>*Berupa Screenshoot OA/Upload Dokumen Terkait  <i><a>
                      {{-- pesan error  --}}
                            @error('kajian_sumber_informasi')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                </div>

                <div class="form-group">
                <label for="user_nid">Disposisi STAFF SO</label>
                <select class="form-control select2 @error('kajian_disposisi_staff_so') is-invalid @enderror"  name="kajian_disposisi_staff_so" value="{{old('kajian_disposisi_staff_so')}}">
                <option selected disabled>Pilih Staff SO-></option>
                @foreach($disposisistaffso as $item)
                <option value="{{$item->user_nid}}">{{$item->user_name}} : {{$item->jabatan->jabatan_name}} {{$item->fungsi->fungsi_name}}</option>
                @endforeach
                @error('kajian_disposisi_staff_so') <div class="invalid-feedback"> Masukkan Nama !  </div> @enderror 
                </select>
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

