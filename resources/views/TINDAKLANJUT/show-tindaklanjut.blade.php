@extends('HalamanDepan.beranda')

@section('title','Detail Tindak Lanjut')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">     

      <h4>Tindak Lanjut ECP</h4>
         
      </div>
        
            <!-- /.card-header -->
            <div class="card-body">
             <div class="row">
             <div class="col-md-5">
             <table class="table table-borderless table-sm">
                <tbody>
                <tr>
                <th>No ECP </th>
                <th>:</th>
                <th>{{$tindaklanjut->ecp_no}}</th>
                </tr>

                <tr>
                <th>Tanggal Approval</th>
                <th>:</th>
                <th>{{date('d M Y H:i:s',strtotime($tindaklanjut->created_at))}}</th>
                </tr>

                <tr>
                <th>Staff SO</th>
                <th>:</th>
                <th>{{$tindaklanjut->notulis->user_name}}</th>
                </tr>

                <tr>
                <th>File Terkait</th>
                <th>:</th>
                <th><p> <a href="{{asset($tindaklanjut->tindaklanjut_file_terkait) }}" class="badge badge-info" download="">Download File      <i class="fas fa-download"></i></a></p></th>
                </tr>
               
                
                <tr>
                <th>Deskripsi</th>
                <th>:</th>
                <td>{{$tindaklanjut->tindaklanjut_deskripsi}}</td>
                </tr>



                </tbody>
             </table>

             
            
             
             </div>
            </div>
             </div>
</div>
</div>

@endsection



 
