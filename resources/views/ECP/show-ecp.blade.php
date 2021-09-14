@extends('HalamanDepan.beranda')

@section('title','Detail ECP')
@section('container')

@if ((auth()->user()->role_id=='4')&& ($ecp->progres_id=='11'))

<div class ="card-tools inlane m-2">
@php
                       $ecp_no = str_replace('/','-',$ecp->ecp_no);
                    @endphp
            <a href="{{route('create-notulen')}}" class="btn btn-warning btn-sm">Notulen <i class="fas fa-plus-square"></i></a>
            <a href="{{route('progres-tindaklanjut',$ecp_no)}}" class="btn btn-info btn-sm">Tindak Lanjut <i class="fas fa-plus-square"></i></a>
         </div>
         @endif
<div class="content">
<div class="container-fluid">

        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
         @if ($ecp->progres_id!='0')
      <div class ="card card-info card-outline">  
      <div class ="card-header">     
      <h3 class="card-title">ECP</h3>  
             
      </div>   
            <!-- /.card-header -->
            <div class="card-body">
             <div class="row">
             <div class="col-15">
             <table class="table table-sm table-borderless">
                <tbody>
                <tr>
                <th width="120px">No ECP </th>
                <th>:</th>
                <th>{{$ecp->ecp_no}}</th>
                </tr>
                <tr>
                <th>Urgensi</th>
                <th>:</th>
                @if($ecp->urgensi_id == 1)
                    <td> <label class="badge badge-success">{{$ecp->urgensi->urgensi_name}} </label></td>          
                    @elseif($ecp->urgensi_id == 2)
                    <td> <label class="badge badge-warning">{{$ecp->urgensi->urgensi_name}} </label></td>
                    @elseif($ecp->urgensi_id == 3)
                    <td> <label class="badge badge-danger">{{$ecp->urgensi->urgensi_name}} </label></td>
                    @endif
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
                <td><i>{{$ecp->ecp_deskripsi}}</i></td>
                </tr>

                <tr>
                <th>Deskripsi Tambahan</th>
                <th>:</th>
                <td>{{$ecp->ecp_desktambahan}}</td>
                </tr>
                
                <tr>
                <th>Alasan</th>
                <th>:</th>
                <td>{{$ecp->ecp_alasan}}</td>
                </tr>


                <tr>
                <th>File Pendukung</th>
                <th>:</th>
                <th> <a href="{{asset($ecp->ecp_file_pendukung) }}" class="badge badge-info" download="">Download File      <i class="fas fa-download"></i></a></th>
                </tr>
                </tbody>
             </table>

             
