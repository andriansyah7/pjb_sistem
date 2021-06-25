@extends('HalamanDepan.beranda')

@section('title','Change Password')

@section('container')
<div class="content">
    <div class ="card card-info card-outline col-5">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
        
          <form action="{{route('update-password',$user)}}" method="post" enctype="multipart/form-data">
          @method('patch')
          @csrf
          <div class="form-group col-sm-9">
            <label>Password</label>
              <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="New Password">
              @error('password') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
 
         
            <div class="form-group">
              <button type="submit" class="btn btn-success">Simpan Data</button>
            </div>
				</form>
			</div>
		</div>
        
        </div>
    </div>
  @endsection