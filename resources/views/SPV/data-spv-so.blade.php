@extends('HalamanDepan.beranda')

@section('title','Data Disposisi ECP')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">     
      <a><b>ECP yang perlu dihandle oleh : </b></a><a style="color:red"><b>{{$nama}} ({{$jumlahspv}})</b></a>   

      </div>
    
        
            <!-- /.card-header -->
            <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped myTable table-sm">
                <thead>
                <tr>
               
                  <th>#</th>
                  <th>NO ECP</th>
                  <th>NAMA SUPERVISOR</th>
                  <th>DISPOSISI STAFF SO</th>
                  <th>APPROVED DATE</th>
                  <th width="190px">AKSI</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($spv as $e=>$item)
                <tr>
                <td>{{ $loop->iteration}}</td>                    
                    <td>{{$item->ecp_no}}</td>
                    <td>{{$item->user->user_name}}</td>
                    <td>{{$item->staff->user_name}}</td>
                    
                    <td>{{date('d M Y H:i:s',strtotime($item->created_at))}}</td>

                    <td>
                    @php
                       $ecp_no = str_replace('/','-',$item->ecp_no);
                    @endphp
                    <a href="{{route('show-ecp',$ecp_no)}}" class="badge badge-light"><i class="fas fa-eye" style="color:black"></i>Detail</a>

                    <!-- @if ($item->user_nid==auth()->user()->user_nid)
                      <a href="{{route('edit-spv',$item->spv_approval_id)}}" class="badge badge-dark"> <i class="fas fa-edit" style="color:blue"></i>Edit</a> 
                      
                      <a href="{{route('delete-spv',$item->spv_approval_id)}}" class="badge badge-dark"><i onclick="return confirm('Yakin hapus data?')" class="fas fa-trash-alt" style="color: red"></i>Hapus</a>
                    @endif -->
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



 
