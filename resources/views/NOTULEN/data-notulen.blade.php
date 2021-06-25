@extends('HalamanDepan.beranda')

@section('title','Data Notulen')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">     
      @if (auth()->user()->role_id=="4")

          <div class ="card-tools inlane m-2">
            <a href="{{route('create-notulen')}}" class="btn btn-success btn-sm">Notulen ECP <i class="fas fa-plus-square"></i></a>
         </div>
         @else
         @endif
      </div>
        
            <!-- /.card-header -->
            <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped myTable table-sm">
                <thead>
                <tr>
                     <th>#</th>
                    <th>NO ECP</th>
                    <th>PIMPINAN RAPAT</th>
                    <th>NOTULIS</th>
                    <th>AGENDA</th>
                    <th>TANGGAL</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($notulen as $item)
                <tr>
                    <td>{{ $loop->iteration}}</td>                    
                    <td>{{$item->ecp->ecp_no}}</td>
                    <td>{{$item->pimpinan_rapat->user_name}}</td>
                    <td>{{$item->notulis->user_name}}</td>
                    <td>{{$item->notulen_agenda}}</td>
                    <td>{{date('d M Y H:i:s',strtotime($item->created_at))}}</td>
                    <td>
                      <a href="{{route('show-notulen',$item->notulen_id)}}"><i class="fas fa-eye" style="color:black"></i></a>
                    @if (auth()->user()->role_id=="4")
                       |
                      <a href="{{route('edit-notulen',$item->notulen_id)}}"><i class="fas fa-file" style="color: blue"></i></a>
                       | 
               
                      <a href="{{route('delete-notulen',$item->notulen_id)}}"><i onclick="return confirm('Yakin hapus data?')" class="fas fa-trash-alt" style="color: red"></i></a>
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


 





