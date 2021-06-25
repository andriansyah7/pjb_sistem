@extends('HalamanDepan.beranda')

@section('title','Detail APPROVAL 2')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">     

      <h3>Detail Approval Manager</h3>
         
      </div>
        
            <!-- /.card-header -->
            <div class="card-body">
             <div class="row">
             <div class="col-md-5">
             <table class="table table-borderless">
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
                <th>Manager</th>
                <th>:</th>
                <th>{{$manager_approval->user->user_name}}</th>
                </tr>

                <tr>
                <th>Status</th>
                <th>:</th>
                @if($manager_approval->status_ecp_id == 2)
                    <td> <label class="badge badge-success">{{$manager_approval->status_ecp->status_ecp_name}} </label></td>          
                    @elseif($manager_approval->status_ecp_id == 1)
                    <td> <label class="badge badge-warning">{{$manager_approval->status_ecp->status_ecp_name}} </label></td>
                    @elseif($manager_approval->status_ecp_id == 3)
                    <td> <label class="badge badge-danger">{{$manager_approval->status_ecp->status_ecp_name}} </label></td>
                    @endif
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



 
