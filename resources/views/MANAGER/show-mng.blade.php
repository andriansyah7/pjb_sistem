@extends('HalamanDepan.beranda')

@section('title','Detail APPROVAL 1')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">     

      <h3>Detail Approval Supervisor</h3>
         
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
                <th>{{$manager_approval->ecp_no}}</th>
                </tr>

                <tr>
                <th>Tanggal Approval</th>
                <th>:</th>
                <th>{{date('d M Y H:i:s',strtotime($manager_approval->created_at))}}</th>
                </tr>

                <tr>
                <th>Supervisor</th>
                <th>:</th>
                <th>{{$manager_approval->user->user_name}}</th>
                </tr>
                
                <tr>
                <th>Alasan</th>
                <th>:</th>
                <th>{{$manager_approval->manager_approval_alasan}}</th>
                </tr>


                </tbody>
             </table>

             
            
             <div>
            <a href="" class="btn btn-info btn-sm">Print Approval <i class="fas fa-print"></i></a>
             </div>
             </div>
            </div>
             </div>
</div>
</div>

@endsection



 
