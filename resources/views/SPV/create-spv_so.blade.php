@extends('HalamanDepan.beranda')

@section('title','SPV SO Review ECP')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-11">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
          <form action="{{route('simpan-spv_so')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
          <div class="col-md-7">
          <div class="form-group">
            <label>NO ECP</label>
              <input type="text" id="ecp_no" name="ecp_no" class="form-control" value="{{$ecp_no}}">
            </div>

              <div class="form-group">
                <label>Alasan</label>
                <textarea class="form-control @error('spv_so_review') is-invalid @enderror" rows="2" name="spv_so_review" value="{{old('spv_so_review')}}"></textarea>
                @error('spv_so_review') <div class="invalid-feedback"> Masukkan Alasan !  </div> @enderror
              </div>
          </div>

          <div class="col-md-5  ">
              <div class="form-group">
                <label for="user_nid">Nama SPV SO</label>
                <select class="form-control select2 @error('user_nid') is-invalid @enderror" id="user_nid" name="user_nid" value="{{old('user_nid')}}">
                <option selected value="{{auth()->user()->user_nid}}">{{auth()->user()->user_name}}</option>
                @error('user_id') <div class="invalid-feedback"> Masukkan Nama !  </div> @enderror 
                </select>
              </div>
              
              <div class="form-group">
                <label for="user_nid">Disposisi STAFF SO</label>
                <select class="form-control select2 @error('staff_so') is-invalid @enderror"  name="staff_so" value="{{old('staff_so')}}">
                @foreach($staff as $item)
                <option selected value="{{$item->user_nid}}">{{$item->user_name}} : {{$item->jabatan->jabatan_name}} {{$item->fungsi->fungsi_name}}</option>
@endforeach
                @error('staff_so') <div class="invalid-feedback"> Masukkan Nama !  </div> @enderror 
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

