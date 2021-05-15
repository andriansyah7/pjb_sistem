@extends('HalamanDepan.beranda')

@section('title','Detail Notulen')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">     

      <h3>Notulen Rapat</h3>
         
      </div>
        
            <!-- /.card-header -->
            <div class="card-body">
             <div class="row">
             <div class="col-md-5">
             <table class="table table-noborder">
                <tbody>
                <tr>
                <th>Pimpinan Rapat </th>
                <th>:</th>
                <th>{{$notulen->pimpinan_rapat->user_name}}</th>
                </tr>

                <tr>
                <th>Tanggal</th>
                <th>:</th>
                <th>{{date('d M Y',strtotime($notulen->notulen_tanggal))}}</th>
                </tr>

                <tr>
                <th>Waktu</th>
                <th>:</th>
                <th>{{$notulen->notulen_waktu}}</th>
                </tr>

                <tr>
                <th>Tempat</th>
                <th>:</th>
                <th>{{$notulen->notulen_tempat}}</th>
                </tr>

                <tr>
                <th>Rapat/Pertemuan</th>
                <th>:</th>
                <th>{{$notulen->notulen_rapat}}</th>
                </tr>

                <tr>
                <th>Agenda</th>
                <th>:</th>
                <th>{{$notulen->notulen_agenda}}</th>
                </tr>

                <tr>
                <th>Peserta</th>
                <th>:</th>
                <th>{{$notulen->notulen_peserta}}</th>
                </tr>
             
            

              
                </tbody>
             </table>

             <div>
             <label>Pembahasan  :  </label> {{$notulen->notulen_pembahasan}}
             </div>
             
             <div>
             <label>Permasalahan  :  </label> {{$notulen->notulen_permasalahan}}
             </div>
            
             <div>
             <label>Hasil Pembahasan  :  </label> {{$notulen->notulen_hasil_pembahasan}}
             </div>
            
             <div>
            <a href="{{route('cetaknotulen',$notulen->notulen_id)}}" class="btn btn-info btn-sm">Print Notulen <i class="fas fa-file-word"></i></a>
             </div>
             </div>
            </div>
             </div>
</div>
</div>

@endsection



 
