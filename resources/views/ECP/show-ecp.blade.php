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
                <th>{{date('d M Y',strtotime($ecp->created_at))}}</th>
                </tr>

                <tr>
                <th>Diajukan Oleh</th>
                <th>:</th>
                <th>{{$ecp->user->user_name}}</th>
                </tr>

                <tr>
                <th>Deskripsi</th>
                <th>:</th>
                <th>{{$ecp->ecp_deskripsi}}</th>
                </tr>

                

              
                </tbody>
             </table>

             
            
             <div>
            <a href="#" class="btn btn-info btn-sm">Print ECP <i class="fas fa-print"></i></a>
             </div>
             </div>
            </div>
             </div>
</div>
</div>

@endsection



 