<!--             
             <div>
             @php
                       $ecp_no = str_replace('/','-',$ecp->ecp_no);
                    @endphp
            <a href="{{route('cetakword',$ecp_no)}}" class="btn btn-info btn-sm">Print ECP <i class="fas fa-file-word"></i></a>
             </div> -->
             <!-- spv_approval -->
             @if ((auth()->user()->role_id=='3')&& ($ecp->progres_id=='1'))
             <div>
             <h5>Approve ECP ini ?</h5>
             </div>
            <div>
                  @php
                       $ecp_no = str_replace('/','-',$ecp->ecp_no);
                    @endphp
                    <a href="{{route('progres-spv',$ecp_no)}}" class="badge badge-dark"><i onclick="return confirm('Yakin Approve ECP ?')" class="fas fa-check-circle" style="color:chartreuse"></i> Approve</a>
                    <a href="{{route('reject-spv',$ecp_no)}}" class="badge badge-dark"><i onclick="return confirm('Yakin Reject ECP ?')" class="fas fa-times-circle" style="color:red"></i> Reject</a>

                    </div>
                    @endif

            <!-- Manager_terkait_approval -->
                    @if ((auth()->user()->role_id=='2') && ($ecp->progres_id=='2'))
            <div>
             <h5>Approve ECP ini ?</h5>
             </div>
            <div>
                    @php
                       $ecp_no = str_replace('/','-',$ecp->ecp_no);
                    @endphp

                    <a href="{{route('progres-manager',$ecp_no)}}" class="badge badge-dark"><i onclick="return confirm('Yakin Approve ECP ?')" class="fas fa-check-circle" style="color:chartreuse"></i> Approve</a>
                    <a href="{{route('reject-manager',$ecp_no)}}" class="badge badge-dark"><i onclick="return confirm('Yakin Reject ECP ?')" class="fas fa-times-circle" style="color:red"></i> Reject</a>
            </div>
                    @endif
                 
                 <!-- MEQA_approval -->
                    @if ((auth()->user()->fungsi_id=='4') && ($ecp->progres_id=='4'))
                    <div>
             <h5>Approve ECP ini ?</h5>
             </div>
            <div>
            @php
                       $ecp_no = str_replace('/','-',$ecp->ecp_no);
                    @endphp
                    <a href="{{route('progres-meqa',$ecp_no)}}" class="badge badge-dark"><i onclick="return confirm('Yakin Approve ECP ?')" class="fas fa-check-circle" style="color:chartreuse"></i>MEQA Approve</a>
                    <a href="{{route('reject-meqa',$ecp_no)}}" class="badge badge-dark"><i onclick="return confirm('Yakin Reject ECP ?')" class="fas fa-times-circle" style="color:red"></i> Reject</a>
            </div>     
                    @endif
     @if ($ecp->progres_id=='8')        
     @foreach ($sospv as $item)
    <td></td>
    @endforeach
 @php
    $spvso1 = $item->spv_so;
    @endphp

    @if ((auth()->user()->user_nid == $spvso1) && ($ecp->progres_id=='8'))

                  <div>
           <h5>Review ECP ini ?</h5> 
           </div>
          <div>
          @php
                     $ecp_no = str_replace('/','-',$ecp->ecp_no);
                  @endphp
                  <a href="{{route('progres-spv_so',$ecp_no)}}" class="badge badge-dark"><i onclick="return confirm('Yakin Approve ECP ?')" class="fas fa-check-circle" style="color:chartreuse"></i>Review SPV SO </a>
          </div> 
          @elseif  (auth()->user()->user_nid != $spvso1)
                  @endif
                @endif


                    <!-- MEQA_SignOff_ECP -->
                    @if ((auth()->user()->fungsi_id=='4') && ($ecp->progres_id=='5'))
                    <div>
             <h5>Sign Off ECP ini ?</h5>
             </div>
            <div>
            @php
                       $ecp_no = str_replace('/','-',$ecp->ecp_no);
                    @endphp
                    <a href="{{route('signoff-meqa',$ecp_no)}}" class="badge badge-dark"><i onclick="return confirm('Yakin Sign Off ECP ?')"class="fas fa-file-export" style="color:red"></i>Sign Off ECP</a>
                </div>
                  @endif     

               <!-- ECM_review -->
                  @if ((auth()->user()->role_id=='4') && ($ecp->progres_id=='3'))
                    <div>
             <h5>Review ECP Ini ?</h5>
             </div>
            <div>
            @php
                       $ecp_no = str_replace('/','-',$ecp->ecp_no);
                    @endphp
                    <a href="{{route('progres-review',$ecp_no)}}" class="badge badge-dark"><i class="fas fa-file-signature">+Review</i></a>

                </div>
                  @endif  
                  
</div>
</div>     
</div>
      </div>
@endif


<div class="card card-warning card-outline">
  <div class="card-header">
    <h3 class="card-title">Data Notulen ECP</h3>
    @if ($ecp->progres_id=='11') 
    @foreach ($staffso as $item)
    <td></td>
    @endforeach
 @php
    $staf = $item->staff_so;
    @endphp
    
    @if (auth()->user()->user_nid == $staf) 
    <a href="{{route('create-notulen',$ecp_no)}}" style="float:right" class="btn btn-success btn-sm"><i class="fas fa-plus-square"> Notulen </i></a>
    @elseif (auth()->user()->user_nid != $staf)
    
    @endif
@endif
  </div>
  <div class="card-body">
 <div class="row">
 <div class="col-12">
 <table class="table table-sm table-striped table-sm">
 <thead>
    <tr>
      <th>#</th>
      <th>No ECP</th>
      <th>Tanggal </th>
      <th>Notulis </th>
      <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
   
    @foreach ($notulen as $item)
    <tr>
    <td>{{ $loop->iteration}}</td>  
    <td>{{$item->ecp_no}}</td>
    <td>{{date('d M Y H:i:s',strtotime($item->created_at))}}</td>
    <td>{{$item->notulis->user_name}}</td>
    <td><a href="{{route('show-notulen',$item->notulen_id)}}" class="badge badge-light"><i class="fas fa-eye" style="color:black"></i> Detail</a></td>
    </tr>
  <!-- /.card-body -->
  @endforeach
    </tbody>
 </table>   
