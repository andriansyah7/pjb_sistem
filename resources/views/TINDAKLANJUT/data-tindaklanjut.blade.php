@extends('HalamanDepan.beranda')

@section('title','Data Tindak Lanjut ECP')
@section('container')
 
<div class="content">
      <div class ="card card-info card-outline">  
      <div class ="card-header">     
      @if (auth()->user()->role_id=="4")

          <div class ="card-tools inlane m-2">
            <a href="{{route('create-tindaklanjut')}}" class="btn btn-success btn-sm">Tindak Lanjut ECP <i class="fas fa-plus-square"></i></a>
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
                     <th>ID</th>
                    <th>NO ECP</th>
                    <th>NOTULIS</th>
                    <th>DESKRIPSI</th>
                    <th>TANGGAL</th>
                    <th width="200px">AKSI</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($tindaklanjut as $item)
                <tr>
                    <td>{{ $loop->iteration}}</td>                    
                    <td>{{ $item->tindaklanjut_id}}</td>                    
                    <td>{{$item->ecp->ecp_no}}</td>
                    <td>{{$item->notulis->user_name}}</td>
                    <td>{{$item->tindaklanjut_deskripsi}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>
                    @if (auth()->user()->role_id=="4")
                      <a href="{{route('show-tindaklanjut',$item->tindaklanjut_id)}}" class="badge badge-light"><i class="fas fa-eye" style="color:black"></i>Detail</a>
                       |
                      <a href="{{route('edit-tindaklanjut',$item->tindaklanjut_id)}}" class="badge badge-light"><i class="fas fa-file" style="color: blue"></i> Edit</a>
                       | 
               
                      <a href="{{route('delete-tindaklanjut',$item->tindaklanjut_id)}}" class="badge badge-light"><i onclick="return confirm('Yakin hapus data?')" class="fas fa-trash-alt" style="color: red"></i>Hapus</a>
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



 





