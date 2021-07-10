@extends('HalamanDepan.beranda')

@section('title','Detail APPROVAL MEQA')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">     

      <h3>Detail Approval MEQA</h3>
         
      </div>
        
            <!-- /.card-header -->
            <div class="card-body">
             <div class="row">
             <div class="col-md-5">
             <table class="table-sm table-noborder">
                <tbody>
                <tr>
                <th>No ECP </th>
                <th>:</th>
                <td>{{$meqa_approval->ecp_no}}</td>
                </tr>

                <tr>
                <th>Tanggal Approval</th>
                <th>:</th>
                <td>{{date('d M Y H:i:s',strtotime($meqa_approval->created_at))}}</td>
                </tr>

                <tr>
                <th>Manager EQA</th>
                <th>:</th>
                <td>{{$meqa_approval->user->user_name}}</td>
                </tr>
                
                <tr>
                <th>Status</th>
                <th>:</th>

                @if($meqa_approval->status_ecp_id == 2)
                    <td> <label class="badge badge-success">{{$meqa_approval->status_ecp->status_ecp_name}} </label></td>
                    

                    @elseif($meqa_approval->status_ecp_id == 1)
                    <td> <label class="badge badge-warning">{{$meqa_approval->status_ecp->status_ecp_name}} </label></td>

                    @elseif($meqa_approval->status_ecp_id == 3)
                    <td> <label class="badge badge-danger">{{$meqa_approval->status_ecp->status_ecp_name}} </label></td>
                    @endif
                </tr>

                <tr>
                <th>Drawings</th>
                <th>:</th>
                <td>{{$meqa_approval->drawings}}</td>
                </tr>
               
                <tr>
                <th>Operating Manual</th>
                <th>:</th>
                <td>{{$meqa_approval->operating_manual}}</td>
                </tr>

                <tr>
                <th>SOP</th>
                <th>:</th>
                <td>{{$meqa_approval->SOP}}</td>
                </tr>

                <tr>
                <th>Maint Manual</th>
                <th>:</th>
                <td>{{$meqa_approval->maint_manual}}</td>
                </tr>

                <tr>
                <th>Predictive Maint Schedules</th>
                <th>:</th>
                <td>{{$meqa_approval->predictive_maint_schedules}}</td>
                </tr>

                <tr>
                <th>Preventative Maint Schedules</th>
                <th>:</th>
                <td>{{$meqa_approval->preventative_maint_schedules}}</td>
                </tr>
                
                <tr>
                <th>MIMS Equipment</th>
                <th>:</th>
                <td>{{$meqa_approval->MIMS_equipment}}</td>
                </tr>

                <tr>
                <th>Process Control System</th>
                <th>:</th>
                <td>{{$meqa_approval->process_control_system}}</td>
                </tr>

                <tr>
                <th>Business Process</th>
                <th>:</th>
                <td>{{$meqa_approval->business_process}}</td>
                </tr>
                
                </tbody>
             </table>

             
            
            
             </div>
            </div>
             </div>
</div>
</div>

@endsection



 