</div>
<!-- /.card -->
</div>
</div>
</div>


   


<div class="card card-warning card-outline">
  <div class="card-header">
    <h3 class="card-title">Data Tindak Lanjut ECP</h3>
    @if ($ecp->progres_id=='11')
   @foreach ($staffso as $item)
    <td></td>
    @endforeach
 @php
    $staf = $item->staff_so;
    @endphp
    
    @if (auth()->user()->user_nid == $staf) 
    <a href="{{route('progres-tindaklanjut',$ecp_no)}}" style="float:right"class="btn btn-warning btn-sm">Ready Sign Off <i class="fas fa-check-circle"></i></a> &nbsp

    <a href="{{route('create-tindaklanjut',$ecp_no)}}" style="float:right" class="btn btn-success btn-sm"><i class="fas fa-plus-square"> Tindak Lanjut </i></a>
    
    @elseif (auth()->user()->user_nid != $staf)
    @endif
    @endif
              </div>
              <div class="card-body">
             <div class="row">
             <div class="col-12">
             <table class="table table-sm table-striped table-sm">
             <thead>
                <tr>
                  <th>#</th>
                  <th>No ECP</th>
                  <th>Tanggal </th>
                  <th>Nama Staff SO </th>
                  <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
               
                @foreach ($tdk as $item)
                <tr>
                <td>{{ $loop->iteration}}</td>  
                <td>{{$item->ecp_no}}</td>
                <td>{{date('d M Y H:i:s',strtotime($item->created_at))}}</td>
                <td>{{$item->notulis->user_name}}</td>
                <td><a href="{{route('show-tindaklanjut',$item->tindaklanjut_id)}}" class="badge badge-light"><i class="fas fa-eye" style="color:black"></i> Detail</a></td>
                </tr>
              <!-- /.card-body -->
              @endforeach
                </tbody>
             </table>   
            </div>
            <!-- /.card -->
</div>
</div>
</div>
</div>


               
    


<div class="col-md-6">
            <!-- Form Element sizes -->
            @if  ($ecp->progres_id!='1')

            <div class="card card-success card-outline">
              <div class="card-header">
                <h3 class="card-title">Approval SPV Originator</h3>
              </div>
              <div class="card-body">
             <div class="row">
             <div class="col-15">
             <table class="table table-sm table-borderless">
                <tbody>
                @foreach ($spv as $spv_approval)
                <th width="1px">#{{ $loop->iteration}}</th> 
                <tr>
                <th >No ECP </th>
                <th>:</th>
                <th>{{$spv_approval->ecp_no}}</th>
                </tr>
                <tr>
                
                <th width="120px">Tanggal Approval </th>
                <th>:</th>
                <th>{{date('d M Y H:i:s',strtotime($spv_approval->created_at))}}</th>
                </tr>
                <tr>
                <th>Nama Supervisor</th>
                <th>:</th>
                <th>{{$spv_approval->user->user_name}}</th>
                </tr>
                <tr>
                <th>Status</th>
                <th>:</th>
                @if($spv_approval->status_ecp_id == 2)
                    <td> <label class="badge badge-success">{{$spv_approval->status_ecp->status_ecp_name}} </label></td>          
                    @elseif($spv_approval->status_ecp_id == 1)
                    <td> <label class="badge badge-warning">{{$spv_approval->status_ecp->status_ecp_name}} </label></td>
                    @elseif($spv_approval->status_ecp_id == 3)
                    <td> <label class="badge badge-danger">{{$spv_approval->status_ecp->status_ecp_name}} </label></td>
                    @endif
                </tr>
                
                <tr>
                <th>Alasan</th>
                <th>:</th>
                <td>{{$spv_approval->spv_approval_alasan}}</td>
                </tr>
                <tr>
                <th></th>
                  </tr>
              
              
              
              @endforeach
                </tbody>
             </table>   
            </div>
            <!-- /.card -->
</div>
</div>
</div>
@endif


@if  ($ecp->progres_id!='1'&&'2')
            <!-- Form Element sizes -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Approval Manager Originator</h3>
              </div>
              <div class="card-body">
             <div class="row">
             <div class="col-15">
             <table class="table table-sm table-borderless">
                <tbody>
                @foreach ($mng as $manager_approval)
                <tr>
                <th width="120px">No ECP </th>
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
                <td>{{$manager_approval->manager_approval_alasan}}</td>
                </tr>
              <!-- /.card-body -->
              @endforeach
                </tbody>
             </table>   
            </div>
            <!-- /.card -->
