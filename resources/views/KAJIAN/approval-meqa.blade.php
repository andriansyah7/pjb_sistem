@extends('HalamanDepan.beranda')

@section('title','Approval Kajian Engineering')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-9">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
          <form action="{{route('simpan-approvalmeqa')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
          <div class="col-md-9">
          <div class="form-group">
            <label>NO KAJIAN ENGINEERING</label>
              <input type="text" name="kajian_no" class="form-control" value="{{$kajian_no}}">
            </div>
  

              <div class="form-group">
                <label>Alasan</label>
                <textarea class="form-control @error('meqa_approval_alasan') is-invalid @enderror" rows="2" name="meqa_approval_alasan" value="{{old('meqa_approval_alasan')}}"></textarea>
                @error('meqa_approval_alasan') <div class="invalid-feedback"> Masukkan Alasan !  </div> @enderror
              </div>
          </div>

          <div class="col-md-3">
              <div class="form-group">
                <label for="user_nid">Nama Manager EQA</label>
                <select class="form-control select2 @error('ecp_approval_1') is-invalid @enderror" name="user_nid" value="{{old('user_nid')}}">
                <option selected value="{{auth()->user()->user_nid}}">{{auth()->user()->user_name}}</option>
                @error('user_id') <div class="invalid-feedback"> Masukkan Nama !  </div> @enderror 
                </select>
              </div>
              
                <div class="form-group">
            <label>Status Approval </label>
              <select class="form-control select2 @error('status_kajian_id') is-invalid @enderror" name="status_kajian_id" value="{{old('status_kajian_id')}}">
                <option selected disabled><-Status Approval-></option>
              @foreach($status as $item)
                <option value="{{$item->status_kajian_id}}">{{$item->status_kajian_name}}</option>
              @endforeach
              </select>
              @error('status_kajian_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
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

