@extends('HalamanDepan.beranda')

@section('title','Data Approval MEQA')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">     
      @if ((auth()->user()->role_id=="2") && (auth()->user()->fungsi_id=="4"))

          <div class ="card-tools inlane m-2">
            <a href="{{route('create-meqa')}}" class="btn btn-success btn-sm">Approval ECP <i class="fas fa-plus-square"></i></a>
         </div>
         @endif
      </div>
        
            <!-- /.card-header -->
            <div class="card-body">
            <div class="table-responsive">
              <table id="#example2" class="table table-bordered table-striped myTable table-sm">
                <thead>
                <tr>
                  <th>#</th>
                  <th>NO ECP</th>
                  <th>STATUS</th>
                  <th>NAMA MEQA</th>
                  <th>APPROVED DATE</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($meqa as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>                  
                    <td>{{$item->ecp->ecp_no}}</td>
                    @if($item->status_ecp_id == 2)
                    <td> <label class="badge badge-success">{{$item->status_ecp->status_ecp_name}} </label></td>
                    

                    @elseif($item->status_ecp_id == 1)
                    <td> <label class="badge badge-warning">{{$item->status_ecp->status_ecp_name}} </label></td>

                    @elseif($item->status_ecp_id == 3)
                    <td> <label class="badge badge-danger">{{$item->status_ecp->status_ecp_name}} </label></td>
                    @endif
                    <td>{{$item->user->user_name}}</td>
                    <td>{{date('d M Y H:i:s',strtotime($item->created_at))}}</td>

                    <td>
                    <a href="{{route('show-meqa',$item->meqa_approval_id)}}" class="badge badge-dark"><i class="fas fa-eye" style="color:white"></i> Detail</a>
                    @if ($item->user_nid==auth()->user()->user_nid)

                      <a href="{{route('edit-meqa',$item->meqa_approval_id)}}" class="badge badge-dark"><i class="fas fa-edit" style="color:blue"></i>Edit</a> 
                      
                      <a href="{{route('delete-meqa',$item->meqa_approval_id)}}" class="badge badge-dark"><i onclick="return confirm('Yakin hapus data?')" class="fas fa-trash-alt" style="color: red"></i>Hapus</a>
                   @endif
                    </td>
                </tr>
                @endforeach
                </tbody>
              </table>
              </div>
            </div>
</div>
</div>
@endsection



 
