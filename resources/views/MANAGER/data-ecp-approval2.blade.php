@extends('HalamanDepan.beranda')

@section('title','Data ECP')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">     
          <div class ="card-tools inlane m-2">
            <a href="{{route('create-manager')}}" class="btn btn-success btn-sm">Approval ECP <i class="fas fa-plus-square"></i></a>
         </div>
      </div>
        
            <!-- /.card-header -->
            <div class="card-body">
            <div class="table-responsive">
              <table id="#example2" class="table table-bordered table-striped myTable table-sm">
                <thead>
                <tr>
                  <th>#</th>
                  <th>NO ECP</th>
                  <th>NAMA</th>
                  <th>DESKRIPSI</th>
                  <th>APPROVAL1</th>
                  <th>APPROVAL2</th>
                  <th>FILE PENDUKUNG</th>
                  <th>TANGGAL PENGAJUAN</th>
                  <th>PROGRES</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($ecpapproval as $item)
                <tr>
                 <td>{{ $loop->iteration}}</td>                 
                    <td>{{$item->ecp_no}}</td>
                    <td>{{$item->user->user_name}}</td>
                    <td>{{$item->ecp_deskripsi}}</td>
                    <td>{{$item->approval1->user_name}}</td>
                    <td>{{$item->approval2->user_name}}</td>
                    <td> <p> <a href="{{asset($item->ecp_file_pendukung) }}" class="btn btn-xs btn-info" download=""><i class="fas fa-download"></i>  Download File</a></p></td>
                    <td>{{date('d M Y H:i:s',strtotime($item->created_at))}}</td>
                    <td><i>{{$item->progres->progres_name}}</i></td>
                    <td>
                    @php
                       $ecp_no = str_replace('/','-',$item->ecp_no);
                    @endphp
                    <a href="{{route('show-ecp',$ecp_no)}}" class="badge badge-dark"><i class="fas fa-eye" style="color:aliceblue"></i> Detail</a>

                    @if ((auth()->user()->role_id=='2') && ($item->progres_id=='2'))
                    <a href="{{route('progres-manager',$ecp_no)}}" class="badge badge-dark"><i onclick="return confirm('Yakin Approve ECP ?')" class="fas fa-check-circle" style="color:chartreuse"></i> Approve</a>
                    <a href="{{route('reject-manager',$ecp_no)}}" class="badge badge-dark"><i onclick="return confirm('Yakin Reject ECP ?')" class="fas fa-times-circle" style="color:red"></i> Reject</a>
                    @endif
                    @if ((auth()->user()->fungsi_id=='4') && ($item->progres_id=='4'))
                    <a href="{{route('progres-meqa',$ecp_no)}}" class="badge badge-dark"><i onclick="return confirm('Yakin Approve ECP ?')" class="fas fa-check-circle" style="color:chartreuse"></i>MEQA Approve</a>
                    <a href="{{route('reject-meqa',$ecp_no)}}" class="badge badge-dark"><i onclick="return confirm('Yakin Reject ECP ?')" class="fas fa-times-circle" style="color:red"></i> Reject</a>

                    @endif
                    @if ((auth()->user()->fungsi_id=='4') && ($item->progres_id=='5'))
                    <a href="{{route('signoff-meqa',$ecp_no)}}" class="badge badge-dark"><i onclick="return confirm('Yakin Sign Off ECP ?')"class="fas fa-file-export" style="color:red"></i>Sign Off ECP</a>
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



 
