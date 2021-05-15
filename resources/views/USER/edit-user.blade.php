@extends('HalamanDepan.beranda')

@section('title','Edit User')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-8">
        <div class ="card-header">
          <h5>Edit Data</h5>
        </div>
        <div class="card-body">
          <form action="/update-user/{{$user->user_nid}}" method="post">
          @method('patch')
          @csrf
          <div class="row">
          <div class="col-md-6">
            <div class="form-group col-sm-7">
            <label>NID</label>
              <input type="text" id="user_nid" name="user_nid" class="form-control @error('user_nid') is-invalid @enderror" placeholder="Masukkan NID" value="{{$user->user_nid}}">
              @error('user_nid') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-7">
            <label>Jabatan</label>
              <select class="form-control select2 @error('jabatan_id') is-invalid @enderror" id="jabatan_id" name="jabatan_id">
                <option selected disabled></option>
              @foreach($jabatan as $jbt)
                <option value="{{$jbt->jabatan_id}}" {{($user->jabatan_id == $jbt ->jabatan_id) ? 'selected':''}}>{{$jbt->jabatan_name}}</option>
               @endforeach
              </select>
              @error('jabatan_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
           
            <div class="form-group col-sm-7">
            <label>Bidang Kerja</label>
              <select class="form-control select2 @error('unit_id') is-invalid @enderror" id="unit_id" name="unit_id">
                <option selected disabled></option>
              @foreach($unit as $unt)
                <option value="{{$unt->unit_id}}" {{($user->unit_id == $unt ->unit_id) ? 'selected':''}}>{{$unt->unit_name}}</option>
               @endforeach
              </select>
              @error('unit_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-7">
            <label>Email</label>
              <input type="text" id="user_email" name="user_email" class="form-control @error('user_email') is-invalid @enderror" placeholder="Masukkan Email" value="{{$user->user_email}}">
              @error('user_email') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group col-sm-8 ">
            <label>Nama</label>
              <input type="text" id="user_name" name="user_name" class="form-control @error('user_name') is-invalid @enderror" placeholder="Masukkan Nama" value="{{$user->user_name}}">
              @error('user_name') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
          
           
            <div class="form-group col-sm-7">
            <label>Role</label>
              <select class="form-control select2 @error('role_id') is-invalid @enderror" id="role_id" name="role_id">
            
                <option selected disabled></option>
              @foreach($roles as $rl)
                <option value="{{$rl->role_id}}" {{($user->role_id == $rl ->role_id) ? 'selected':''}}>{{$rl->role_name}}</option>
              @endforeach
              </select>
              @error('role_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-7">
            <label>Fungsi</label>
              <select class="form-control select2 @error('role_id') is-invalid @enderror"  name="fungsi_id">
            
                <option selected disabled></option>
              @foreach($fungsi as $rl)
                <option value="{{$rl->fungsi_id}}" {{($user->fungsi_id == $rl ->fungsi_id) ? 'selected':''}}>{{$rl->fungsi_name}}</option>
              @endforeach
              </select>
              @error('fungsi_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-7">
            <label>Password</label>
              <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Buat Password">
              @error('password') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
            </div>


            <div class="form-group">
              <button type="submit" class="btn btn-success">Simpan Data</button>
            </div>
        </div>
    <!-- /.content -->  
      </div>
    </div>
  @endsection
  <!-- /.content-wrapper -->

