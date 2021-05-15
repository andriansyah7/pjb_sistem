@extends('HalamanDepan.beranda')

@section('title','Detail ECP')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">     

      <h3>ECP</h3>
         
      </div>
        
            <!-- /.card-header -->
            <div class="card-body">
             <div class="row">
             <div class="col-md-5">
             <table class="table table-noborder">
                <tbody>
                <tr>
                <th>No ECP </th>
                <th>:</th>
                <th>{{$ecp->ecp_no}}</th>
                </tr>

                <tr>
                <th>Tanggal Diajukan</th>
                <th>:</th>
                <th>{{date('d M Y H:i:s',strtotime($ecp->created_at))}}</th>
                </tr>

                <tr>
                <th>Diajukan Oleh</th>
                <th>:</th>
                <th>{{$ecp->user->user_name}}</th>
                </tr>

                <tr>
                <th>Approval 1</th>
                <th>:</th>
                <th>{{$ecp->approval1->user_name}}</th>
                </tr>
              
                <tr>
                <th>Approval 2</th>
                <th>:</th>
                <th>{{$ecp->approval2->user_name}}</th>
                </tr>
                
                <tr>
                <th>Deskripsi</th>
                <th>:</th>
                <th><i>{{$ecp->ecp_deskripsi}}</i></th>
                </tr>

                <tr>
                <th>Deskripsi Tambahan</th>
                <th>:</th>
                <th>{{$ecp->ecp_desktambahan}}</th>
                </tr>
                
                <tr>
                <th>Alasan</th>
                <th>:</th>
                <th>{{$ecp->ecp_alasan}}</th>
                </tr>


                <tr>
                <th>File Pendukung</th>
                <th>:</th>
                <th><p> <a href="{{asset($ecp->ecp_file_pendukung) }}" class="btn btn-xs btn-info" download="">Download File      <i class="fas fa-download"></i></a></p></th>
                </tr>
                </tbody>
             </table>

             
            
             <div>
             @php
                       $ecp_no = str_replace('/','-',$ecp->ecp_no);
                    @endphp
            <a href="{{route('cetakword',$ecp_no)}}" class="btn btn-info btn-sm">Print ECP <i class="fas fa-file-word"></i></a>
             </div>
             </div>
            </div>
             </div>
</div>
</div>

@endsection



 
