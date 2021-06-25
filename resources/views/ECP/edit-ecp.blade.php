@extends('HalamanDepan.beranda')

@section('title','Edit ECP')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-11">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
        @php
          $ecp_no = str_replace('/','-',$ecp->ecp_no);
                    @endphp
          <form action="{{route('update-ecp',$ecp_no)}}" method="post" enctype="multipart/form-data">
          @method('patch')
          @csrf
          <div class="row">
          <div class="col-md-7">
            <div class="form-group">
            <label>NO ECP</label>
              <input type="text" id="ecp_no" name="ecp_no" class="form-control" value="{{$ecp->ecp_no}}">
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" id="ecp_deskripsi" class="form-control @error('ecp_deskripsi') is-invalid @enderror" rows="2" name="ecp_deskripsi" value="{{$ecp->ecp_deskripsi}}">
                @error('ecp_deskripsi') <div class="invalid-feedback"> Masukkan Deskripsi !  </div> @enderror
              </div>

              <div class="form-group">
                <label for="ecp_desktambahan">Deskripsi Tambahan</label>
                <input type="text" id="ecp_desktambahan" class="form-control @error('ecp_desktambahan') is-invalid @enderror" rows="4" name="ecp_desktambahan" value="{{$ecp->ecp_desktambahan}}">
                @error('desktambahan') <div class="invalid-feedback"> Masukkan Deskripsi Tambahan !  </div> @enderror
              </div>

              <div class="form-group">
                <label for="ecp_alasan">Alasan</label>
                <input type="text" id="ecp_alasan" class="form-control @error('ecp_alasan') is-invalid @enderror" rows="2" name="ecp_alasan" value="{{$ecp->ecp_alasan}}">
                @error('ecp_alasan') <div class="invalid-feedback"> Masukkan Alasan !  </div> @enderror
              </div>
          </div>

            <div class="col-md-5">
            <div class="form-group">
                <label for="user_nid">Nama</label>
                <select class="form-control select2 @error('ecp_approval_1') is-invalid @enderror" id="user_nid" name="user_nid" value="{{old('user_nid')}}">
                <option selected value="{{auth()->user()->user_nid}}">{{auth()->user()->user_name}}</option>
                @error('user_id') <div class="invalid-feedback"> Masukkan Nama !  </div> @enderror 
                </select>
              </div>
            
              <div class="form-group">
            <label>Approval 1</label>
              <select class="form-control select2 @error('ecp_approval_1') is-invalid @enderror" id="ecp_approval_1" name="ecp_approval_1" value="{{old('ecp_approval_1')}}">
                <option selected disabled>Pilih Approval 1</option>
              @foreach($approval1 as $aprvl1)
             <option value="{{$aprvl1->user_nid}}" {{($ecp->ecp_approval_1 == $aprvl1 -> user_nid) ? 'selected':''}}>{{$aprvl1->user_name}} : {{$aprvl1->jabatan->jabatan_name}} {{$aprvl1->unit->unit_name}}</option>
    
              @endforeach
              </select>
              @error('ecp_approval_1') <div class="invalid-feedback"> {{$message}} </div> @enderror
              </div>

            <div class="form-group">
            <label>Approval 2</label>
              <select class="form-control select2 @error('ecp_approval_2') is-invalid @enderror" id="ecp_approval_2" name="ecp_approval_2" value="{{old('ecp_approval_2')}}">
                <option selected disabled>Pilih Approval 2</option>
              @foreach($approval2 as $aprvl2)
                <option value="{{$aprvl2->user_nid}}" {{($ecp->ecp_approval_2 == $aprvl2 -> user_nid) ? 'selected':''}}>{{$aprvl2->user_name}} : {{$aprvl2->jabatan->jabatan_name}} {{$aprvl2->unit->unit_name}}</option>

              @endforeach
              </select>
              @error('ecp_approval_2') <div class="invalid-feedback"> {{$message}} </div> @enderror
          </div>


          <div class="form-group">
                    <label for="exampleInputEmail1">File Pendukung</label>
                      <input type="file" class="form-control" id="ecp_file_pendukung" name="ecp_file_pendukung">
                      {{-- pesan error  --}}
                            @error('ecp_file_pendukung')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                </div>

            <div class="form-group">
            <label>Urgensi</label>
            <select class="form-control select2 @error('urgensi_id') is-invalid @enderror"  name="urgensi_id" value="{{old('urgensi_id')}}">
                <option selected disabled>->Pilih Urgensi<-</option>
              @foreach($urgensi as $data)
                <option value="{{$data->urgensi_id}}" {{($ecp->urgensi_id== $data->urgensi_id) ? 'selected':''}}>{{$data->urgensi_name}}</option>
              @endforeach
              </select>
              @error('urgensi_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
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

