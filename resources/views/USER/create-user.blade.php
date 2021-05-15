@extends('HalamanDepan.beranda')

@section('title','Tambah User')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-12">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
          <form action="{{route('simpan-user')}}" method="post">
          @csrf
          <div class="row">
          <div class="col-md-6">
            <div class="form-group col-sm-9">
            <label>NID</label>
              <input type="text" autocomplete="off" name="user_nid" class="form-control @error('user_nid') is-invalid @enderror" placeholder="Masukkan NID" value="{{old('user_nid')}}">
              @error('user_nid') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-9">
            <label>Jabatan</label>
              <select class="form-control select2 @error('jabatan_id') is-invalid @enderror" id="jabatan_id" name="jabatan_id" value="{{old('jabatan_id')}}">
                <option selected disabled><-Pilih Jabatan-></option>
              @foreach($jabatan as $jbt)
                <option value="{{$jbt->jabatan_id}}">{{$jbt->jabatan_name}}</option>
               @endforeach
              </select>
              @error('jabatan_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-9">
            <label>Bidang</label>
              <select class="form-control select2 @error('unit_id') is-invalid @enderror"  name="unit_id" value="{{old('unit_id')}}">
                <option selected disabled><-Pilih Bidang-></option>
              @foreach($unit as $unt)
                <option value="{{$unt->unit_id}}">{{$unt->unit_name}}</option>
               @endforeach
              </select>
              @error('unit_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-9">
            <label>Email</label>
              <input type="text" autocomplete="off" name="user_email" class="form-control @error('user_email') is-invalid @enderror" placeholder="Masukkan Email" value="{{old('user_email')}}">
              @error('user_email') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group col-sm-9 ">
            <label>Nama</label>
              <input type="text" autocomplete="off" name="user_name" class="form-control @error('user_name') is-invalid @enderror" placeholder="Masukkan Nama" value="{{old('user_name')}}">
              @error('user_name') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
          
           
            <div class="form-group col-sm-9">
            <label>Role</label>
              <select class="form-control select2 @error('role_id') is-invalid @enderror" id="role_id" name="role_id" style="width: 100%;" value="{{old('role_id')}}">
                <option selected disabled><-Pilih Role-></option>
              @foreach($roles as $rl)
                <option value="{{$rl->role_id}}">{{$rl->role_name}}</option>
              @endforeach
              </select>
              @error('role_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>
           
            <div class="form-group col-sm-9">
            <label>Fungsi</label>
              <select class="form-control select2 @error('fungsi_id') is-invalid @enderror" name="fungsi_id" style="width: 100%;" value="{{old('fungsi_id')}}">
                <option selected disabled><-Pilih Fungsi-></option>
              @foreach($fungsi as $item)
                <option value="{{$item->fungsi_id}}">{{$item->fungsi_name}}->{{$item->unit->unit_name}}</option>
              @endforeach
              </select>
              @error('fungsi_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
            </div>

            <div class="form-group col-sm-9">
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
  
<script src="{{asset('adminLTE')}}/plugins/select2/js/select2.full.min.js"></script>
  <script type="text/javascript">
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
    });
  });

  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });
    });
</script>