</div>
</div>
            </div>
@endif

@if  ($ecp->progres_id!='1')

<div class="card card-warning card-outline">
  <div class="card-header">
    <h3 class="card-title">Review Tim ECM</h3>
  </div>
  <div class="card-body">
 <div class="row">
 <div class="col-15">
 <table class="table table-sm table-borderless">
    <tbody>
    @foreach ($review as $item)
    <tr>
    <th width="120px">No ECP </th>
    <th>:</th>
    <th>{{$item->ecp_no}}</th>
    </tr>
    <tr>
    <th width="120px">Tanggal Approval </th>
    <th>:</th>
    <th>{{date('d M Y H:i:s',strtotime($item->created_at))}}</th>
    </tr>
    <tr>
    <th>Nama Reviewer</th>
    <th>:</th>
    <th>{{$item->user->user_name}}</th>
    </tr>
    
    
    <tr>
    <th>Hasil Review</th>
    <th>:</th>
    <td>{{$item->ecm_review_alasan}}</td>
    </tr>
  <!-- /.card-body -->
  @endforeach
    </tbody>
 </table>   
</div>
<!-- /.card -->
</div>
</div>
</div> 
@endif

@if  ($ecp->progres_id!='1')

<div class="card card-danger card-outline">
  <div class="card-header">
    <h3 class="card-title">Approval MEQA</h3>
  </div>
  <div class="card-body">
 <div class="row">
 <div class="col-15">
 <table class="table table-sm table-borderless">
    <tbody>
    @foreach ($meqa as $item)
    <tr>
    <th width="120px">No ECP </th>
    <th>:</th>
    <th>{{$item->ecp_no}}</th>
    </tr>
    <tr>
    <th width="120px">Tanggal Approval </th>
    <th>:</th>
    <th>{{date('d M Y H:i:s',strtotime($item->created_at))}}</th>
    </tr>
    <tr>
    <th>Nama MEQA</th>
    <th>:</th>
    <th>{{$item->user->user_name}}</th>
    </tr>

    <tr>
                <th>Status</th>
                <th>:</th>
                @if($item->status_ecp_id == 2)
                    <td> <label class="badge badge-success">{{$item->status_ecp->status_ecp_name}} </label></td>          
                    @elseif($item->status_ecp_id == 1)
                    <td> <label class="badge badge-warning">{{$item->status_ecp->status_ecp_name}} </label></td>
                    @elseif($item->status_ecp_id == 3)
                    <td> <label class="badge badge-danger">{{$item->status_ecp->status_ecp_name}} </label></td>
                    @endif
                </tr>

    <tr>
    <th>Disposisikan ke SPV</th>
    <th>:</th>
    <th>{{$item->spv->user_name}}</th>
    </tr>
    
    
    <tr>
    <th>Hasil Review</th>
    <th>:</th>
    <td>{{$item->meqa_approval_alasan}}</td>
    </tr>
  <!-- /.card-body -->
  
  @endforeach

  
    </tbody>
 </table>   
</div>
<!-- /.card -->
</div>
</div>
</div> 
@endif

@if  ($ecp->progres_id!='1')

<div class="card card-secondary card-outline">
  <div class="card-header">
    <h3 class="card-title">Review SPV SO </h3>

  </div>
  <div class="card-body">
 <div class="row">
 <div class="col-15">
 <table class="table table-sm table-borderless">
    <tbody>
    @foreach ($spvso as $item)
    <tr>
    <th width="120px">No ECP </th>
    <th>:</th>
    <th>{{$item->ecp_no}}</th>
    </tr>
    <tr>
    <th width="120px">Tanggal Approval </th>
    <th>:</th>
    <th>{{date('d M Y H:i:s',strtotime($item->created_at))}}</th>
    </tr>
    <tr>
    <th>Nama MEQA</th>
    <th>:</th>
    <th>{{$item->user->user_name}}</th>
    </tr>

    <tr>
    <th>Disposisikan ke STAFF</th>
    <th>:</th>
    <th>{{$item->staff->user_name}}</th>
    </tr>
    
    
    <tr>
    <th>Hasil Review</th>
    <th>:</th>
    <td>{{$item->spv_so_review}}</td>
    </tr>
  <!-- /.card-body -->
  
  @endforeach

  
    </tbody>
 </table>   
</div>
<!-- /.card -->
</div>
</div>
</div> 
@endif

</div>
  </div>
      </div>


@endsection



 
