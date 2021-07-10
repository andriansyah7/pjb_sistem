@extends('HalamanDepan.beranda')

@section('title','Detail Dokumen RCFA')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">     

      <h5>Detail Dokumen RCFA : {{$rcfa->rcfa_no}}</h5>
         
      </div>
        
            <!-- /.card-header -->
            <div class="card-body">
             <div class="row">
             <div class="col-md-5">
             <table class="table-sm table-noborder">
                <tbody>
                <tr>
                <th>No Dokumen RCFA </th>
                <th>:</th>
                <td>{{$rcfa->rcfa_no}}</td>
                </tr>

                <tr>
                <th>Tanggal Approval</th>
                <th>:</th>
                <td>{{date('d M Y H:i:s',strtotime($rcfa->created_at))}}</td>
                </tr>

                <tr>
                <th>Nama Pembuat</th>
                <th>:</th>
                <td>{{$rcfa->user->user_name}}</td>
                </tr>
                
                <tr>
                <th>Deskripsi</th>
                <th>:</th>
                <td><i>{{$rcfa->rcfa_deskripsi}}</i></td>
                </tr>

                <tr>
                <th>File Pendukung</th>
                <th>:</th>
                <th> <a href="{{asset($rcfa->rcfa_file_pendukung) }}" class="badge badge-info" download="">Download File      <i class="fas fa-download"></i></a></th>
                </tr>
                </tbody>
             </table>

             
            
            
             </div>
            </div>
             </div>
</div>
</div>

@endsection



 
