@extends('HalamanDepan.beranda')

@section('title','Edit Notulen ECP')

@section('container')
    <!-- Main content -->
    <div class="content">
    <div class ="card card-info card-outline col-13">
        <div class ="card-header">
          <h5>Input Data</h5>
        </div>
        <div class="card-body">
          <form action="/update-notulen/{{$notulen->notulen_id}}" method="post" enctype="multipart/form-data">
          @method('patch')
          @csrf
          <div class="row">
          <div class="col-md-5">
          <div class="form-group">
            <label>No ECP</label>
              <input type="text" name="ecp_no" class="form-control" value="{{$notulen->ecp_no}}">
            </div>

              
          </div>

          <div class="col-md-4">
          <div class="form-group">
            <label>Pimpinan Rapat</label>
              <select class="form-control select2 @error('notulen_pimpinan_rapat') is-invalid @enderror" id="notulen_pimpinan_rapat" name="notulen_pimpinan_rapat" value="{{old('notulen_pimpinan_rapat')}}">
                <option selected disabled>Pilih Pimpinan Rapat</option>
              @foreach ($pimpinan as $item)
                <option value="{{$item->user_nid}}">{{$item->user_name}} : {{$item->jabatan->jabatan_name}} {{$item->unit->unit_name}}</option>
              @endforeach
              </select>
              @error('notulen_pimpinan_rapat') <div class="invalid-feedback"> {{$message}} </div> @enderror
              </div>
              </div>
          
          <div class="col-md-3">
            <div class="form-group">
                <label for="notulen_notulis">Notulis</label>
                <select class="form-control select2 @error('') is-invalid @enderror" id="notulen_notulis" name="notulen_notulis" value="{{old('notulen_notulis')}}">
                <option selected value="{{auth()->user()->user_nid}}">{{auth()->user()->user_name}}</option>
                @error('notulen_notulis') <div class="invalid-feedback"> Masukkan Nama !  </div> @enderror 
                </select>
              </div>
          </div>
      </div>
      <div class="row">
      <div class="col-md-5">
      <div class="form-group">
      <label>Tanggal</label>
      <input type="date" class="form-control" name="notulen_tanggal" value="{{$notulen->notulen_tanggal}}">
      </div>
      </div>

      <div class="col-md-4">
      <div class="form-group">
      <label>Waktu</label>
      <input type="time" class="form-control" name="notulen_waktu" value="{{$notulen->notulen_waktu}}">
      </div>
      </div>
      
      <div class="col-md-3">
      <div class="form-group">
      <label>Tempat</label>
      <input type="text" class="form-control" name="notulen_tempat" value="{{$notulen->notulen_tempat}}">
      </div>
      </div>
      </div>

      <div class="row">
      <div class="form-group col-md-5 ">
      <label>Rapat/Pertemuan</label>
      <input type="text" name="notulen_rapat" class="form-control @error('notulen_rapat') is-invalid @enderror"  value="{{$notulen->notulen_rapat}}">
      @error('notulen_rapat') <div class="invalid-feedback"> {{$message}} </div> @enderror
      </div>
      <div class="form-group col-md-4 ">
      <label>Agenda</label>
      <input type="text" name="notulen_agenda" class="form-control @error('notulen_agenda') is-invalid @enderror" value="{{$notulen->notulen_agenda}}">
      @error('notulen_agenda') <div class="invalid-feedback"> {{$message}} </div> @enderror
      </div>
      <div class="form-group col-md-3 ">
      <label>Data Peserta</label>
      <input type="text" name="notulen_peserta" class="form-control @error('notulen_peserta') is-invalid @enderror" value="{{$notulen->notulen_peserta}}">
      @error('notulen_peserta') <div class="invalid-feedback"> {{$message}} </div> @enderror
      </div>
      </div>

      <div class="row">
      <div class="form-group col-md-12">
      <label>Pembahasan</label>
      <input class="form-control @error('notulen_pembahasan') is-invalid @enderror" rows="10" name="notulen_pembahasan" value="{{$notulen->notulen_pembahasan}}"></textarea>
                @error('notulen_pembahasan') <div class="invalid-feedback"> Masukkan Pembahasan !  </div> @enderror
        </div>
      </div>
      
      <div class="row">
      <div class="form-group col-md-12">
      <label>Permasalahan</label>
      <input class="form-control @error('notulen_permasalahan') is-invalid @enderror" rows="10" name="notulen_permasalahan" value="{{$notulen->notulen_permasalahan}}"></textarea>
                @error('notulen_permasalahan') <div class="invalid-feedback"> Masukkan Permasalahan !  </div> @enderror
        </div>
      </div>

      <div class="row">
      <div class="form-group col-md-12">
      <label>Hasil Pembahasan</label>
      <input class="form-control @error('notulen_hasil_pembahasan') is-invalid @enderror" rows="10" name="notulen_hasil_pembahasan" value="{{$notulen->notulen_hasil_pembahasan}}"></textarea>
                @error('notulen_hasil_pembahasan') <div class="invalid-feedback"> Masukkan Hasil Pembahasan !  </div> @enderror
        </div>
      
      </div>

    <div class="row">
      <div class="form-group">
      <button type="submit" class="btn btn-success">Simpan Data</button>
      </div>
    </div>

            


    <!-- /.content -->  
      </div>
    </div>
  @endsection
  <!-- /.content-wrapper -->

