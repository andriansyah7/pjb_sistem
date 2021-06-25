@extends('HalamanDepan.beranda')

@section('title','Review ECP')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-9">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
          <form action="{{route('simpan-review')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
          <div class="col-md-9">
          <div class="form-group">
            <label>NO ECP</label>
              <input type="text" id="ecp_no" name="ecp_no" class="form-control" value="{{$ecp_no}}">
            </div>

              <div>
                <label>Review</label>
                <textarea class="form-control @error('ecm_review_alasan') is-invalid @enderror" rows="2" name="ecm_review_alasan" value="{{old('manager_approval_alasan')}}"></textarea>
                @error('ecm_review_alasan') <div class="invalid-feedback"> Masukkan Alasan !  </div> @enderror
              </div>
          </div>

          <div class="col-md-3">
              <div class="form-group">
                <label for="user_nid">Nama Reviewer</label>
                <select class="form-control select2 @error('ecp_approval_1') is-invalid @enderror" id="user_nid" name="user_nid" value="{{old('user_nid')}}">
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

