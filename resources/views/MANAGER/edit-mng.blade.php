@extends('HalamanDepan.beranda')

@section('title','Edit Approval ECP')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-9">
        <div class ="card-header">
          <h5>Edit Data</h5>
        </div>
        <div class="card-body">
          <form action="/update-manager/{{$manager_approval->manager_approval_id}}" method="post" enctype="multipart/form-data">
          @method('patch')
          @csrf
          <div class="row">
          <div class="col-md-9">
              <div class="form-group">
                <label>No ECP</label>
                <input class="form-control " name="ecp_no" value="{{$manager_approval->ecp_no}}">
              </div>
          

              <div class="form-group">
                <label>Alasan</label>
                <input class="form-control @error('spv_approval_alasan') is-invalid @enderror" rows="2" name="manager_approval_alasan" value="{{$manager_approval->manager_approval_alasan}}"></textarea>
                @error('manager_approval_alasan') <div class="invalid-feedback"> Masukkan Alasan !  </div> @enderror
              </div>
          </div>

          <div class="col-md-3">
              <div class="form-group">
                <label for="user_nid">Nama Supervisor</label>
                <select class="form-control select2 @error('ecp_approval_1') is-invalid @enderror" id="user_nid" name="user_nid" value="{{old('user_nid')}}">
                <option selected value="{{auth()->user()->user_nid}}">{{auth()->user()->user_name}}</option>
                @error('user_id') <div class="invalid-feedback"> Masukkan Nama !  </div> @enderror 
                </select>
              </div>
              
                <div class="form-group col-sm-8">
            <label>Status ECP </label>
              <select class="form-control select2 @error('status_ecp_id') is-invalid @enderror" id="status_ecp_id" name="status_ecp_id" value="{{old('status_ecp_id')}}">
                <option selected disabled>Approval ECP</option>
              @foreach($status as $item)

                <option value="{{$item->status_ecp_id}}" {{($manager_approval->status_ecp_id == $item ->status_ecp_id) ? 'selected':''}}>{{$item->status_ecp_name}}</option>
              @endforeach
              </select>
              @error('status_ecp_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
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

